<script setup lang="ts">
import { useForm } from "@inertiajs/vue3";
import { toast } from "vue-sonner";

const form = useForm({
    first_name: "",
    last_name: "",
    gender: "",
    dob: "",
    parent_name: "",
    parent_phone: "",
    parent_email: "",
    previous_school: "",
    class_applied_for: "",
});


const submit = () => {
    form.post("/apply"), {
        onSuccess: () => toast.success("Application submitted successfully!"),
        onError: () => {
            toast.error("Failed to submit application. Please try again.");
            form.reset();
        }
    };
}
</script>

<template>
    <div
        class="min-h-screen bg-gray-50 flex items-center justify-center px-4 py-10"
    >
        <div class="w-full max-w-2xl bg-white rounded-xl shadow p-6">
            <div class="flex justify-center">
                <img
                    src="/public/storage/images/logo_1.png"
                    alt="EduCore SMS"
                    class="h-28"
                />
            </div>
            <!-- Header -->
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">
                    Student Admission Application
                </h1>
                <p class="text-sm text-gray-500 mt-1">
                    Kindly fill the form below to apply for admission.
                </p>
            </div>

            <!-- Form -->
            <form @submit.prevent="" class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <input
                        v-model="form.first_name"
                        type="text"
                        placeholder="First Name"
                        class="input p-1 rounded-md"
                    />
                    <input
                        v-model="form.last_name"
                        type="text"
                        placeholder="Last Name"
                        class="input p-1 rounded-md"
                    />
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-1 rounded-md">
                    <select v-model="form.gender" class="input">
                        <option value="">Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    <input v-model="form.dob" type="date" class="input" />
                </div>

                <input
                    v-model="form.parent_name"
                    type="text"
                    placeholder="Parent/Guardian Name"
                    class="input p-1 rounded-md"
                />
                <input
                    v-model="form.parent_phone"
                    type="text"
                    placeholder="Parent Phone Number"
                    class="input p-1 rounded-md"
                />
                <input
                    v-model="form.parent_email"
                    type="email"
                    placeholder="Parent Email (optional)"
                    class="input p-1 rounded-md"
                />
                <input
                    v-model="form.previous_school"
                    type="text"
                    placeholder="Previous School"
                    class="input p-1 rounded-md"
                />

                <select v-model="form.class_applied_for" class="input p-1 rounded-md">
                    <option value="">Class Applying For</option>
                    <!-- <option v-for="c in $page.props.classes" :key="c.id" :value="c.id">
            {{ c.name }}
          </option> -->
                    <option value="1">Class 1</option>
                    <option value="1">Class 2</option>
                </select>

                <!-- Actions -->
                <div class="pt-4">
                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="w-full bg-school-primary text-white py-2.5 rounded-lg hover:bg-school-primary-hover disabled:opacity-60"
                    >
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
