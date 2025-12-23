<script setup lang="ts">
// import AppLayout from '@/layouts/AppLayout.vue';
// import { type BreadcrumbItem } from '@/types';
import { Head, useForm } from '@inertiajs/vue3';
import Label from '@/components/ui/label/Label.vue';
import Input from '@/components/ui/input/Input.vue';
import Textarea from '@/components/ui/textarea/Textarea.vue';
import Button from '@/components/ui/button/Button.vue';
import { Modal } from '@inertiaui/modal-vue';
import { ref } from 'vue';

const modalRef = ref(null);

// const breadcrumbs: BreadcrumbItem[] = [
//     {
//         title: 'Edit Post',
//         href: '/post/{id}/edit',
//     },
// ];

interface Post {
    id: number;
    title: string;
    content: string;
    created_at: string;
}

interface Props {
    post: Post;
}

const props = defineProps<Props>();

const form = useForm({
    title: props.post.title,
    content: props.post.content,
});

const handleUpdate = () => {
    form.put(`/post/${props.post.id}`, {
        preserveScroll: true
    });

    modalRef.value.close();
}

</script>

<template>

    <Head title="Edit Post" />
    <Modal ref="modalRef" #default="{ reload }" panel-classes="bg-white p-8 rounded-lg w-full flex flex-col spayce-y-6">
        <form @submit.prevent="handleUpdate">
            <div class="mb-3 space-y-1.5 ">
                <Label class="text-2xl text-slate-700">Title</Label>
                <Input v-model="form.title" class="bg-brown-100" />
                <span v-if="form.errors.title" class="text-red-500 text-md ml-3">{{ form.errors.title }}</span>
            </div>

            <div class="mb-3 space-y-1.5">
                <Label>Content</Label>
                <Textarea v-model="form.content" />
                <span v-if="form.errors.content" class="text-red-500 text-md ml-3">{{ form.errors.content
                }}</span>
            </div>

            <div class="mb-3 space-y-1.5 flex space-x-2 justify-end align-middle">
                <Button class="bg-gray-600 text-gray-50 px-2 rounded hover:bg-gray-500">Cancel</Button>
                <Button class="bg-green-600 text-green-50 px-2 rounded hover:bg-green-500">Update</Button>
            </div>
        </form>
    </Modal>
</template>
