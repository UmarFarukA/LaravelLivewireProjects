<script setup>
    import AuthLayout from '@/Pages/Layouts/AuthLayout.vue';

    defineOptions({layout: AuthLayout});
</script>

<template>

    <Head title="Forgot password" />
    <div class="bg-gray-100 min-h-screen flex items-center justify-center">

            <div class="w-1/3 mx-auto max-w-5xl bg-white shadow-lg rounded-xl overflow-hidden grid grid-cols-1">
                <div class="flex justify-center">
                    <img src="/public/storage/images/logo_1.png" alt="EduCore SMS" class="h-32">
                </div>
                <div class="space-y-2 px-6 ">
                    <form>
                        <div class="grid gap-2">
                            <label for="name">Name</label>
                            <input id="name" type="name" name="name" autocomplete="off" autofocus
                                placeholder="Your name" class="text-gray-700 block" />
                            <!-- <InputError :message="errors.email" /> -->
                        </div>

                        <div class="grid gap-2">
                            <label for="email">Email address</label>
                            <input id="email" type="email" name="email" autocomplete="off" autofocus
                                placeholder="email@example.com" class="text-gray-700 block" />
                            <!-- <InputError :message="errors.email" /> -->
                        </div>

                        <div class="grid gap-2">
                            <label for="password">Password</label>
                            <input id="password" type="password" name="password" autocomplete="off" autofocus
                                placeholder="***********" class="text-gray-700 block" />
                            <!-- <InputError :message="errors.email" /> -->
                        </div>

                        <div class="grid gap-2">
                            <label for="c_password">Password</label>
                            <input id="c_password" type="password" name="c_password" autocomplete="off" autofocus
                                placeholder="***********" class="text-gray-700 block" />
                            <!-- <InputError :message="errors.email" /> -->
                        </div>

                        <div class="my-6 flex items-center justify-start">
                            <button
                                class="mt-3 w-full bg-educore-primary hover:bg-blue-900 text-white py-2.5 rounded-lg font-medium transition"
                                >
                                <!-- <Spinner v-if="processing" /> -->
                                Signup
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

