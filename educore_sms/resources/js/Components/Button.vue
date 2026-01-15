<script setup>
defineProps({
    disabled: Boolean,
    loading: Boolean,
});
</script>

<template>
    <div class="my-3 flex items-center justify-start">
        <button
            class="inline-flex items-center justify-center gap-2 w-full rounded-lg px-4 py-2.5 font-medium text-white bg-school-primary transition hover:bg-school-primary-hover disabled:opacity-60 disabled:cursor-not-allowed disabled:hover:bg-school-primary"
        >
            <svg
                v-if="loading"
                class="h-5 w-5 animate-spin"
                viewBox="0 0 24 24"
                fill="none"
            >
                <circle
                    class="opacity-25"
                    cx="12"
                    cy="12"
                    r="10"
                    stroke="currentColor"
                    stroke-width="4"
                />
                <path
                    class="opacity-75"
                    fill="currentColor"
                    d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"
                />
            </svg>
            <slot />
        </button>
    </div>
</template>
