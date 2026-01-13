<script setup>
import { useForm } from "@inertiajs/vue3";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import InputField from "@/Components/InputField.vue";
import { toast } from "vue-sonner";

const props = defineProps({
    application: {
        type: Object,
        required: true,
    },
});

const form = useForm({
    first_name: props.application.first_name,
    last_name: props.application.last_name,
    age: props.application.age,
    class_applied: props.application.class_applied,
    status: ''
});

const handleSubmit = () => {
    form.put(route("admissions.update", props.application.id), {
        preserveScroll: true,
        onSuccess: () => toast.success("Application successfully updated!"),
        onError: () => toast.error("Failed to update admission application. Please try again."),
    });
};

</script>

<template>
    <AuthenticatedLayout title="View Admission Application">
        <div class="w-full md:w-2/3">
            <form class="space-y-2" @submit.prevent="handleSubmit">
                <InputField
                    :readonly="true"
                    v-model="form.first_name"
                    label="First Name"
                    :message="form.errors.name"
                />

                <InputField
                    :readonly="true"
                    v-model="form.last_name"
                    label="Last Name"
                    :message="form.errors.name"
                />

                <InputField
                    :readonly="true"
                    v-model="form.age"
                    label="Age"
                    :message="form.errors.age"
                />

                <InputField
                    :readonly="true"
                    v-model="form.class_applied"
                    label="Class Applied"
                    :message="form.errors.class_applied"
                />

                <div class="grid gap-1">
                    <label for="status" class="text-gray-700 text-md">Admission Status</label>
                    <select v-model="form.status" name="status" id="status" class="text-gray-700 block w-full px-2 py-2 rounded-md border ">
                        <option value="">--select--</option>
                        <option value="2">Pending</option>
                        <option value="1">Accepted</option>
                        <option value="0">Rejected</option>
                    </select>
                </div>

                <div
                    class="flex-col md:flex-row md:items-center md:justify-end space-x-2 space-y-2"
                >
                    <Link
                        :href="route('admissions.index')"
                        class="bg-gray-600 text-gray-50 px-4 py-2 rounded-md hover:bg-gray-500"
                    >
                        Cancel
                    </Link>
                    <button
                        :disabled="form.processing"
                        type="submit"
                        class="px-4 py-2 bg-school-primary text-white rounded-md hover:bg-school-primary-hover"
                    >
                        Update
                    </button>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
