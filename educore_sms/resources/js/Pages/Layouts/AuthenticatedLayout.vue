<script setup>
import { ref } from 'vue'
import Sidebar from '@/Components/Sidebar.vue'

defineProps({
    title: {
        type: String,
        default: null,
    },
});

const sidebarOpen = ref(false)
</script>

<template>
    <div class="min-h-screen bg-gray-50 flex">
        <!-- Mobile Overlay -->
        <div v-if="sidebarOpen" class="fixed inset-0 bg-black/40 z-40 md:hidden" @click="sidebarOpen = false" />

        <!-- Sidebar -->
        <Sidebar :sidebarOpen="sidebarOpen" />

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
                        Admin
                    </span>
                    <div class="h-8 w-8 rounded-full bg-gradient-to-br from-blue-600 to-indigo-600" />
                </div>
            </header>

            <!-- Page -->
            <main class="p-4 sm:p-6 flex-1">

                <slot />
            </main>
        </div>
    </div>
</template>
