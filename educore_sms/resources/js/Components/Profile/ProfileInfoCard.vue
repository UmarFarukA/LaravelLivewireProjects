<script setup>
import { usePage } from "@inertiajs/vue3";

const user = usePage().props.auth.user;

</script>

<template>
    <div class="bg-white rounded-xl border shadow-sm p-6 space-y-4">
        <h2 class="text-lg font-semibold text-gray-800">Profile Information</h2>
        <!-- :src="user.profile_photo_url || '/images/avatar.png'" -->
        <div class="flex items-center space-x-4">
            <img
                src=""
                class="h-16 w-16 rounded-full object-cover border"
                alt="Profile Photo"
            />

            <div>
                <p class="text-lg font-medium text-gray-900">{{ user.name }}</p>
                <!-- <span v-if="user.role === 1" class="text-sm text-gray-500">
                    Super Admin
                </span> -->
                <span
                    v-if="user.role === 1 || user.role === 2"
                    class="p-1 text-sm rounded-md bg-green-100 text-green-700"
                    >Super Admin</span
                >
                <span
                    v-else-if="user.role === 3"
                    class="p-1 text-sm rounded-md bg-purple-100 text-purple-700"
                    >Teacher</span
                >
                <span
                    v-else-if="user.role === 4"
                    class="p-1 text-sm rounded-md bg-lime-100 text-lime-700"
                    >Student</span
                >
                <span
                    v-else
                    class="p-1 text-sm bg-sky-100 rounded-md text-sky-700"
                    >Parent</span
                >
            </div>
        </div>
    </div>
</template>
