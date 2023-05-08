@props(['active', 'as' => 'Link'])

@php
$classes = ($active ?? false)
            ? 'menu-link'
            : 'menu-link';
@endphp

<{{ $as }} {{ $attributes->class($classes) }}>
    {{ $slot }}
</{{ $as }}>
