<script setup>
import { usePage, useForm } from "@inertiajs/vue3";
import { toast } from "vue-sonner";

const user = usePage().props.auth.user;
const form = useForm({
    avatar: null,
    preview: null,
});
const change = (e) => {
    form.avatar = e.target.files[0];
    form.preview = URL.createObjectURL(e.target.files[0]);
};

const handleSubmit = () => {
    form.put(route("settings.update.profile_image"), {
        preserveScroll: true,
        onSuccess: () => {
            toast.success("Profile image updated successfully!");
            form.reset("avatar", "preview");
        },
    });
};
</script>

<template>
    <div class="bg-white rounded-xl border shadow-sm p-6 space-y-4">
        <h2 class="text-lg font-semibold text-gray-800">Profile Information</h2>

        <div class="flex items-center space-x-4">
            <div>
                <div
                    v-if="user.avatar"
                    class="h-16 w-16 rounded-full object-cover border"
                >
                    <img
                        :src="user.avatar"
                        class="h-16 w-16 rounded-full object-cover border"
                        alt="Profile Photo"
                    />
                </div>
                <div class="flex flex-col" v-else>
                    <img
                        src="/public/storage/avatars/avatar.png"
                        class="h-16 w-16 rounded-full object-cover border"
                        alt="Default Profile Photo"
                    />
                </div>
            </div>

            <div class="space-y-3">
                <div class="flex flex-row space-x-2.5">
                    <p class="text-lg font-medium text-gray-900">
                        {{ user.name }}
                    </p>
                    <span
                        v-if="user.role === 1 || user.role === 2"
                        class="p-1 text-xs rounded-md bg-green-100 text-green-700"
                        >Super Admin</span
                    >
                    <span
                        v-else-if="user.role === 3"
                        class="p-1 text-xs rounded-md bg-purple-100 text-purple-700"
                        >Teacher</span
                    >
                    <span
                        v-else-if="user.role === 4"
                        class="p-1 text-xs rounded-md bg-lime-100 text-lime-700"
                        >Student</span
                    >
                    <span
                        v-else
                        class="p-1 text-sm bg-sky-100 rounded-md text-sky-700"
                        >Parent</span
                    >
                </div>
                <div>
                    <form @submit.prevent="handleSubmit" >
                        <div class="flex flex-col gap-4">
                            <input type="file" @input="change" />
                            <div>
                                <div
                                    v-if="form.preview || user.avatar"
                                    class="ml-4"
                                >
                                    <img
                                        :src="
                                            form.preview
                                                ? form.preview
                                                : `/storage/${user.avatar}`
                                        "
                                        alt="Profile Photo Preview"
                                        class="w-20 h-20 rounded-md object-cover"
                                    />
                                </div>

                            </div>
                        </div>
                        <button
                            :disabled="form.processing"
                            type="submit"
                            class="px-4 py-2 bg-school-primary text-white rounded-md hover:bg-school-primary-hover"
                        >
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
