<a {{$attributes->merge(["class"=>"text-sm md:text-lg font-medium hover:text-sky-500"])}}
    wire:navigate    
>
    {{$slot}}
</a>