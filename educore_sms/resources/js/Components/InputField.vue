<script setup>
    defineProps({
        title: string,
        type: {
            type: string,
            required: true,
            default: string
        }
    });

    // const model = defineModel();
</script>

<template>
    <div class="flex gap-2">
        <label v-if="title">{{ title }}</label>
        <input :type="type" class="text-gray-700"/>
    </div>
</template>
