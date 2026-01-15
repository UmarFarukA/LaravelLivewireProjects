<script setup>
import { useForm, usePage } from '@inertiajs/vue3'
import InputField from "@/Components/InputField.vue";
import Button from "@/Components/Button.vue";
import { toast } from 'vue-sonner';

const user = usePage().props.auth.user

const form = useForm({
  email: user.email,
  phone: user.phone,
})

const updateContact = () => {
  form.put(route('settings.update.contact'), {
    onSuccess: () => toast.success('Contact information updated successfully!'),
  })
}
</script>

<template>
  <div class="bg-white rounded-xl border shadow-sm p-6 space-y-4">
    <h2 class="text-lg font-semibold text-gray-800">Contact Information</h2>

    <form @submit.prevent="updateContact" class="space-y-4">

        <InputField
            v-model="form.email"
            label="Email"
            type="email"
        />
        <InputField
            v-model="form.phone"
            label="Phone"
            type="text"
        />

      <div class="flex justify-end">
        <Button :loading="form.processing">Save Changes</Button>
      </div>
    </form>
  </div>
</template>
