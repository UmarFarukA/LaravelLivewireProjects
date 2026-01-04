<script setup lang="ts">
import AuthenticatedLayout from '../Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3'
</script>

<template>
  <Head title="Super Admin Dashboard" />

  <AuthenticatedLayout title="Super Admin">
    <!-- Page Wrapper -->
    <div class="space-y-6">

      <!-- Welcome -->
      <div>
        <h2 class="text-2xl font-bold text-gray-800">
          Platform Overview
        </h2>
        <p class="text-sm text-gray-500">
          Monitor all your children school activities on EduCore SMS
        </p>
      </div>

      <!-- Stats -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        <StatCard title="Total Children" value="128" />
        <StatCard title="Active Children" value="112" />
        <StatCard title="Total Students" value="54,320" />
        <StatCard title="Admins" value="128" />
      </div>

      <!-- Main Grid -->
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- Schools -->
        <div class="lg:col-span-2 bg-white rounded-xl border p-5">
          <h3 class="font-semibold text-gray-800 mb-4">
            Recent activity
          </h3>

          <ul class="divide-y">
            <li class="py-3 flex justify-between items-center">
              <div>
                <p class="font-medium">Bright Future Academy</p>
                <p class="text-xs text-gray-500">Kaduna · Secondary</p>
              </div>
              <span class="text-xs text-green-600 font-medium">
                Active
              </span>
            </li>

            <li class="py-3 flex justify-between items-center">
              <div>
                <p class="font-medium">Success Model School</p>
                <p class="text-xs text-gray-500">Abuja · Primary</p>
              </div>
              <span class="text-xs text-yellow-600 font-medium">
                Trial
              </span>
            </li>
          </ul>

          <div class="mt-4">
            <a
              href="/super-admin/schools"
              class="text-sm text-blue-600 hover:underline"
            >
              View all schools →
            </a>
          </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-white rounded-xl border p-5">
          <h3 class="font-semibold text-gray-800 mb-4">
            Quick Actions
          </h3>

          <div class="space-y-3">
            <ActionButton label="Create New School" href="/super-admin/schools/create" />
            <ActionButton label="Create School Admin" href="/super-admin/admins/create" />
            <ActionButton label="Manage Plans" href="/super-admin/plans" />
            <ActionButton label="System Settings" href="/super-admin/settings" />
          </div>
        </div>

      </div>

    </div>
  </AuthenticatedLayout>
</template>
