<script setup>
const model = defineModel({
    type: null,
    required: true,
});

defineProps({
    items: {
        type: Array,
        required: true,
    },

    label: {
        type: String,
        default: "Select",
    },

    valueKey: {
        type: String,
        default: "id",
    },

    labelKey: {
        type: String,
        default: "name",
    },

    disabled: {
        type: Boolean,
        default: false,
    },

    id: {
        type: String,
        default: null,
    },

    placeholder: {
        type: String,
        default: "-- Select --",
    },
    message: String,
});
</script>

<template>
    <div class="grid gap-1">
        <label v-if="label" :for="id" class="text-gray-700 text-sm font-medium">
            {{ label }}
        </label>
        <select
            :id="id"
            v-model="model"
            :disabled="disabled"
            class="block autofocus w-full px-3 py-2 rounded-md border border-gray-300 focus:border-school-primary focus:ring-school-primary disabled:bg-gray-100 disabled:cursor-not-allowed"
        >
            <option value="">{{ placeholder }}</option>

            <option
                v-for="item in items"
                :key="item[valueKey]"
                :value="item[valueKey]"
            >
                {{ item[labelKey] }}
            </option>
        </select>

        <span v-if="message" class="text-sm text-red-500">
            {{ message }}
        </span>
    </div>
</template>
