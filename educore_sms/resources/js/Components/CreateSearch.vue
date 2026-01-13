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
    }
});

const model = defineModel({
    type: null,
    required: true,
});
</script>

<template>
    <div class="grid grid-cols-1 md:grid-cols-2 mt-4 items-center">
        <div class="mb-3">
            <Link
                v-if="show"
                :href="href"
                class="px-4 py-2 bg-school-primary text-white rounded-md hover:bg-school-primary-hover"
            >
                {{ caption }}
            </Link>
        </div>
        <div class="">
            <input
                v-model="model"
                type="search"
                class="px-2 py-2 rounded-md w-full bg-gray-200"
            />
        </div>
    </div>
</template>
