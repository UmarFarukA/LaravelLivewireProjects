<script setup lang="ts">
// import { dashboard, login, register } from '@/routes';
import { Head, Form } from '@inertiajs/vue3';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import { store } from '@/routes/login';
import { request } from '@/routes/password';
import { Spinner } from '@/components/ui/spinner';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Link } from '@inertiajs/vue3';

import InputError from '@/components/InputError.vue';
// import TextLink from '@/components/TextLink.vue';


defineProps<{
    status?: string;
    canResetPassword: boolean;
    canRegister: boolean;
}>();
</script>

<template>

    <Head title="EduCore - SMS"/>

    <div class="bg-gray-100 min-h-screen flex items-center justify-center">

        <div class="w-full max-w-5xl bg-white shadow-lg rounded-xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

            <!-- Left Branding Panel -->
            <div
                class="hidden md:relative md:flex flex-col justify-center bg-gradient-to-br from-blue-600 to-indigo-700 text-white ">
                <img src="/storage/images/logo_2.png" alt="EduCore SMS"
                    class="absolute inset-0 w-full h-full object-cover" />

            </div>

            <!-- Login Form -->
            <div class="p-8 md:p-10">
                <div class="mb-6 mt-2 text-center md:text-left">
                    <h1 class="text-2xl font-bold text-gray-800">
                        Welcome Back 👋
                    </h1>
                    <p class="text-sm text-gray-500">
                        Sign in to your school dashboard
                    </p>
                </div>

                <Form v-bind="store.form()" :reset-on-success="['password']" v-slot="{ errors, processing }"
                    class="flex flex-col gap-6">

                    <!-- Email -->
                    <div>
                        <Label for="email" class="text-gray-700 mb-2">Email address</Label>
                        <Input id="email" type="email" name="email" required autofocus :tabindex="1"
                            autocomplete="email" placeholder="email@example.com" class="text-gray-700"/>
                        <InputError :message="errors.email" />
                    </div>

                    <!-- Password -->
                    <div>
                        <Label for="password" class="text-gray-700 mb-2">Password</Label>
                        <Input id="password" type="password" name="password" required :tabindex="2"
                            autocomplete="current-password" placeholder="Password" class="text-gray-700" />
                        <InputError :message="errors.password" />
                    </div>

                    <!-- Remember + Forgot -->
                    <div class="flex items-center justify-between text-sm text-educore-primary ">
                        <Label for="remember" class="flex items-center space-x-2">
                            <Checkbox id="remember" name="remember" :tabindex="3" />
                            <span>Remember me</span>
                        </Label>
                        <Link  :href="request()" class="text-sm text-educore-primary"
                            :tabindex="5">
                            Forgot password?
                        </Link>
                    </div>
                    <Button type="submit"
                        class="mt-3 w-full bg-educore-primary hover:bg-blue-900 text-white py-2.5 rounded-lg font-medium transition"
                        :tabindex="4" :disabled="processing" data-test="login-button">
                        <Spinner v-if="processing" />
                        Log in
                    </Button>
                </Form>

                <!-- Footer -->
                <p class="mt-6 text-center text-xs text-gray-400">
                    © EduCore SMS. All rights reserved.
                </p>
            </div>

        </div>

    </div>
</template>
