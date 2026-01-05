<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import StatCard from '@/Components/StatCard.vue'
import ActionButton from '@/Components/ActionButton.vue'
</script>

<template>
  <AuthenticatedLayout title="Dashboard">
    <!-- Welcome -->
    <div class="mb-6">
      <h2 class="text-2xl font-bold text-gray-800">
        Welcome back 👋
      </h2>
      <p class="text-sm text-gray-500">
        Here’s an overview of your school today
      </p>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      <StatCard title="Schools" value="54" />
      <StatCard title="Staff" value="235" />
      <StatCard title="Attendance Today" value="92%" />
      <StatCard title="Fees Collected" value="₦3.2M" />
    </div>

    <!-- Main Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
      <!-- Recent Activities -->
      <div class="lg:col-span-2 bg-white rounded-xl shadow-sm p-6">
        <h3 class="font-semibold text-gray-800 mb-4">
          Recent Activities
        </h3>

        <ul class="space-y-3 text-sm">
          <li class="flex justify-between">
            <span>Grade 6 results uploaded</span>
            <span class="text-gray-400">2 hrs ago</span>
          </li>
          <li class="flex justify-between">
            <span>₦150,000 tuition payment received</span>
            <span class="text-gray-400">Today</span>
          </li>
          <li class="flex justify-between">
            <span>Attendance marked for JSS2</span>
            <span class="text-gray-400">Today</span>
          </li>
        </ul>
      </div>

      <!-- Quick Actions -->
      <div class="bg-white rounded-xl shadow-sm p-6">
        <h3 class="font-semibold text-gray-800 mb-4">
          Quick Actions
        </h3>

        <div class="space-y-3">
          <ActionButton title="Add School"></ActionButton>
          <ActionButton title="Assign School"></ActionButton>
          <ActionButton title="Create School Admin"></ActionButton>
          <!-- <ActionButton title="Record Payment"></ActionButton> -->
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>


