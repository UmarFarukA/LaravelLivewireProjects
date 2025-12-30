<script setup>
defineProps({
    title: String,
    value: String,
})
</script>

<template>
  <div class="bg-white rounded-xl shadow-sm p-6">
    <p class="text-sm text-gray-500">{{ title }}</p>
    <p class="text-2xl font-bold text-gray-800 mt-1">
      {{ value }}
    </p>
  </div>
</template>
