<script setup lang="ts">


</script>


<template>
    <div class="bg-gray-50 min-h-screen flex items-center justify-center">

        <div class="w-full max-w-5xl bg-white shadow-lg rounded-xl overflow-hidden grid grid-cols-1 md:grid-cols-2">

            <!-- Left Branding Panel -->
            <div
                class="hidden md:flex flex-col justify-center bg-gradient-to-br from-blue-600 to-indigo-700 text-white p-10">
                <div>
                    <img src="/images/educore-logo.svg" alt="EduCore SMS" class="h-12 mb-6">

                    <h2 class="text-2xl font-semibold mb-3">
                        Smart School Management, Simplified
                    </h2>

                    <p class="text-sm text-blue-100 leading-relaxed">
                        Manage students, staff, attendance, results, and fees securely
                        in one powerful platform built for primary and secondary schools.
                    </p>

                    <ul class="mt-6 space-y-2 text-sm">
                        <li>✔ Secure & Reliable</li>
                        <li>✔ Easy for Teachers & Parents</li>
                        <li>✔ Trusted by Schools</li>
                    </ul>
                </div>
            </div>

            <!-- Login Form -->
            <div class="p-8 md:p-10">
                <div class="mb-6 text-center md:text-left">
                    <h1 class="text-2xl font-bold text-gray-800">
                        Welcome Back 👋
                    </h1>
                    <p class="text-sm text-gray-500">
                        Sign in to your school dashboard
                    </p>
                </div>

                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Email Address
                        </label>
                        <input type="email" name="email" required autofocus
                            class="mt-1 w-full rounded-lg border-gray-300 focus:border-blue-600 focus:ring-blue-600"
                            placeholder="admin@school.edu">
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <input type="password" name="password" required
                            class="mt-1 w-full rounded-lg border-gray-300 focus:border-blue-600 focus:ring-blue-600"
                            placeholder="••••••••">
                    </div>

                    <!-- Remember + Forgot -->
                    <div class="flex items-center justify-between text-sm">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" name="remember" class="rounded border-gray-300">
                            Remember me
                        </label>

                        <a href="{{ route('password.request') }}" class="text-blue-600 hover:underline">
                            Forgot password?
                        </a>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2.5 rounded-lg font-medium transition">
                        Sign In
                    </button>
                </form>

                <!-- Footer -->
                <p class="mt-6 text-center text-xs text-gray-400">
                    ©  EduCore SMS. All rights reserved.
                </p>
            </div>

        </div>

    </div>
</template>
