<script setup lang="ts">


// import { toast } from 'vue-sonner'
import { Button } from '@/components/ui/button'
import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
  DialogTrigger,
} from '@/components/ui/dialog'
import {
  Field,
  FieldDescription,
  FieldError,
  FieldGroup,
  FieldLabel,
} from '@/components/ui/field'
import { Input } from '@/components/ui/input'


</script>

<template>
  <div>
    <Dialog>
      <DialogTrigger as-child>
        <Button variant="outline">
          Edit Product
        </Button>
      </DialogTrigger>
      <DialogContent class="sm:max-w-[425px]">
        <DialogHeader>
          <DialogTitle>Edit Product</DialogTitle>
          <DialogDescription>
            Make changes to your product here. Click save when you're done.
          </DialogDescription>
        </DialogHeader>

        <form id="dialogForm">
          <FieldGroup>
            <VeeField v-slot="{ componentField, errors }" name="username">
              <Field :data-invalid="!!errors.length">
                <FieldLabel for="username">
                  Username
                </FieldLabel>
                <Input id="username" type="text" placeholder="shadcn" v-bind="componentField" />
                <FieldDescription>
                  This is your public display name.
                </FieldDescription>
                <FieldError v-if="errors.length" :errors="errors" />
              </Field>
            </VeeField>
          </FieldGroup>
        </form>

        <DialogFooter>
          <Button type="submit" form="dialogForm">
            Save changes
          </Button>
        </DialogFooter>
      </DialogContent>
    </Dialog>
</div>
</template>
