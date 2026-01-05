<script setup>
import { useForm } from '@inertiajs/vue3';
import AuthLayout from '@/Layouts/AuthLayout.vue';
import Button from '../Components/Button.vue';
import InputField from '../Components/InputField.vue';
import { toast } from 'vue-sonner';

defineOptions({ layout: AuthLayout });

const form = useForm({
    email: null,
    password: null,
    remember: false,
});

const submit = () => {
    form.post(route('authenticate'), {
        preserveScroll: true,
        onFinish: () => form.reset('password'),
        onError: () => form.reset('password'),
        onSuccess: () => toast.success('Logged in successfully!'),
    });
};

</script>

<template>

    <Head title="Login" />

    <div class="bg-gray-100 min-h-screen flex items-center justify-center">

        <div class="w-full max-w-5xl bg-white shadow-lg rounded-xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

            <!-- Left Branding Panel -->
            <div
                class="hidden px-2 md:relative md:flex flex-col justify-center bg-white text-white ">
                <img src="/storage/app/public/images/logo_2.png" alt="EduCore SMS"
                    class="absolute inset-0 w-full h-96 object-cover" />

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

                <form @submit.prevent="submit" class="flex flex-col gap-4">

                    <!-- Email -->
                    <InputField type="email" label="Email Address" placeholder="email@example.com" v-model="form.email"
                        :message="form.errors.email" />


                    <!-- Password -->
                    <InputField type="password" label="Password" placeholder="*****************" v-model="form.password"
                        :message="form.errors.password" />

                    <!-- Remember + Forgot -->
                    <div class="flex items-center justify-between text-sm text-educore-primary ">
                        <label for="remember" class="flex items-center space-x-2">
                            <input type="checkbox" v-model="form.remember" id="remember" name="remember" :tabindex="3" />
                            <span>Remember me</span>
                        </label>
                        <Link class="text-sm text-educore-primary" :tabindex="5">
                        Forgot password?
                        </Link>
                    </div>
                    <Button :loading="form.processing">Login</Button>
                </form>

                <!-- Footer -->
                <p class="mt-6 text-center text-xs text-gray-400">
                    © EduCore SMS. All rights reserved.
                </p>
            </div>

        </div>

    </div>
</template>
