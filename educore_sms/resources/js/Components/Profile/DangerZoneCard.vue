<script setup>
import { router } from '@inertiajs/vue3'

// const deactivateAccount = () => {
//   if (confirm('Are you sure? This will deactivate your account.')) {
//     router.delete(route('profile.deactivate'))
//   }
// }
</script>

<template>
  <div class="bg-red-50 border border-red-200 rounded-xl p-6 space-y-4">
    <h2 class="text-lg font-semibold text-red-700">Danger Zone</h2>

    <p class="text-sm text-red-600">
      Deactivating your account will disable your access to EduCore SMS.
    </p>

    <button
      @click=""
      class="bg-red-600 text-white px-4 py-2 rounded-lg"
    >
      Deactivate Account
    </button>
  </div>
</template>
