@props(['size' => 'base'])
@php
    $classes = 'bg-white/10 px-3 py-1 rounded-xl text-xs hover:bg-white/20 transition-colors duration-300';

    if ($attributes->has('class')) {
        $classes .= $attributes->get('class');
    }

    if ($size === 'base') {
        $classes .= ' px-5 py-1 text-xs';
    } elseif ($size === 'sm') {
        $classes .= ' px-3 py-1 text-sm';
    }
@endphp
<a href="#" class="{{ $classes }}">
    {{ $slot }}
</a>
