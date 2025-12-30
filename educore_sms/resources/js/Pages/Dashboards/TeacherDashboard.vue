<script setup>
import AppLayout from '../Layouts/AppLayout.vue';
</script>

<template>
  <AppLayout title="Teacher Dashboard">
    <div class="mb-6">
      <h2 class="text-2xl font-bold text-gray-800">
        Good day, Teacher 👩‍🏫
      </h2>
      <p class="text-sm text-gray-500">
        Manage your classes and student performance
      </p>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
      <StatCard title="My Classes" value="5" />
      <StatCard title="Students" value="182" />
      <StatCard title="Subjects" value="6" />
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      <div class="bg-white p-6 rounded-xl shadow-sm">
        <h3 class="font-semibold mb-4">Today’s Classes</h3>
        <ul class="space-y-2 text-sm">
          <li>JSS2 – Mathematics (8:00am)</li>
          <li>SS1 – Physics (10:00am)</li>
        </ul>
      </div>

      <div class="bg-white p-6 rounded-xl shadow-sm">
        <h3 class="font-semibold mb-4">Pending Tasks</h3>
        <ul class="space-y-2 text-sm">
          <li>Upload SS2 results</li>
          <li>Mark JSS1 attendance</li>
        </ul>
      </div>
    </div>
  </AppLayout>
</template>
