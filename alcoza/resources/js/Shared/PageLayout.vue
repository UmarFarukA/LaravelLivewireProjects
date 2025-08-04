<template>

    <PageHeader title="{{ title }}" description="{{ subtitle }}" />

    <slot>

    </slot>

</template>

<script setup>
    import PageHeader from './PageHeader.vue';
import PageHeader from './PageHeader.vue';

    defineProps({
        title: String,
        subtitle: String
    })
</script>
