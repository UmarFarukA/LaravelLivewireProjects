<script setup lang="ts">
import AuthenticatedLayout from '../../Layouts/AuthenticatedLayout.vue'
</script>

<template>
  <AuthenticatedLayout title="Student Dashboard">
    <div class="mb-6">
      <h2 class="text-2xl font-bold text-gray-800">
        Welcome back 🎓
      </h2>
      <p class="text-sm text-gray-500">
        Here’s your academic overview
      </p>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
      <StatCard title="Attendance" value="94%" />
      <StatCard title="Subjects" value="9" />
      <StatCard title="Outstanding Fees" value="₦0" />
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <div class="bg-white p-6 rounded-xl shadow-sm">
        <h3 class="font-semibold mb-4">Today’s Timetable</h3>
        <ul class="space-y-2 text-sm">
          <li>English – 8:00am</li>
          <li>Mathematics – 9:00am</li>
        </ul>
      </div>

      <div class="bg-white p-6 rounded-xl shadow-sm">
        <h3 class="font-semibold mb-4">Recent Results</h3>
        <ul class="space-y-2 text-sm">
          <li>Mathematics – A</li>
          <li>English – B+</li>
        </ul>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
