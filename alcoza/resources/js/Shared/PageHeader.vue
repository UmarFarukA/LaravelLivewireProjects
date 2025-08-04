<script setup>
    defineProps({
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
    <section class="bg-green-600 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">{{title}}</h1>
            <p class="text-xl max-w-3xl mx-auto">
                {{ description }}
            </p>
        </div>
    </section>
</template>
