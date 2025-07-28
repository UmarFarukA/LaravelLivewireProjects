<div>
    <flux:heading size="xl" level="1">{{ __('Edit Tricycle') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">
            {{ __('Update details of the tricycle') }}
        </flux:subheading>
    <flux:separator variant="subtle" />

    <x-notification />

    <div class="mt-12 md:w-3/4 space-y-4">
        <flux:input
            label="Model Number"
            placeholder="model number"
            wire:model='form.model_number'
        />

        <flux:input
            label="Serial Number"
            placeholder="serial number"
            wire:model='form.serial_number'
        />

        <flux:input
            label="Plate Number"
            placeholder="plate number"
            wire:model='form.plate_number'
        />

        <flux:input
            label="Color"
            placeholder="tricycle color"
            wire:model='form.color'
        />

        <flux:input
            label="Cost"
            placeholder="cost"
            wire:model='form.amount'
        />
        <flux:select wire:model="form.category_id" label="Category Tricycle">
            @foreach ($categories as $category )
                <flux:select.option value="{{ $category->id }}">{{ $category->name }}</flux:select.option>
            @endforeach
        </flux:select>

        <flux:select wire:model="form.brand_id" label="Tricycle Brand">
            @foreach ($brands as $brand )
                <flux:select.option value="{{ $brand->id }}">{{ $brand->name }}</flux:select.option>
            @endforeach
        </flux:select>

        <flux:textarea
            label="Description"
            placeholder="Enter short description of the tricycle"
            wire:model='form.description'
        />

        <div class="grid md:grid-cols-2 gap-2.5 items-center">
            <flux:input type="file" wire:model="form.photo" label="Tricycle Photo"/>
            <div>
                @if ($form->photo)
                    <img src="{{$form->photo->temporaryUrl()}}" alt="Photo" class="w-1/2">
                @elseif ($form->photo_path)
                    <img src="{{Storage::url($form->photo_path)}}" alt="Photo" class="w-1/2 rounded-full">
                @endif
            </div>
        </div>

        <div class="mt-4 ">
            <flux:button variant="primary" wire:click='save'>Update</flux:button>
        </div>
    </div>

</div>
