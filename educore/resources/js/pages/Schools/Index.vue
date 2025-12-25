<script setup lang="ts">
import Button from '@/components/ui/button/Button.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Manage Schools',
        href: dashboard().url,
    },
];
</script>

<template>
    <Head title="Schools" />

    <AppLayout :breadcrumbs="breadcrumbs">

    <div class="mt-3 px-3">
        <Button

            class="mb-4"
        >
            Create School
        </Button>
    </div>

    </AppLayout>
</template>
