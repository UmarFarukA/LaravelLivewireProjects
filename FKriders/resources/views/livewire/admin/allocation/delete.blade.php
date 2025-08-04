<flux:modal name="delete-allocation" class="min-w-[22rem]">
    <div class="space-y-6">
        <div>
            <flux:heading size="lg">Delete Allocation?</flux:heading>
            <flux:text class="mt-2">
                <p>You're about to delete this Allocation.</p>
                <p>This action cannot be reversed.</p>
            </flux:text>
        </div>
        <div class="flex gap-2">
            <flux:spacer />
            <flux:modal.close>
                <flux:button variant="ghost">Cancel</flux:button>
            </flux:modal.close>
            <flux:button type="submit" variant="danger" wire:click="destroy">Delete</flux:button>
        </div>
    </div>
</flux:modal>
