<script setup>
const model = defineModel({
    type: null,
    required: true
});

defineProps({
    label: {
        type: String,
        required: true
    },
    type: {
        type: String,
        required: true,
        default: "text"
    },
    placeholder: {
        type: String
    },
    message: String
});

// const model = defineModel();
</script>

<template>
    <div class="grid gap-1">
        <label class="text-gray-700 text-md">{{label}}</label>
        <input
            v-model="model"
            :type="type"
            :placeholder="placeholder"
            autocomplete="off"
            autofocus
            required
            :tabindex="2"
            class="text-gray-700 block w-full px-2 py-2 rounded-md border border-school-primary focus:border-school-primary"
        />
        <span class="ml-2 text-red-500" v-if="message">
            {{ message }}
        </span>
    </div>
</template>
