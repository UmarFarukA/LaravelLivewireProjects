<script setup>
import { usePage } from '@inertiajs/vue3'

const user = usePage().props.auth.user
</script>

<template>
  <div class="bg-white rounded-xl border shadow-sm p-6 space-y-4">
    <h2 class="text-lg font-semibold text-gray-800">Security</h2>

    <div class="text-sm text-gray-600 space-y-2">
      <!-- <p><strong>Last login:</strong> {{ user.last_login_at || 'N/A' }}</p>
      <p><strong>Account created:</strong> {{ user.created_at }}</p> -->

      <p><strong>Last login:</strong> 'N/A' </p>
      <p><strong>Account created:</strong> </p>
    </div>

    <div>
      <button class="text-red-600 text-sm hover:underline">
        Logout from all devices
      </button>
    </div>
  </div>
</template>
