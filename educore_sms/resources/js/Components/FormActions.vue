<script setup>
defineProps({
    processing: {
        type: Boolean,
        required: true,
    },
    showCancel: {
        type: Boolean,
        required: false,
    },

    caption: {
        type: String,
        default: "Save"
    }
})

const emit = defineEmits(['cancel'])
</script>

<template>
  <div
    class="
      flex flex-col
      gap-2
      md:flex-row
      md:justify-end
    "
  >
    <!-- Cancel -->
    <button
      v-if="showCancel !== false"
      type="button"
      @click="$emit('cancel')"
      class="
        px-4 py-2
        rounded-md
        bg-gray-600
        text-gray-50
        hover:bg-gray-500
      "
    >
      Cancel
    </button>

    <!-- Submit -->
    <button
      type="submit"
      :disabled="processing"
      class="
        px-4 py-2
        rounded-md
        bg-school-primary
        text-white
        hover:bg-school-primary-hover
        disabled:opacity-60
        disabled:cursor-not-allowed
      "
    >
      {{caption}}
    </button>
  </div>
</template>
