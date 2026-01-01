<script setup>
    defineProps({
        title: {
            type: String,
            required: true
        }
    })
</script>

<template>
    <button
        type="submit"
        class="px-2 py-1 rounded-md bg-red-600 hover:bg-red-700 text-red-50 text-sm font-medium"
    >
        {{ title }}
    </button>
</template>
