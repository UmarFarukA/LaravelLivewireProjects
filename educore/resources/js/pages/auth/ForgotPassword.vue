<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { Spinner } from '@/components/ui/spinner';
import { login } from '@/routes';
import { email } from '@/routes/password';
import { Form, Head, Link } from '@inertiajs/vue3';

defineProps<{
    status?: string;
}>();
</script>

<template>
    <Head title="Forgot password" />
    <div class="bg-gray-100 min-h-screen flex items-center justify-center">

        <div class="w-1/3 mx-auto max-w-5xl bg-white shadow-lg rounded-xl overflow-hidden grid grid-cols-1">
            <div class="flex justify-center">
                <img src="/storage/images/logo_1.png" alt="EduCore SMS"
                    class="h-32" >
            </div>
            <div class="space-y-6 px-6 ">
                    <Form v-bind="email.form()" v-slot="{ errors, processing }">
                        <div class="grid gap-2">
                            <Label for="email">Email address</Label>
                            <Input
                                id="email"
                                type="email"
                                name="email"
                                autocomplete="off"
                                autofocus
                                placeholder="email@example.com"
                                class="text-gray-700"
                            />
                            <InputError :message="errors.email" />
                        </div>

                        <div class="my-6 flex items-center justify-start">
                            <Button
                                class="mt-3 w-full bg-educore-primary hover:bg-blue-900 text-white py-2.5 rounded-lg font-medium transition"
                                :disabled="processing"
                                data-test="email-password-reset-link-button"
                            >
                                <Spinner v-if="processing" />
                                Email password reset link
                            </Button>
                        </div>
                    </Form>

                    <div class="space-x-1 text-center text-sm text-gray-700 mb-3">
                        <span>Or, return to</span>
                        <Link :href="login()">log in</Link>
                    </div>
            </div>
        </div>
    </div>

</template>
