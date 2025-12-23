<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, router } from '@inertiajs/vue3';
import Button from '@/components/ui/button/Button.vue';
import { toast } from 'vue-sonner'


import {
    Table,
    TableBody,
    TableCaption,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from '@/components/ui/table'

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Post',
        href: '/post',
    },
];

interface Posts {
    id: number;
    title: string;
    content: string,
    created_at: string;
}

interface Props {
    posts: Posts[];
}

const props = defineProps<Props>();

const handleDelete = (id: number) => {
    if(confirm('Do you want to delete?')) {
        router.delete(`/post/delete/${id}`, {
            preserveScroll: true,
            onSuccess: () => toast.success('Post deleted successfully')
        });
    }
}

</script>

<template>

    <Head title="Post" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="w-[250] mt-12 pl-2 ">
            <ModalLink class="bg-slate-50 hover:bg-slate-100 text-black text-xl rounded px-2 py-2" href="/post/create">Create New Post</ModalLink>
        </div>
        <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
            <Table>
                <TableCaption>A list of your recent posts.</TableCaption>
                <TableHeader>
                    <TableRow>
                        <TableHead class="w-[300px]">
                            Title
                        </TableHead>
                        <TableHead>Content</TableHead>
                        <TableHead>Posted On</TableHead>
                        <TableHead class="text-center">
                           Action
                        </TableHead>
                    </TableRow>
                </TableHeader>
                <TableBody>
                    <TableRow v-for="post in props.posts" :key="post.id">
                        <TableCell class="font-medium">
                            {{ post.title }}
                        </TableCell>
                        <TableCell>
                            {{post.content.substring(1, 55)}}
                        </TableCell>
                        <TableCell>{{post.created_at}}</TableCell>
                        <TableCell class="text-center flex items-center space-x-2">
                           <ModalLink
                                as="button"
                                :href="`/post/${post.id}/edit`"

                                position="bottom"
                            >
                                Edit
                            </ModalLink>
                           <Button @click="handleDelete(post.id)" class="bg-red-600 text-white">Delete</Button>
                        </TableCell>
                    </TableRow>
                </TableBody>
            </Table>

        </div>
    </AppLayout>
</template>
