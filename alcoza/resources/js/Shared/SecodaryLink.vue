<script setup>
defineProps({
    caption: {
        type: String,
        required: true
    }
})
</script>

<template>
    <Link
        class="border border-green-600 text-green-600 px-4 py-2 rounded-lg text-sm font-medium hover:bg-green-50 transition duration-300">
        {{ caption }}
    </Link>

</template>
