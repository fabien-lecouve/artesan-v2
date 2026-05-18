@props([
    'href',
    'type' => null,
])

@php
    $icons = [
        'back' => 'fa-solid fa-arrow-left',
        'add' => 'fa-solid fa-plus'
    ];

    $icon = $icons[$type] ?? null;
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'link btn']) }}>
    @if($icon)
        <i class="link__icon {{ $icon }}"></i>
    @endif

    <span class="link__text">
        {{ $slot }}
    </span>
</a>