@php
    $classes = 'bg-white/5 border border-white/10  group rounded-xl hover:border-blue-800 transition-colors duration-300 group p-4 ';

    if ($attributes->has('class')) {
        $classes .= $attributes->get('class');
    }
@endphp
<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
