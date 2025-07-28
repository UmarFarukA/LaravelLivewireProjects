<script setup>
    import Nav from './Nav.vue';
    import Footer from './Footer.vue';
</script>

<template>

    <Nav />

    <main>
        <slot />
    </main>

    <Footer />
</template>

