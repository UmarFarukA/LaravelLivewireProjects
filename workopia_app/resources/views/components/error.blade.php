@props(['name'])

@error($name)
    <p {{ $attributes->merge(['class' => 'text-sm text-red-500 font-semibold ml-1 mt-1']) }}>{{ $message }}</p>
@enderror
