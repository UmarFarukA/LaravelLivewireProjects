@props(['name'])

@error($name)
    <span class="ms-2 text-sm text-red-500">{{ $message }}</span>
@enderror
