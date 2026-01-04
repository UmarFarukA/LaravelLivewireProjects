<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    paginator: {
        type: Object,
        required: true,
    },
});

const makeLabel = (label) => {
    if (label == "&laquo; Previous"){
        return "&laquo";
    }
    else if(label == "Next &raquo;") {
        return "&raquo"
    }
    else {
        return label;
    }
}
</script>

<template>
    <div class="flex md:items-center md:justify-between mt-2">
        <div class="bg-white rounded-xl shadow-sm p-2">
            <component
            v-for="link in paginator.links"
            :key="link.label"
            :is="link.url ? 'Link' : 'span'"
            v-html="makeLabel(link.label)"
            :href="link.url"
            class="px-1 mx-1 space-x-2"
            :class="{
                'text-slate-300': !link.url,
                'px-3 py-1 text-center rounded-full bg-school-primary text-blue-50 font-medium':
                    link.active,
            }"
        />
        </div>
        <p class="text-school-primary text-sm">
            Showing {{ paginator.from }} to {{ paginator.to }} of {{ paginator.total }} results.
        </p>
        <!-- <div >
        </div> -->
    </div>
</template>
