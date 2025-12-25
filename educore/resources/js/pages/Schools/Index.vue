<script setup lang="ts">
import Button from '@/components/ui/button/Button.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import {
    Table,
    TableBody,
    TableCaption,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from '@/components/ui/table';

import { Card, CardContent } from '@/components/ui/card'


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Manage Schools',
        href: dashboard().url,
    },
];

// import {
//     Dialog,
//     DialogClose,
//     DialogContent,
//     DialogDescription,
//     DialogFooter,
//     DialogHeader,
//     DialogTitle,
//     DialogTrigger,
// } from '@/components/ui/dialog'
</script>

<template>

    <Head title="Schools" />

    <AppLayout :breadcrumbs="breadcrumbs">

        <ModalLink class="mt-3 px-3" href="/schools/create">
            <Button class="mb-4">
                Create School
            </Button>
        </ModalLink>

        <div class="mt-3 px-3">
            <Card class="w-full">
                <CardContent>
                    <Table class="w-full">
                        <TableCaption>A list of recently added schools.</TableCaption>
                        <TableHeader>
                            <TableRow>
                                <TableHead>S/No</TableHead>
                                <TableHead>
                                    School Logo
                                </TableHead>
                                <TableHead>Name</TableHead>
                                <TableHead>Email Address</TableHead>
                                <TableHead>Phone Number</TableHead>
                                <TableHead class="text-center">
                                    Action
                                </TableHead>
                            </TableRow>
                        </TableHeader>
                        <TableBody>
                            <TableRow>
                                <TableCell>1</TableCell>
                                <TableCell>
                                    INV001
                                </TableCell>
                                <TableCell>Paid</TableCell>
                                <TableCell>Credit Card</TableCell>
                                <TableCell>Credit Card</TableCell>
                                <TableCell class="flex items-center justify-center">
                                    <Button variant="secondary">Edit</Button>
                                    <Button variant="destructive" class="ml-2">Delete</Button>
                                </TableCell>
                            </TableRow>
                        </TableBody>
                    </Table>
                </CardContent>
            </Card>
        </div>

    </AppLayout>
</template>
