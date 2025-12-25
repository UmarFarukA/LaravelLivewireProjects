<script setup lang="ts">
import type { HTMLAttributes } from 'vue';

defineOptions({
    inheritAttrs: false,
});

interface Props {
    className?: HTMLAttributes['class'];
}

defineProps<Props>();
</script>

<template>

    <img src="/storage/images/logo.png" alt="EduCore SMS"
                    class="h-8 w-8 rounded-md" >

</template>
