<script setup>
import { router } from "@inertiajs/vue3";
import CreateSearch from "../../Components/CreateSearch.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
// import EditButton from "@/Components/EditButton.vue";
// import DeleteButton from "@/Components/DeleteButton.vue";
import { ref, watch } from "vue";
import { debounce } from "lodash";
import Pagination from "../../Components/Pagination.vue";


// const props = defineProps({
//     users: {
//         type: Object,
//         required: true,
//     },
//     searchTerm: {
//         type: String,
//         required: false,
//     },
// });
const search = ref(props.searchTerm);

watch(
    search,
    debounce(
        (q) =>
            router.get(
                route("users.index"),
                { search: q },
                { preserveState: true },
            ),
        500,
    ),
);

// const handleDelete = (userId) => {
//     if (confirm("Do you want to delete?")) {
//         router.delete(route("users.destroy", userId), {
//             preserveScroll: true,
//             onError: () =>
//                 toast.error("Failed to delete user. Please try again."),
//             onSuccess: () =>
//                 toast.success(`User with ID ${userId} deleted successfully!`),
//         });
//     }
// };
</script>

<template>
    <AuthenticatedLayout title="Manage Users">
        <div class="flex-col space-y-3">
            <CreateSearch caption="Add New User" href="" v-model="search" />

            <div class="shadow-sm">
                <div class="bg-white border rounded-md overflow-hidden">
                    <!-- Table (Desktop) -->
                    <div class="hidden md:block overflow-x-auto">
                        <table class="min-w-full divide-y">
                            <thead class="bg-gray-50 text-sm text-gray-600">
                                <tr>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Applicant Name
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Class Applied For
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Address
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Date Applied
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
                                <!-- <tr
                                    v-for="user in users.data"
                                    :key="user.id"
                                    class="hover:bg-gray-50"
                                >
                                    <td
                                        class="px-6 py-4 font-medium text-gray-800"
                                    >
                                        <img
                                            v-if="user.avatar"
                                            :src="`/storage/${user.avatar}`"
                                            alt="School Logo"
                                            class="w-10 h-10 rounded-md object-cover"
                                        />
                                        <span v-else>No Logo</span>
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">
                                        {{ user.name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            v-if="
                                                user.role === 1 ||
                                                user.role === 2
                                            "
                                            class="p-1 text-sm rounded-md bg-green-100 text-green-700"
                                            >Super Admin</span
                                        >
                                        <span
                                            v-else-if="user.role === 3"
                                            class="p-1 text-sm rounded-md bg-purple-100 text-purple-700"
                                            >Teacher</span
                                        >
                                        <span
                                            v-else-if="user.role === 4"
                                            class="p-1 text-sm rounded-md bg-lime-100 text-lime-700"
                                            >Student</span
                                        >
                                        <span
                                            v-else
                                            class="p-1 text-sm bg-sky-100 rounded-md text-sky-700"
                                            >Parent</span
                                        >
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ user.created_at }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <span
                                            v-if="user.status === 1"
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
                                        <EditButton
                                            title="Edit"
                                            :href="route('users.edit', user.id)"
                                        />

                                        <DeleteButton
                                            title="Delete"
                                            @click="handleDelete(user.id)"
                                        />
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>

                    <!-- Cards (Mobile) -->
                    <div class="md:hidden divide-y">
                        <!-- <div
                            v-for="user in users.data"
                            :key="user.id"
                            class="p-4 space-y-2"
                        >
                            <div class="flex justify-between items-center">
                                <p class="font-semibold text-gray-800">
                                    {{ user.name }}
                                </p>
                                <span
                                    class="px-2 py-1 rounded-full text-xs font-medium"
                                    :class="
                                        user.status === 'Active'
                                            ? 'bg-green-100 text-green-700'
                                            : 'bg-yellow-100 text-yellow-700'
                                    "
                                >
                                    {{ user.status }}
                                </span>
                            </div>

                            <p class="space-x-2">
                                <EditButton
                                    title="Edit"
                                    :href="route('users.edit', user.id)"
                                />

                                <DeleteButton
                                    title="Delete"
                                    @click="handleDelete(user.id)"
                                />
                            </p>
                        </div> -->
                    </div>
                </div>
                <!-- <div v-else>
                    <p class="text-gray-700 font-bold">No Students.</p>
                </div> -->
            </div>
        </div>

        <Pagination :paginator="users" />
    </AuthenticatedLayout>
</template>
