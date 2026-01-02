<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    paginator: {
        type: Object,
        required: true,
    },
    to: Number,
    from: Number,
    total: Number,
});
</script>

<template>
    <div class="flex md:items-center md:justify-between mt-2">
        <div>
            <component
            v-for="link in paginator"
            :key="link.label"
            :is="link.url ? 'Link' : 'span'"
            v-html="link.label"
            :href="link.url"
            class="px-1 mx-1"
            :class="{
                'text-slate-300': !link.url,
                'px-3 py-1 text-center rounded-full bg-school-primary text-blue-50 font-medium':
                    link.active,
            }"
        />
        </div>

        <p class="text-school-secondary text-sm">Showing {{ from }} to {{ to }} of {{ total }} results.</p>
        <!-- <div >
        </div> -->
    </div>
</template>
