<template>
    <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
            {{ label }} <span class="text-red-600">*</span>
        </label>
        <input
            type="{{type}}"
            required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200"
        >
    </div>
</template>

<script setup>
    defineProps({
        label: {
            type: String,
            required: true
        },
        type: {
            type: String,
            required: true,
            default: "text"
        }
    })
</script>
