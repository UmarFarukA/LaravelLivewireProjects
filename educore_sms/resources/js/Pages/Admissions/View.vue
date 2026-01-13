<script setup>
import { useForm } from "@inertiajs/vue3";
import { Modal } from "@inertiaui/modal-vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

const props = defineProps({
    application: {
        type: Object,
        required: true,
    },
});

const form = useForm({
    admission_number: "",
    class_id: props.application.class_applied_for || "",
});

// function submit() {
//   form.post(route('applications.admit', props.application.id), {
//     onSuccess: () => {
//       Modal.close()
//     }
//   })
// }
</script>

<template>
    <!-- <AuthenticatedLayout title="View Admission Application">

</AuthenticatedLayout> -->

    <Modal>
        <div class="p-6">
            <!-- Header -->
            <div class="mb-4">
                <h2 class="text-lg font-semibold text-gray-800">
                    Admit Student
                </h2>
                <p class="text-sm text-gray-500">
                    Admit
                    <span class="font-medium"
                        >{{ application.first_name }} -
                        {{ application.last_name }}</span
                    >
                    into the school
                </p>
            </div>

            <!-- Form -->
            <form @submit.prevent="submit" class="space-y-4">
                <!-- Admission Number -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Admission Number
                    </label>
                    <input
                        v-model="form.admission_number"
                        type="text"
                        required
                        class="mt-1 w-full rounded-lg border-gray-300 focus:border-school-primary focus:ring-school-primary"
                        placeholder="e.g. EDU/2026/0012"
                    />
                    <div
                        v-if="form.errors.admission_number"
                        class="text-sm text-red-500 mt-1"
                    >
                        {{ form.errors.admission_number }}
                    </div>
                </div>

                <!-- Class -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Assign Class
                    </label>

                    <div
                        v-if="form.errors.class_id"
                        class="text-sm text-red-500 mt-1"
                    >
                        {{ form.errors.class_id }}
                    </div>
                </div>

                <!-- Actions -->
                <div class="flex justify-end gap-3 pt-4">
                    <button
                        type="button"
                        @click="Modal.close()"
                        class="px-4 py-2 rounded-md bg-gray-100 text-gray-700 hover:bg-gray-200"
                    >
                        Cancel
                    </button>

                    <button
                        type="submit"
                        :disabled="form.processing"
                        class="px-4 py-2 rounded-md bg-school-primary text-white hover:bg-school-primary-hover disabled:opacity-60"
                    >
                        Admit Student
                    </button>
                </div>
            </form>
        </div>
    </Modal>
</template>
