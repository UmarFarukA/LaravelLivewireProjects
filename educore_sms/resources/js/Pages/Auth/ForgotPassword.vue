<script setup>
    import AuthLayout from '@/Pages/Layouts/AuthLayout.vue';

    defineOptions({layout: AuthLayout});

    defineProps({
        status: string
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
                        <div class="grid gap-2">
                            <label for="email">Email address</label>
                            <input id="email" type="email" name="email" autocomplete="off" autofocus
                                placeholder="email@example.com" class="text-gray-700 block" />
                            <!-- <InputError :message="errors.email" /> -->
                        </div>

                        <div class="my-6 flex items-center justify-start">
                            <button
                                class="mt-3 w-full bg-educore-primary hover:bg-blue-900 text-white py-2.5 rounded-lg font-medium transition"
                                >
                                <!-- <Spinner v-if="processing" /> -->
                                Email password reset link
                            </button>
                        </div>
                    </form>

                    <!-- <div class="space-x-1 text-center text-sm text-gray-700 mb-3">
                        <span>Or, return to</span>
                        <Link :href="login()">log in</Link>
                    </div> -->
                </div>
            </div>
        </div>
</template>
