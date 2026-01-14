<script setup>
import { router, useForm } from "@inertiajs/vue3";
import CreateSearch from "../../Components/CreateSearch.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Pagination from "../../Components/Pagination.vue";
import { ref, watch } from "vue";
import { debounce } from "lodash";

const search = ref("");

defineProps({
    students: Object,
})

watch(search,
    debounce(
        (q) => {
            router.get(route('students.index'),
            {search: q},
            {preserveState: true})}
        ),
    500,
)

</script>

<template>
    <AuthenticatedLayout title="Students">
        <div class="flex-col space-y-3">
            <CreateSearch caption="Add Student" href="" v-model="search" />

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
                                        #
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Student Name
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Admission Number
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Current Class
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Date
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
                                    v-for="(student, index) in students.data"
                                    :key="student.id"
                                    class="hover:bg-gray-50"
                                >
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ index + 1 }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ student.name }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ student.admission_number }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ student.current_class }}
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{ student.accepted }}
                                    </td>
                                    <td
                                        class="px-6 py-4 whitespace-nowrap text-right"
                                    >
                                        <a
                                            :href="`/students/${student.id}`"
                                            class="text-blue-600 font-medium"
                                        >
                                            View Details →
                                        </a>
                                    </td>
                                </tr>
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
        <Pagination :paginator="students" />
    </AuthenticatedLayout>
</template>
