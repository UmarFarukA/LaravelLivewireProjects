<script setup>
import { computed, ref } from 'vue'
import Sidebar from '@/Components/Sidebar.vue'
import TeacherSidebar from '@/Components/TeacherSidebar.vue'
import StudentSidebar from '@/Components/StudentSidebar.vue'
import ParentSidebar from '@/Components/ParentSidebar.vue'
import { Toaster } from 'vue-sonner'
import 'vue-sonner/style.css'
import { usePage } from '@inertiajs/vue3'
import { ROLES } from '@/Constants/roles.js'

defineProps({
    title: {
        type: String,
        default: null,
    },
});

const sidebarOpen = ref(false)

const page = usePage();
const role = computed(() => page.props.auth.user.role);


</script>

<template>
    <div class="min-h-screen bg-gray-50 flex">
        <!-- Mobile Overlay -->
        <div v-if="sidebarOpen" class="fixed inset-0 bg-black/40 z-40 md:hidden" @click="sidebarOpen = false" />

        <!-- Sidebar -->
        <Sidebar
            :sidebarOpen="sidebarOpen"
            v-if="role === ROLES.SUPER_ADMIN || role === ROLES.ADMIN"
        />
        <TeacherSidebar
            :sidebarOpen="sidebarOpen"
            v-else-if="role === ROLES.TEACHER"
        />
        <StudentSidebar
            :sidebarOpen="sidebarOpen"
            v-else-if="role === ROLES.STUDENT"
        />
        <ParentSidebar
            :sidebarOpen="sidebarOpen"
            v-else
        />


        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Topbar -->
            <header class="h-16 bg-white border-b flex items-center justify-between px-4 md:px-6">
                <div class="flex items-center gap-3">
                    <!-- Mobile Menu Button -->
                    <button class="md:hidden text-gray-600" @click="sidebarOpen = true">
                        ☰
                    </button>

                    <h1 class="text-lg font-semibold text-gray-800">
                        {{ title ?? 'Dashboard' }}
                    </h1>
                </div>

                <!-- User -->
                <div class="flex items-center gap-3">
                    <span class="text-sm text-gray-600 hidden sm:block">
                        {{$page.props.auth.user.name}}
                    </span>
                    <div class="h-8 w-8 rounded-full bg-gradient-to-br from-blue-600 to-indigo-600" />
                </div>
            </header>

            <!-- Page -->
            <main class="p-4 sm:p-6 flex-1">
                <Toaster position="top-right" richColors theme="light"/>
                <slot />
            </main>
        </div>
    </div>
</template>
