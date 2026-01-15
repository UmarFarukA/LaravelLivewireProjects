<script setup>
import { useForm } from '@inertiajs/vue3'
import InputField from "@/Components/InputField.vue";
import Button from "@/Components/Button.vue";
import { toast } from 'vue-sonner';

const form = useForm({
  current_password: '',
  password: '',
  password_confirmation: '',
})

const updatePassword = () => {
  form.put(route('settings.update.password'), {
    onSuccess: () => {
        toast.success('Password updated successfully!');
        form.reset();
    },
    onError: () => toast.error('Failed to update password. Check Your Password.'),
  })
}
</script>

<template>
  <div class="bg-white rounded-xl border shadow-sm p-6 space-y-4">
    <h2 class="text-lg font-semibold text-gray-800">Change Password</h2>

    <form @submit.prevent="updatePassword" class="space-y-4">
        <InputField
            v-model="form.current_password"
            label="Current Password"
            type="password"
        />
        <InputField
            v-model="form.password"
            label="New Password"
            type="password"
        />
        <InputField
            v-model="form.password_confirmation"
            label="Confirm Password"
            type="password"
        />

      <div class="flex justify-end">

        <Button :loading="form.processing">Update Password</Button>
      </div>
    </form>
  </div>
</template>
