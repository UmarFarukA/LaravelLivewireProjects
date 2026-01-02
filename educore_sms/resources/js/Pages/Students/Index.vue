<script setup>
import { useForm } from "@inertiajs/vue3";
import CreateSearch from "../../Components/CreateSearch.vue";
import AuthenticatedLayout from "../Layouts/AuthenticatedLayout.vue";

const form = useForm({
    search: ""
})

</script>

<template>
    <AuthenticatedLayout title="Students">
        <div class="flex-col space-y-3">
            <CreateSearch caption="Add Student" href="/schools/create" v-model="form.search" />

            <div class="shadow-sm">
                <div
                    class="bg-white border rounded-md overflow-hidden"

                >
                    <!-- Table (Desktop) -->
                    <div class="hidden md:block overflow-x-auto">
                        <table class="min-w-full divide-y">
                            <thead class="bg-gray-50 text-sm text-gray-600">
                                <tr>
                                    <th class="px-6 py-3 text-left font-medium">
                                        School Name
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Student Name
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Level
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Class
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

                            </tbody>
                        </table>
                    </div>

                    <!-- Cards (Mobile) -->
                    <!-- <div class="md:hidden divide-y">
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
                    </div> -->
                </div>
                <!-- <div v-else>
                    <p class="text-gray-700 font-bold">No Students.</p>
                </div> -->
            </div>
        </div>
    </AuthenticatedLayout>
</template>
