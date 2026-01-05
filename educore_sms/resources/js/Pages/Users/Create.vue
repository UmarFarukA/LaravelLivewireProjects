<script setup>
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";
import InputField from "@/Components/InputField.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { toast } from "vue-sonner";

const modalRef = ref(null);

defineProps({
    name: String,
    email: String,
    password: String,
    password_confirmation: String,
    phone: String,
    avatar: String,
});

const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
    avatar: null,
    phone: null,
    preview: null,
});

const handleSubmit = () => {
    form.post(route("user.store"), {
        preserveScroll: true,
        onSuccess: () => toast.success("New user created Successfully!"),
        onFinish: () => form.reset(),
    });
};

const change = (e) => {
    form.avatar = e.target.files[0];
    form.preview = URL.createObjectURL(e.target.files[0]);
};
</script>

<template>
    <AuthenticatedLayout title="Add New User">
        <div class="w-full md:w-2/3">
            <form class="space-y-2" @submit.prevent="handleSubmit">
                <InputField
                    v-model="form.name"
                    label="Full Name"
                    placeholder="User full name"
                    :message="form.errors.name"
                />
                <InputField
                    v-model="form.email"
                    type="email"
                    label="Email Address"
                    placeholder="Email Address"
                    :message="form.errors.email"
                />

                <InputField
                    v-model="form.phone"
                    type="text"
                    label="Phone Number"
                    placeholder="Phone Number"
                    :message="form.errors.phone"
                />

                <InputField
                    v-model="form.password"
                    label="Password"
                    placeholder="************"
                    :message="form.errors.password"
                />

                <InputField
                    label="Confirm Password"
                    type="password"
                    v-model="form.password_confirmation"
                    :message="form.errors.password_confirmation"
                    placeholder="**********"
                />

                <InputField
                    type="file"
                    @input="change"
                    label="User Avatar URL"
                    placeholder="User Avatar"
                    :message="form.errors.avatar"
                />

                <div
                    class="flex-col md:flex-row md:items-center md:justify-end space-x-2 space-y-2"
                >
                    <button
                        class="bg-gray-600 text-gray-50 px-4 py-2 rounded-md hover:bg-gray-500"
                    >
                        Cancel
                    </button>
                    <button
                        :disabled="form.processing"
                        type="submit"
                        class="px-4 py-2 bg-school-primary text-white rounded-md hover:bg-school-primary-hover"
                    >
                        Save
                    </button>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
