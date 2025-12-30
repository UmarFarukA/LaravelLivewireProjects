<script setup>
    defineProps({
        title: {
            type: String,
            required: true,
        },
    })
</script>

<template>
    <button class="w-full text-left px-4 py-2 rounded-lg bg-blue-50 text-blue-600 hover:bg-blue-600 hover:text-white transition;">
        {{title}}
    </button>
</template>
