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
import { Link } from '@inertiajs/vue3';
import Input from '@/components/ui/input/Input.vue';
import { ModalLink } from '@inertiaui/modal-vue'


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Manage Schools',
        href: dashboard().url,
    },
];

interface SchoolProps {
    id: number,
    name: string,
    email: string,
    phone: string,
    school_logo: string
}

interface Props{
    schools: SchoolProps[]
}

const props = defineProps<Props>();

</script>

<template>

    <Head title="Schools" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="grid grid-cols-1 md:grid-cols-2 mt-4 place-content-center px-3">
            <div class="mb-3">
                <Link href="/schools/create" class="w-full block md:inline text-center px-2 py-1 md:py-3 rounded-md dark:bg-gray-100 bg-gray-900 dark:hover:bg-gray-50 hover:bg-gray-800 dark:text-gray-700 text-gray-100">
                    Create School
                </Link>
            </div>
            <div class="">
                <Input type="text" placeholder="Search here" />
            </div>
        </div>
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
                            <TableRow v-for="school in props.schools" :key="school.id">
                                <TableCell>1</TableCell>
                                <TableCell>
                                    INV001
                                </TableCell>
                                <TableCell>{{school.name}}</TableCell>
                                <TableCell>{{school.email}}</TableCell>
                                <TableCell>{{school.phone}}</TableCell>
                                <TableCell class="flex items-center justify-center">
                                    <ModalLink
                                        panel-classes="dark:bg-black"
                                        position="center"
                                        :close-button="false"
                                        :href="`/schools/${school.id}/edit`"
                                        class="dark:bg-gray-700  dark:text-gray-100 hover:dark:bg-gray-600 text-gray-700 px-3 py-2 rounded-md"
                                    >
                                        <!-- <Button variant="secondary">Edit</Button> -->
                                         Edit
                                    </ModalLink>
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
