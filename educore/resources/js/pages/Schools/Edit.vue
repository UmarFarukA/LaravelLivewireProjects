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
import { Modal } from '@inertiaui/modal-vue';

const modalRef = ref(null);

interface School {
    id: number,
    name: string,
    email: string,
    phone: string,
    address: string,
    status: number,
    school_logo: string
}

interface Props {
    school: School
}

const props = defineProps<Props>()


const form = useForm({
    name: props.school.name,
    email: props.school.email,
    phone: props.school.phone,
    address: props.school.address,
    status: props.school.status,
    school_logo: props.school.school_logo,
});

const submit = () => {
    form.put(`/schools/${props.school.id}/update`, {
        preserveScroll: true,
        onSuccess: () => toast.success('School updated successfully!'),
    });

    modalRef.value.close();
};

</script>

<template>
    <Modal ref="modalRef" class="md:w-3/4 md:mx-auto md:px-8 px-3 mt-2" v-slot="{close}">
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
                        <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                            Status
                        </label>
                        <select v-model="form.status" id="status"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <option :value="1">Active</option>
                            <option :value="0">Inactive</option>
                        </select>
                        <InputError :message="form.errors.status" />
                    </div>
                    <!-- <div>
                        <label for="school_logo"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">School
                            Logo</label>
                        <input v-model="form.school_logo" type="text" id="school_logo"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:text-white">
                            <InputError :message="form.errors.school_logo" />
                    </div> -->
                    <div class="flex justify-end gap-1">
                        <Link as="button" @click="close" class="mb-4" variant="secondary">
                            Cancel
                        </Link>
                        <Button class="mb-4" type="submit" :disabled="form.processing">
                            Update
                        </Button>
                    </div>
                </form>
            </CardContent>
        </Card>
    </Modal>
</template>
