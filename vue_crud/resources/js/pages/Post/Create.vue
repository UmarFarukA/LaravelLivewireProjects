<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';
import Label from '@/components/ui/label/Label.vue';
import Input from '@/components/ui/input/Input.vue';
import Textarea from '@/components/ui/textarea/Textarea.vue';
import Button from '@/components/ui/button/Button.vue';
import { ref } from 'vue';
import { toast } from 'vue-sonner'


const form = useForm({
    title: '',
    content: '',
});

const modalRef = ref(null);

const handleSubmit = () => {
    form.post('/post/store', {
        preserveScroll: true,
        onSuccess: () => toast.success('Post created Successfully!')
    });

    modalRef.value.close();
}



</script>

<template>

    <Head title="Create Post" />

    <Modal ref="modalRef" panel-classes="bg-white p-8 rounded-lg w-full flex flex-col spayce-y-12">
        <h2 class="text-black text-3xl font-bold mb-6 text-center">Create New Post</h2>
        <form @submit.prevent="handleSubmit">
            <div class="mb-3 space-y-1.5">
                <Label for="title" class="text-black font-bold">Title</Label>
                <Input id="title" v-model="form.title" class="bg-slate-50 text-black"/>
                <span v-if="form.errors.title" class="text-red-500 text-md ml-3">{{ form.errors.title }}</span>
            </div>

            <div class="mb-3 space-y-1.5">
                <Label for="content" class="text-black font-bold">Content</Label>
                <Textarea id="content" v-model="form.content" class="bg-slate-50 text-black"/>
                <span v-if="form.errors.content" class="text-red-500 text-md ml-3">{{ form.errors.content }}</span>
            </div>

            <div class="mb-1 space-y-1.5 flex space-x-2 justify-end align-middle">
                <Button class="bg-gray-600 text-gray-50 px-2 rounded hover:bg-gray-500">Cancel</Button>
                <Button class="bg-green-600 text-green-50 px-2 rounded hover:bg-green-500">Save</Button>
            </div>
        </form>
    </Modal>
</template>
