@props(['active'])

@php
$classes = ($active ?? false)
            ? 'border-b-2 border-[#F2BB06]'
            : 'border-b-2 border-transparent group-hover:border-transparent transition duration-500 ease-out';
@endphp

@if ($active ?? false)
    <a wire:navigate.hover {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@else
    <div class="relative group">
        <a wire:navigate.hover {{ $attributes->merge(['class' => $classes]) }}>
            {{ $slot }}
        </a>
        <div class="absolute -bottom-.5 left-1/2 w-0 group-hover:w-full border-b-2 border-[#F2BB06] transition-all duration-500 ease-out transform -translate-x-1/2"></div>
    </div>
@endif