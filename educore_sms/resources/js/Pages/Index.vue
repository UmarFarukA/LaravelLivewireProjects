<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthLayout from '@/Pages/Layouts/AuthLayout.vue';

    defineOptions({ layout: AuthLayout });

    const form = useForm({
        email: '',
        password: '',
        remember: false,
    });

</script>

<template>

    <Head title="Login"/>

    <AuthLayout>
            <div class="bg-gray-100 min-h-screen flex items-center justify-center">

            <div class="w-full max-w-5xl bg-white shadow-lg rounded-xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

                <!-- Left Branding Panel -->
                <div
                    class="hidden md:relative md:flex flex-col justify-center bg-gradient-to-br from-blue-600 to-indigo-700 text-white ">
                    <img src="/storage/app/public/images/logo_2.png" alt="EduCore SMS"
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

                    <form class="flex flex-col gap-4">

                        <!-- Email -->
                        <div class="flex-col gap-2">
                            <label for="email" class="text-gray-700 mb-2">Email address</label>
                            <input id="email" type="email" name="email" required autofocus :tabindex="1"
                                autocomplete="email" placeholder="email@example.com"
                                class="text-gray-700 block w-full px-1 py-2 rounded-md focus:ring-educore-primary ring-educore-primary"
                            />
                                <!-- <InputError :message="form.errors.email" /> -->
                        </div>


                        <!-- Password -->
                        <div>
                            <label for="password" class="text-gray-700 mb-2">Password</label>
                            <input id="password" type="password" name="password" required :tabindex="2"
                                autocomplete="current-password" placeholder="Password"
                                class="text-gray-700 block w-full px-1 py-2 rounded-md focus:ring-educore-primary ring-educore-primary"
                            />
                            <!-- <InputError :message="form.errors.password" /> -->
                        </div>

                        <!-- Remember + Forgot -->
                        <div class="flex items-center justify-between text-sm text-educore-primary ">
                            <label for="remember" class="flex items-center space-x-2">
                                <input type="checkbox" id="remember" name="remember" :tabindex="3" />
                                <span>Remember me</span>
                            </label>
                            <Link  class="text-sm text-educore-primary"
                                :tabindex="5">
                                Forgot password?
                            </Link>
                        </div>
                        <Button type="submit"
                            class="mt-3 w-full bg-educore-primary hover:bg-blue-900 text-white py-2.5 rounded-lg font-medium transition"
                            :tabindex="4" :disabled="form.processing" data-test="login-button">
                            <!-- <Spinner v-if="form.processing" /> -->
                            Log in
                        </Button>
                    </form>

                    <!-- Footer -->
                    <p class="mt-6 text-center text-xs text-gray-400">
                        © EduCore SMS. All rights reserved.
                    </p>
                </div>

            </div>

        </div>
    </AuthLayout>
</template>
