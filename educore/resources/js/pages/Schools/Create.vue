<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { Label } from '@/components/ui/label';
import { Input } from '@/components/ui/input';
import InputError from '@/components/InputError.vue';
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import { toast } from 'vue-sonner';
import { Link } from '@inertiajs/vue3';
import { Card, CardContent } from '@/components/ui/card'
import { type BreadcrumbItem } from '@/types';
import AppLayout from '@/layouts/AppLayout.vue';

const modalRef = ref(null);

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Manage Schools',
        href: '/schools',
    },

    {
        title: 'Create School',
        href: '/schools/create',
    },
];

const form = useForm({
    name: "",
    email: "",
    address: null,
    phone: "",
    school_logo: null,
});

const submit = () => {
    form.post('/schools/store', {
        preserveScroll: true,
        onSuccess: () => toast.success('School created successfully!'),
    });

    modalRef.value.close();
};

</script>

<template>


    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="md:w-3/4 md:mx-auto md:px-8 px-3 mt-2">
            <Card class="w-full">
                <CardContent>
                    <form @submit.prevent="submit" class="space-y-4">
                        <div>
                            <Label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">School
                                Name</Label>
                            <Input v-model="form.name" id="name" type="text"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white" />
                            <InputError :message="form.errors.name" />
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email
                                Address</label>
                            <input v-model="form.email" type="email" id="email"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                                <InputError :message="form.errors.email" />
                        </div>
                        <div>
                            <label for="address"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">Address</label>
                            <input v-model="form.address" type="text" id="address"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                                <InputError :message="form.errors.address" />
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Phone
                                Number</label>
                            <input v-model="form.phone" type="text" id="phone"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                                <InputError :message="form.errors.phone" />
                        </div>
                        <div>
                            <label for="school_logo"
                                class="block text-sm font-medium text-gray-700 dark:text-gray-300">School
                                Logo</label>
                            <input v-model="form.school_logo" type="text" id="school_logo"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                                <InputError :message="form.errors.school_logo" />
                        </div>
                        <div class="flex justify-end gap-1">
                            <Link as="button" href="/schools" class="mb-4" variant="secondary">
                                Cancel
                            </Link>
                            <Button class="mb-4" type="submit" :disabled="form.processing">
                                Save
                            </Button>
                        </div>
                    </form>
                </CardContent>
            </Card>
        </div>
    </AppLayout>

</template>
