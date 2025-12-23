<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import { dashboard } from '@/routes';
import Card from '@/components/ui/card/Card.vue';
import CardHeader from '@/components/ui/card/CardHeader.vue';
import CardContent from '@/components/ui/card/CardContent.vue';
import Button from '@/components/ui/button/Button.vue';

import {
    Table,
    TableBody,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from '@/components/ui/table'
import { buttonVariants } from '@/components/ui/button';

interface Products {
    id: number,
    name: string,
    description: string,
    product_image: string,
    price: number,
    quantity: number
}

interface Props {
    products: Products[]
}

const props = defineProps<Props>();

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: dashboard().url,
    },

    {
        title: 'Products',
        href: '/products',
    },
];

</script>

<template>

    <Head title="Post" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="w-[300px] mt-12 pl-2 ">
            <!-- <Link
                class="bg-slate-50 hover:bg-slate-100 text-black text-xl rounded px-2 py-2"
                href=""

            >
                Create New Product
            </Link> -->
            <Button>Create New Product</Button>
        </div>

        <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
            <div class="w-full mx-auto">
                <Card>
                    <CardHeader>List of Products</CardHeader>
                    <CardContent>
                        <Table>
                            <TableHeader>
                                <TableRow>
                                    <TableHead>Image</TableHead>
                                    <TableHead>Name</TableHead>
                                    <TableHead>Price</TableHead>
                                    <TableHead>Available Quantity</TableHead>
                                    <TableHead>Action</TableHead>
                                </TableRow>
                            </TableHeader>
                            <TableBody>
                                <TableRow v-for="product in props.products" :key="product.id">
                                    <TableCell>
                                        <div class="w-8 h-8 rounded-full">
                                            <img src="{{ product.product_image }}" alt="{{ product.name }}" class="w-10 h-10 rounded-full object-cover"/>
                                        </div>
                                    </TableCell>
                                    <TableCell>{{ product.name}}</TableCell>
                                    <TableCell>{{ product.price }}</TableCell>
                                    <TableCell>{{ product.quantity }}</TableCell>
                                    <TableCell class="flex align-middle space-x-2">
                                        <Link href="" :class="buttonVariants({variant: 'secondary'})">Edit</Link>
                                        <Button variant="destructive">Delete</Button>
                                    </TableCell>
                                </TableRow>
                            </TableBody>
                        </Table>
                    </CardContent>
                </Card>
            </div>
        </div>
    </AppLayout>
</template>
