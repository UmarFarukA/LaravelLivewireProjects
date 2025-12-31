<script setup>
import { toast } from "vue-sonner";
import { ModalLink } from "@inertiaui/modal-vue";
import AuthenticatedLayout from "../Layouts/AuthenticatedLayout.vue";

defineProps({
    schools: {
        type: Array,
        required: true,
    },
});
</script>

<template>
    <Head title="Schools" />
    <AuthenticatedLayout title="Manage Schools">
        <div class="flex-col space-y-3">
            <div
                class="grid grid-cols-1 md:grid-cols-2 mt-4 place-content-center px-3"
            >
                <div class="mb-3">
                    <Link
                        href="/schools/create"
                        class="px-4 py-2 bg-school-primary text-white rounded-md hover:bg-school-primary-hover"
                    >
                        Create School
                    </Link>
                </div>
                <div class="">
                    <input type="text" placeholder="Search here" class="px-1 py-2 rounded-md w-full" />
                </div>
            </div>
            <div class="shadow-sm">
                <div
                    class="bg-white border rounded-md overflow-hidden "
                    v-if="schools"
                >
                    <!-- Table (Desktop) -->
                    <div class="hidden md:block overflow-x-auto">
                        <table class="min-w-full divide-y">
                            <thead class="bg-gray-50 text-sm text-gray-600">
                                <tr>
                                    <th class="px-6 py-3 text-left font-medium">
                                        School
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Address
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Phone
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Admin
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Status
                                    </th>
                                    <th
                                        class="px-6 py-3 text-right font-medium"
                                    >
                                        Action
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y text-sm">
                                <tr
                                    v-for="school in schools"
                                    :key="school.id"
                                    class="hover:bg-gray-50"
                                >
                                    <td
                                        class="px-6 py-4 font-medium text-gray-800"
                                    >
                                        {{ school.name }}
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">
                                        {{ school.address }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ school.phone }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <!-- {{ school.phone }} -->
                                        Administrator
                                    </td>

                                    <td class="px-6 py-4">
                                        <!-- <span
                                            class="px-2 py-1 rounded-full text-xs font-medium"
                                            :class="
                                                school.status === 'Active'
                                                    ? 'bg-green-100 text-green-700'
                                                    : 'bg-yellow-100 text-yellow-700'
                                            "
                                        >
                                            {{ school.status }}
                                        </span> -->
                                        <span v-if="school.status" class="p-1 rounded-md bg-green-100 text-green-700">Active</span>
                                        <span v-else class="p-1 bg-yellow-100 text-yellow-700">Inactive</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <a
                                            href="#"
                                            class="text-blue-600 hover:text-blue-700 text-sm font-medium"
                                        >
                                            View
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Cards (Mobile) -->
                    <div class="md:hidden divide-y">
                        <div
                            v-for="school in schools"
                            :key="school.id"
                            class="p-4 space-y-2"
                        >
                            <div class="flex justify-between items-center">
                                <p class="font-semibold text-gray-800">
                                    {{ school.name }}
                                </p>
                                <span
                                    class="px-2 py-1 rounded-full text-xs font-medium"
                                    :class="
                                        school.status === 'Active'
                                            ? 'bg-green-100 text-green-700'
                                            : 'bg-yellow-100 text-yellow-700'
                                    "
                                >
                                    {{ school.status }}
                                </span>
                            </div>

                            <p class="text-sm text-gray-500">
                                {{ school.address }} • {{ school.phone }}
                            </p>

                            <p class="text-sm">
                                <span class="font-medium">Admin:</span>
                                Administrator
                            </p>

                            <a
                                href="#"
                                class="inline-block mt-2 text-sm text-blue-600 font-medium"
                            >
                                View Details →
                            </a>
                        </div>
                    </div>
                </div>
                <div v-else>
                    <p class="text-gray-700 font-bold">No Schools Created.</p>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
