<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import Icon from './Icon.vue';
import * as icons from 'lucide-vue-next'

const props = defineProps<{
  href: string
  icon: keyof typeof icons
}>()

const page = usePage()
const isActive = page.url.startsWith(props.href)
</script>

<template>
  <Link
    :href="href"
    class="flex items-center gap-3 px-4 py-2 rounded-lg transition"
    :class="isActive
      ? 'bg-blue-600 text-white'
      : 'text-gray-600 hover:bg-blue-50 hover:text-blue-600'"
  >
    <Icon :name="icon" />
    <span class="text-sm font-medium">
      <slot />
    </span>
  </Link>
</template>
