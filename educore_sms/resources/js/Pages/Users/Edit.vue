<script setup>
import { useForm } from "@inertiajs/vue3";
import { ref } from "vue";
import InputField from "@/Components/InputField.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { toast } from "vue-sonner";

const props = defineProps({
    user: Object,
});

const form = useForm({
    id: props.user.id,
    name: props.user.name,
    avatar: props.user.avatar,
    phone: props.user.phone,
    status: props.user.status,
    preview: null,
});

const handleSubmit = () => {
    form.put(route("users.update", props.user.id), {
        preserveScroll: true,
        onSuccess: () => toast.success("New user updated Successfully!"),
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
                    v-model="form.phone"
                    type="text"
                    label="Phone Number"
                    placeholder="Phone Number"
                    :message="form.errors.phone"
                />

                <div>
                    <label class="text-gray-700 text-md">User Status</label>
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
                        label="User Avatar URL"
                        placeholder="User Avatar"
                        :message="form.errors.avatar"
                    />
                    <div>
                        <div
                            v-if="form.preview || form.avatar"
                            class="ml-4"
                        >
                            <img
                                :src="
                                    form.preview
                                        ? form.preview
                                        : `/storage/${form.avatar}`
                                "
                                alt="User Avatar"
                                class="w-20 h-20 rounded-md object-cover"
                            />
                        </div>
                        <div v-else class="ml-4 text-gray-500">
                            No Avatar Uploaded
                        </div>
                    </div>
                </div>

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
                <!-- <FormActions  :showCancel="true" :processing="form.processing"/> -->
            </form>
        </div>
    </AuthenticatedLayout>
</template>
