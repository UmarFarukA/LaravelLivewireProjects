<script setup>

</script>

<template>
    <header>
        <nav>
            <div>
                <a :href="route('home')">Home</a>
                <a :href="route('about')">About</a>
            </div>
        </nav>
    </header>
    <main>
        <slot />
    </main>
</template>
