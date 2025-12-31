<script setup>
    import AuthLayout from '@/Pages/Layouts/AuthLayout.vue';
    import InputField from '../../Components/InputField.vue';
    import { useForm } from '@inertiajs/vue3';
    import Button from '../../Components/Button.vue';

    defineOptions({layout: AuthLayout});

    const form = useForm({
        name: null,
        email: null,
        password: null,
        password_confirmation: null
    })

    const submit = () => {
        form.post(route('store.register'), {
            preserveScroll: true,
            onError: () => form.reset('password', 'password_confirmation'),
            onFinish: () => form.reset('password', 'password_confirmation'),
        });
    };
</script>

<template>

    <Head title="Forgot password" />
    <div class="bg-gray-100 min-h-screen flex items-center justify-center">

            <div class=" w-full mx-2 md:w-1/3 md:mx-auto max-w-5xl bg-white shadow-lg rounded-xl overflow-hidden grid grid-cols-1">
                <div class="flex justify-center">
                    <img src="/public/storage/images/logo_1.png" alt="EduCore SMS" class="h-28">
                </div>
                <div class="space-y-2 px-6 ">
                    <form @submit.prevent="submit" class="space-y-3">
                        <InputField
                            label="Name"
                            v-model="form.name"
                            :message="form.errors.name"
                            placeholder="Enter your full name"
                        />

                        <InputField
                            label="Email Address"
                            v-model="form.email"
                            :message="form.errors.email"
                            placeholder="example@example.com"
                        />

                        <InputField
                            label="Password"
                            type="password"
                            v-model="form.password"
                            :message="form.errors.password"
                            placeholder="**********"
                        />
                        <InputField
                            label="Confirm Password"
                            type="password"
                            v-model="form.password_confirmation"
                            :message="form.errors.password_confirmation"
                            placeholder="**********"
                        />

                        <Button title="Sign Up" :disabled="form.processing"/>
                    </form>

                    <div class="space-x-1 text-center text-sm text-gray-700 mb-3">
                        <span>Or, return to</span>
                        <Link :href="route('login')">log in</Link>
                    </div>
                </div>
            </div>
        </div>
</template>
