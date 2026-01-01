<script setup>
    defineProps({
        title: {
            type: String,
            required: true
        },
        href: {
            type: String,
            required: true
        }
    })
</script>

<template>
    <Link
        :href="href"
        class="px-2 py-1 bg-gray-600 hover:bg-gray-500 text-gray-50 rounded-md"
    >
        {{ title }}
    </Link>
</template>
