<script setup>
import { toast } from "vue-sonner";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { router } from "@inertiajs/vue3";
import DeleteButton from "../../Components/DeleteButton.vue";
import EditButton from "../../Components/EditButton.vue";
import Pagination from "../../Components/Pagination.vue";
import CreateSearch from "../../Components/CreateSearch.vue";
import { ref, watch } from "vue";
import { debounce } from "lodash";
import { ModalLink } from "@inertiaui/modal-vue";
const props = defineProps({
    applications: {
        type: Object,
        required: true,
    },
    searchTerm: {
        type: String,
        required: false,
    },
});

// const handleDelete = (schoolId) => {
//     if (confirm("Do you want to delete?")) {
//         router.delete(route("schools.destroy", schoolId), {
//             preserveScroll: true,
//             onError: () =>
//                 toast.error("Failed to delete school. Please try again."),
//             onSuccess: () =>
//                 toast.success(
//                     `School with ID ${schoolId} deleted successfully!`,
//                 ),
//         });
//     }
// };

const search = ref(props.searchTerm);

watch(
    search,
    debounce(
        (q) =>
            router.get(
                route("admissions.index"),
                { search: q },
                { preserveState: true },
            ),
        500,
    ),
);
</script>

<template>
    <Head title="Schools" />
    <AuthenticatedLayout title="Manage Admissions">
        <div class="flex-col space-y-3">
            <CreateSearch
                :show="false"
                caption="Create School"
                href="/schools/create"
                v-model="search"
            />
            <div class="shadow-sm">
                <div
                    class="bg-white border rounded-md overflow-hidden"
                    v-if="applications.data.length > 0"
                >
                    <!-- Table (Desktop) -->
                    <div class="hidden md:block overflow-x-auto">
                        <table class="min-w-full divide-y">
                            <thead class="bg-gray-50 text-sm text-gray-600">
                                <tr>
                                    <th class="px-6 py-3 text-left font-medium">
                                        First Name
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Last Name
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Age (years)
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Class Applied
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Date Applied
                                    </th>
                                    <th
                                        class="px-6 py-3 text-center font-medium"
                                    >
                                        Action
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y text-sm">
                                <tr
                                    v-for="application in applications.data"
                                    :key="application.id"
                                    class="hover:bg-gray-50"
                                >
                                    <!-- <td
                                        class="px-6 py-4 font-medium text-gray-800"
                                    >
                                        <img
                                            v-if="school.school_logo"
                                            :src="`/storage/${school.school_logo}`"
                                            alt="School Logo"
                                            class="w-10 h-10 rounded-md object-cover"
                                        />
                                        <span v-else>No Logo</span>
                                    </td> -->
                                    <td class="px-6 py-4 text-gray-600">
                                        {{ application.first_name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ application.last_name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <!-- {{ school.phone }} -->
                                        {{ application.Age }}
                                    </td>

                                    <td class="px-6 py-4">
                                        {{ application.class_applied }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ application.created_at }}
                                    </td>
                                    <td
                                        class="px-6 py-4 flex items-center justify-center space-x-4"
                                    >
                                        <Link
                                            :href="route('admissions.view', application.id)"
                                            class="text-sm text-school-primary hover:underline"
                                        >
                                            Manage
                                        </Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Cards (Mobile) -->
                    <!-- <div class="md:hidden divide-y">
                        <div
                            v-for="school in schools.data"
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

                            <div class="flex-col space-x-2">
                                <EditButton
                                    title="Edit"
                                    :href="route('schools.edit', school.id)"
                                />

                                <DeleteButton
                                    title="Delete"
                                    @click="handleDelete(school.id)"
                                />
                            </div>
                        </div>
                    </div> -->
                </div>
                <div v-else>
                    <p class="text-gray-700 font-bold">No applications Created.</p>
                </div>
            </div>
        </div>
        <Pagination :paginator="applications" />
    </AuthenticatedLayout>

     <!-- @click="router.visit(route('applications.admit.form', app.id), { preserveScroll: true })" -->
</template>
