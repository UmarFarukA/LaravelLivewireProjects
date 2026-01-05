<script setup>
import { router, useForm } from "@inertiajs/vue3";
import CreateSearch from "../../Components/CreateSearch.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { ref, watch } from "vue";
import { debounce } from "lodash";

const props = defineProps({
    users: {
        type: Object,
        required: true,
    },
    searchTerm: {
        type: String,
        required: false,
    },
});
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
</script>

<template>
    <AuthenticatedLayout title="Manage Users">
        <div class="flex-col space-y-3">
            <CreateSearch
                caption="Add New User"
                href=""
                v-model="form.search"
            />

            <div class="shadow-sm">
                <div class="bg-white border rounded-md overflow-hidden">
                    <!-- Table (Desktop) -->
                    <div class="hidden md:block overflow-x-auto">
                        <table class="min-w-full divide-y">
                            <thead class="bg-gray-50 text-sm text-gray-600">
                                <tr>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Photo
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Name
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Role
                                    </th>
                                    <th class="px-6 py-3 text-left font-medium">
                                        Date Created
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
                                            alt="User Avatar"
                                            class="w-10 h-10 rounded-md object-cover"
                                        />
                                        <span v-else>No Logo</span>
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">
                                        {{ user.name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ user.role }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ user.created_at }}
                                    </td>

                                    <td class="px-6 py-4">
                                        <span
                                            v-if="user.status"
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
                                            :href="route('user.edit', user.id)"
                                        />

                                        <DeleteButton
                                            title="Delete"
                                            @click="handleDelete(user.id)"
                                        />
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
    </AuthenticatedLayout>
</template>
