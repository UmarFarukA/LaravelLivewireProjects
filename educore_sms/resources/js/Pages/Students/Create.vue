<script setup>

</script>

<template>
    <AuthenticatedLayout title="Create New Student">
        <div class="w-full md:w-2/3">
            <form class="space-y-2" @submit.prevent="handleSubmit">
                <InputField
                    v-model="form.name"
                    label="School Name"
                    placeholder="School Name"
                    :message="form.errors.name"
                />
                <InputField
                    v-model="form.email"
                    type="email"
                    label="Email Address"
                    placeholder="Email Address"
                    :message="form.errors.email"
                />
                <InputField
                    v-model="form.address"
                    label="Address"
                    placeholder="Address"
                    :message="form.errors.address"
                />
                <InputField
                    v-model="form.phone"
                    label="Phone Number"
                    placeholder="Phone Number"
                    :message="form.errors.phone"
                />
                <InputField
                    type="file"
                    @input="change"
                    label="School Logo URL"
                    placeholder="School Logo"
                    :message="form.errors.school_logo"
                />

                <div
                    class="flex-col md:flex-row md:items-center md:justify-end space-x-2 space-y-2"
                >
                    <button
                        class="bg-gray-600 text-gray-50 px-4 py-2 rounded-md hover:bg-gray-500"
                    >
                        Cancel
                    </button>
                    <button
                        :disabled="form.processing"
                        type="submit"
                        class="px-4 py-2 bg-school-primary text-white rounded-md hover:bg-school-primary-hover"
                    >
                        Save
                    </button>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
