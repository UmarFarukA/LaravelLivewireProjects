<script setup lang="ts">
import * as icons from 'lucide-vue-next'
import type { Component } from 'vue'

const props = defineProps<{
  name: keyof typeof icons
  size?: number
}>()

const iconComponent = icons[props.name] as Component
</script>

<template>
  <component
    :is="iconComponent"
    :size="props.size ?? 18"
    class="shrink-0"
  />
</template>
