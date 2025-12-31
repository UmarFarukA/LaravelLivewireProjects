<script setup lang="ts">
import NavLink from './NavLink.vue'


defineProps<{
    sidebarOpen: boolean
}>()
</script>

<template>
    <aside  class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r
         transform transition-transform duration-300
         md:static md:translate-x-0"
  :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
        <!-- Logo -->
        <div class="h-16 flex items-center px-6 border-b">
            <img src="/public/storage/images/logo.png" alt="EduCore SMS" class="h-10" />
            EduCore SMS
        </div>

        <!-- Navigation -->
        <nav class="px-4 py-6 space-y-1">
            <NavLink href="/dashboard" icon="LayoutDashboard">
                Dashboard
            </NavLink>

            <NavLink href="/schools" icon="University">
                Schools
            </NavLink>

            <NavLink href="/students" icon="Users">
                Students
            </NavLink>

            <NavLink href="/staff" icon="UserCog">
                Staff
            </NavLink>

            <NavLink href="/attendance" icon="ClipboardCheck">
                Attendance
            </NavLink>

            <NavLink href="/results" icon="GraduationCap">
                Results
            </NavLink>

            <NavLink href="/fees" icon="CreditCard">
                Fees
            </NavLink>

            <NavLink href="/settings" icon="Settings">
                Settings
            </NavLink>

            <div class="mt-6">
                <Link
                    method="post"
                    type="button"
                    as="button" href="/logout">
                    Logout
                </Link>
            </div>
        </nav>
    </aside>
</template>
