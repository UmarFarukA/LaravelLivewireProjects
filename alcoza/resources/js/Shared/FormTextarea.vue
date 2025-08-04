<script setup>
defineProps({
    label: {
        type: String,
        required: true
    }
})
</script>

<template>
    <label for="content" class="block text-sm font-medium text-gray-700 mb-2">
        {{ label }} <span class="text-red-600">*</span>
    </label>
    <textarea
        id="content"
        name="content"
        rows="6"
        required
        placeholder="Please provide details about your inquiry..."
        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition duration-200">
    </textarea>
</template>
