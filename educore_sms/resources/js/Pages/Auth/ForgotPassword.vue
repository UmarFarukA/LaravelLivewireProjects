<script setup>
    import AuthLayout from '@/Layouts/AuthLayout.vue';
    import { useForm } from '@inertiajs/vue3';
    import InputField from '../../Components/InputField.vue';
    import Button from '../../Components/Button.vue';

    defineOptions({layout: AuthLayout});

    const form = useForm({
        email: null
    })

    defineProps({
        status: String
    });

</script>

<template>

    <Head title="Forgot password" />
     <div class="bg-gray-100 min-h-screen flex items-center justify-center">

            <div class="w-1/3 mx-auto max-w-5xl bg-white shadow-lg rounded-xl overflow-hidden grid grid-cols-1">
                <div class="flex justify-center">
                    <img src="/public/storage/images/logo_1.png" alt="EduCore SMS" class="h-32">
                </div>
                <div class="space-y-6 px-6 ">
                    <form>
                        <!-- Email -->
                        <InputField
                            type="email"
                            label="Email Address"
                            placeholder="email@example.com"
                            v-model="form.email"
                            :message="form.errors.email"
                        />

                        <Button :loading="form.processing">Email password reset link</Button>
                    </form>

                    <div class="space-x-1 text-center text-sm text-gray-700 mb-3">
                        <span>Or, return to</span>
                        <Link href="/">log in</Link>
                    </div>
                </div>
            </div>
        </div>
</template>
