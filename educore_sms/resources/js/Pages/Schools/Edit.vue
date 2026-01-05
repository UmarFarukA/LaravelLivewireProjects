<script setup>
import { Modal } from "@inertiaui/modal-vue";
import { Link, useForm } from "@inertiajs/vue3";
import { ref } from "vue";
import InputField from "@/Components/InputField.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { toast } from "vue-sonner";

const modalRef = ref(null);

const props = defineProps({
    school: Object,
});

const form = useForm({
    name: props.school.name,
    email: props.school.email,
    address: props.school.address,
    phone: props.school.phone,
    school_logo: props.school.school_logo,
    status: props.school.status,
    preview: null,
});

const handleSubmit = () => {
    form.put(route("schools.update", props.school.id), {
        preserveScroll: true,
        onSuccess: () => {
            toast.success("School updated successfully!");
        },
        onError: () => {
            toast.error(
                "Failed to update school. Please check the form for errors.",
            );
        },
    });
};

const change = (e) => {
    form.school_logo = e.target.files[0];
    form.preview = URL.createObjectURL(e.target.files[0]);
};
</script>

<template>
    <AuthenticatedLayout title="Edit School">
        <div class="w-full md:w-2/3">
            <form class="space-y-2" @submit.prevent="handleSubmit">
                <InputField
                    v-model="form.name"
                    label="School Name"
                    placeholder="School Name"
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
                    v-model="form.address"
                    label="Address"
                    placeholder="Address"
                    :message="form.errors.address"
                />
                <InputField
                    v-model="form.phone"
                    label="Phone Number"
                    placeholder="Phone Number"
                    :message="form.errors.phone"
                />
                <div>
                    <select
                        v-model="form.status"
                        class="w-full px-3 py-2 border rounded-md"
                    >
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>

                <div class="flex items-center justify-between">
                    <InputField
                        type="file"
                        @input="change"
                        label="School Logo URL"
                        placeholder="School Logo"
                        :message="form.errors.school_logo"
                    />
                    <div>
                        <div
                            v-if="form.preview || form.school_logo"
                            class="ml-4"
                        >
                            <img
                                :src="
                                    form.preview
                                        ? form.preview
                                        : `/storage/${form.school_logo}`
                                "
                                alt="School Logo Preview"
                                class="w-20 h-20 rounded-md object-cover"
                            />
                        </div>
                        <div v-else class="ml-4 text-gray-500">
                            No Logo Uploaded
                        </div>
                    </div>
                </div>
                <div
                    class="flex-col md:flex-row md:items-center md:justify-end space-x-2 space-y-2"
                >
                    <Link
                        :href="route('schools.index')"
                        class="bg-gray-600 text-gray-50 px-4 py-2 rounded-md hover:bg-gray-500"
                    >
                        Cancel
                    </Link>
                    <button
                        type="submit"
                        class="px-4 py-2 bg-school-primary text-white rounded-md hover:bg-school-primary-hover"
                    >
                        Update
                    </button>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
