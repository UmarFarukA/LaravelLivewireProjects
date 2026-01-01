<script setup>
    defineProps({
        title: {
            type: String,
            required: true
        },
        disabled: Boolean
    })
</script>

<template>
    <div class="my-6 flex items-center justify-start">
        <button
            :disabled="disabled"
            class="mt-3 w-full bg-school-primary hover:bg-school-primary-hover text-white py-2.5 rounded-lg font-medium transition">
            <!-- <Spinner v-if="processing" /> -->
            {{title}}
        </button>
    </div>
</template>
