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
    <!-- <div class="grid grid-cols-1 md:grid-cols-2 mt-4 items-center sm:space-y-3"> -->
        <!-- <div class=""></div> -->
        <!-- <div class=""></div> -->
    <div class="sm:flex-col sm:justify-between sm:gap-2 md:flex-row md:justify-between md:items-center md:gap-4">
        <Link
            v-if="show"
            :href="href"
            class="sm:w-full md:w-1/3 text-center px-4 py-2 bg-school-primary text-white rounded-md hover:bg-school-primary-hover"
        >
            {{ caption }}
        </Link>
        <input
            v-model="model"
            type="search"
            class="px-2 py-2 rounded-md w-full bg-gray-200 sm:w-full  md:w-2/4"
        />
    </div>
</template>
