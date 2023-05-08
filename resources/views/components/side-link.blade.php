@props(['active'])

@php
$classesParent = ($active ?? false)
? 'menu-item active'
: 'menu-item';
@endphp




{{-- <li class="menu-item active">
    <Link href="{{ route('backend.dashboard') }}" class="menu-link">
    <i class="menu-icon tf-icons ti ti-smart-home"></i>
    <div data-i18n="Page 1">Page 1</div>
    </Link>
</li> --}}

<li {{ $attributes->class($classesParent) }}>
    {{ $slot }}
</li>
