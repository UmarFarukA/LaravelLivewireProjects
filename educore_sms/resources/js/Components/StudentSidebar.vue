<script setup lang="ts">
import {  LogOut, X } from "lucide-vue-next";
import NavLink from "./NavLink.vue";

defineProps<{
    sidebarOpen: boolean;
}>();

// const close = () => {
//     sidebarOpen.value = false;
// }

</script>

<template>
    <aside
        class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r transform transition-transform duration-300 md:static md:translate-x-0"
        :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
    >
        <!-- Logo -->
        <div class="h-16 flex justify-between items-center px-6 border-b">
            <div class="flex  items-center">
                <img
                    src="/public/storage/images/logo.png"
                    alt="EduCore SMS"
                    class="h-10"
                />
                EduCore SMS
            </div>
            <div class="md:hidden">
                <X />
            </div>
        </div>

        <!-- Navigation -->
        <nav class="px-4 py-6 space-y-1">
            <NavLink href="/dashboard" icon="LayoutDashboard">
                Dashboard
            </NavLink>

            <NavLink href="/attendance" icon="ClipboardCheck"> Attendance </NavLink>

            <NavLink href="/results" icon="GraduationCap"> Results </NavLink>

            <NavLink href="/timetable" icon="UserCog"> Timetable </NavLink>

            <NavLink href="/fees" icon="CreditCard"> Fees </NavLink>

            <NavLink href="/settings" icon="Settings"> Settings </NavLink>

            <div >
                <Link
                    method="post"
                    type="button"
                    as="button"
                    href="/logout"
                    class="mt-8 px-4 text-gray-600 hover:bg-blue-50 hover:text-blue-600 rounded-md"
                >
                    <LogOut class="inline mr-2" />
                    Logout
                </Link>
            </div>
        </nav>
    </aside>
</template>
