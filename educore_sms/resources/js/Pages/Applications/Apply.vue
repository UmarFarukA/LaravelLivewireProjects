<script setup lang="ts">
import { useForm } from "@inertiajs/vue3";
import { toast } from "vue-sonner";
import { genders } from "../../Constants/gender";

import AppLayout from "../../Layouts/AppLayout.vue";
import InputField from "../../Components/InputField.vue";
import SelectField from "../../Components/SelectField.vue";
import { usePage } from "@inertiajs/vue3";

defineProps({
    classrooms: Object,
});

const form = useForm({
    first_name: "",
    last_name: "",
    gender: "",
    dob: "",
    parent_name: "",
    parent_phone: "",
    email: "",
    previous_school: "",
    classroom_id: "",
    address: "",
});

const submit = () => {
    form.post(route("applications.store"), {
        preserveScroll: true,
        onSuccess: () => {
            toast.success("Application submitted successfully!");
            form.reset()
        },
        onError: () => {
            toast.error("Failed to submit application. Please check your inputs.")
        },
    })
};

const page = usePage();

</script>

<template>
    <AppLayout>
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

                <div v-if="page.flash.message" class="p-2 text-center mb-4 text-green-50 bg-green-600 rounded-md">
                    {{ page.flash.message }}
                </div>

                <!-- Form -->
                <form @submit.prevent="submit" class="space-y-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <InputField
                            v-model="form.first_name"
                            label="First Name"
                            placeholder="First Name"
                            :message="form.errors.first_name"
                        />
                        <InputField
                            v-model="form.last_name"
                            label="Last Name"
                            placeholder="last Name"
                            :message="form.errors.last_name"
                        />
                    </div>

                    <div
                        class="grid grid-cols-1 md:grid-cols-2 gap-4 p-1 rounded-md"
                    >
                        <SelectField
                            v-model="form.gender"
                            for="gender"
                            id="gender"
                            label="Gender"
                            :items="genders"
                            label-key="label"
                            value-key="id"
                            :message="form.errors.gender"
                        />

                        <InputField
                            type="date"
                            v-model="form.dob"
                            label="Date of Birth"
                            placeholder="First Name"
                            :message="form.errors.dob"
                        />
                    </div>

                    <div
                        class="grid grid-cols-1 md:grid-cols-2 gap-4 p-1 rounded-md"
                    >
                        <InputField
                            v-model="form.previous_school"
                            label="Previous School"
                            placeholder="Previous school.."
                            :message="form.errors.previous_school"
                        />

                        <SelectField
                            for="classes"
                            id="classes"
                            label-key="name"
                            value-key="id"
                            label="Class Applying For"
                            v-model="form.classroom_id"
                            :items="classrooms"
                            :message="form.errors.classroom_id"
                        />
                    </div>

                    <div
                        class="grid grid-cols-1 md:grid-cols-2 gap-4 p-1 rounded-md"
                    >
                        <InputField
                            v-model="form.parent_name"
                            label="Parent Name"
                            placeholder="Parent/Guardian Name"
                            :message="form.errors.parent_name"
                        />
                        <InputField
                            v-model="form.parent_phone"
                            label="Parent Phone"
                            placeholder="Parent Phone Number"
                            :message="form.errors.parent_phone"
                        />
                    </div>

                     <div
                        class="grid grid-cols-1 md:grid-cols-2 gap-4 p-1 rounded-md"
                    >
                    <InputField
                        type="email"
                        v-model="form.email"
                        label="Parent Email"
                        placeholder="Parent Email"
                        :message="form.errors.email"
                    />

                    <InputField
                        v-model="form.address"
                        label="Address"
                        placeholder="Address"
                        :message="form.errors.address"
                    />
                    </div>


                    <!-- Actions -->
                    <div class="pt-4">
                        <button
                            :disabled="form.processing"
                            class="w-full bg-school-primary text-white py-2.5 rounded-lg hover:bg-school-primary-hover disabled:opacity-60"
                        >
                            Submit Application
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </AppLayout>
</template>
