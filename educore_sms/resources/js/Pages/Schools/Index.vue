<script setup>
import { toast } from "vue-sonner";
// import { ModalLink } from "@inertiaui/modal-vue";
import AuthenticatedLayout from "../Layouts/AuthenticatedLayout.vue";
import { router } from "@inertiajs/vue3";
import DeleteButton from "../../Components/DeleteButton.vue";
import EditButton from "../../Components/EditButton.vue";
import Pagination from "../../Components/Pagination.vue";
import CreateSearch from "../../Components/CreateSearch.vue";
import { ref, watch } from "vue";
import { debounce } from "lodash";
const props = defineProps({
    schools: {
        type: Object,
        required: true,
    },
    searchTerm: {
        type: String,
        required: false
    },
});

const handleDelete = (schoolId) => {
    if (confirm("Do you want to delete?")) {
        router.delete(route("schools.destroy", schoolId), {
            preserveScroll: true,
            onError: () =>
                toast.error("Failed to delete school. Please try again."),
            onSuccess: () =>
                toast.success(
                    `School with ID ${schoolId} deleted successfully!`,
                ),
        });
    }
};

const search = ref(props.searchTerm);

watch(
    search, debounce(
    (q) => router.get(route("schools.index"), {search: q}, {preserveState: true}), 500)
);
</script>

<template>
    <Head title="Schools" />
    <AuthenticatedLayout title="Manage Schools">
        <div class="flex-col space-y-3">
            <CreateSearch caption="Create School" href="/schools/create" v-model="search" />
            <div class="shadow-sm">
                <div
                    class="bg-white border rounded-md overflow-hidden"
                    v-if="schools"
                >
                    <!-- Table (Desktop) -->
                    <div class="hidden md:block overflow-x-auto">
                        <table class="min-w-full divide-y">
                            <thead class="bg-gray-50 text-sm text-gray-600">
                                <tr>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Logo
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        School Name
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
                                        class="px-6 py-3 text-center font-medium"
                                    >
                                        Action
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="divide-y text-sm">
                                <tr
                                    v-for="school in schools.data"
                                    :key="school.id"
                                    class="hover:bg-gray-50"
                                >
                                    <td
                                        class="px-6 py-4 font-medium text-gray-800"
                                    >
                                        <img
                                            v-if="school.school_logo"
                                            :src="`/storage/${school.school_logo}`"
                                            alt="School Logo"
                                            class="w-10 h-10 rounded-md object-cover"
                                        />
                                        <span v-else>No Logo</span>
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">
                                        {{ school.name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ school.phone }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <!-- {{ school.phone }} -->
                                        Administrator
                                    </td>

                                    <td class="px-6 py-4">
                                        <span
                                            v-if="school.status"
                                            class="p-1 text-sm rounded-md bg-green-100 text-green-700"
                                            >Active</span
                                        >
                                        <span
                                            v-else
                                            class="p-1 text-sm bg-yellow-100 rounded-md text-yellow-700"
                                            >Inactive</span
                                        >
                                    </td>
                                    <td
                                        class="px-6 py-4 flex items-center justify-end space-x-4"
                                    >
                                        <!-- <Link
                                            :href="
                                                route('schools.edit', school.id)
                                            "
                                            class="px-2 py-1 bg-gray-600 hover:bg-gray-500 text-gray-50 rounded-md"
                                        >
                                            Edit
                                        </Link> -->
                                        <EditButton title="Edit" :href="route('schools.edit', school.id)" />

                                        <DeleteButton title="Delete" @click="handleDelete(school.id)" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Cards (Mobile) -->
                    <div class="md:hidden divide-y">
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
        <Pagination :paginator="schools" />
    </AuthenticatedLayout>
</template>
