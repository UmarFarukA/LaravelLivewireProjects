<script setup>
    import SecodaryLink from './SecodaryLink.vue';

    defineProps({
        userName: {
            type: String,
            required: true
        },
        title: {
            type: String,
            required: true
        },
        description: {
            type: String,
            required: true
        }
    })
</script>

<template>
    <div class="bg-gray-50 rounded-lg p-6 text-center shadow-md">
        <div class="bg-gray-300 w-32 h-32 rounded-full mx-auto mb-4">
            <slot name="user-avatar"></slot>
        </div>
        <h4 class="text-xl font-semibold text-gray-900 mb-2">
            {{ userName }}
        </h4>
        <p class="text-green-600 font-medium mb-3">
            {{ title }}
        </p>
        <p class="text-sm text-gray-600 mb-4">
            {{ description }}
        </p>
        <div class="flex justify-center space-x-3">
            <SecodaryLink caption="View Profile" />
        </div>
    </div>
</template>
