<script setup>
defineProps({
    caption: {
        type: String,
        required: true,
        default: "Add",
    },
    href: {
        type: String,
        required: true,
    },

    show: {
        type: Boolean,
        required: false,
        default: true,
    },
});

const model = defineModel({
    type: null,
    required: true,
});
</script>

<template>
    <div
        class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between"
    >
        <!-- Button -->
        <Link
            v-if="show"
            :href="href"
            class="w-full md:w-1/3 text-center px-4 py-2 bg-school-primary text-white rounded-md hover:bg-school-primary-hover transition"
        >
            {{ caption }}
        </Link>

        <!-- Search Input -->
        <input
            v-model="model"
            type="search"
            placeholder="Search..."
            class="w-full md:w-2/4 px-3 py-2 rounded-md bg-gray-200 focus:outline-none focus:ring-2 focus:ring-school-primary"
        />
    </div>
</template>
