@props([
    'size' => 'md',          
    'variant' => 'primary',
    'startIcon' => null,
    'endIcon' => null,
    'className' => '',
    'disabled' => false,
])

@php
    // Base classes
    $base = 'inline-flex items-center justify-center font-medium gap-2 rounded-lg transition';

    // Size map
    $sizeMap = [
        'sm' => 'px-4 py-3 text-sm',
        'md' => 'px-5 py-3.5 text-sm',
    ];
    $sizeClass = $sizeMap[$size] ?? $sizeMap['md'];

    // Variant map
    $variantMap = [
        'primary' => 'bg-brand-500 text-white shadow-theme-xs hover:bg-brand-600 disabled:bg-brand-300',
        'outline' => 'bg-white text-gray-700 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 dark:bg-gray-800 dark:text-gray-400 dark:ring-gray-700 dark:hover:bg-white/[0.03] dark:hover:text-gray-300',
    ];
    $variantClass = $variantMap[$variant] ?? $variantMap['primary'];

    // disabled classes
    $disabledClass = $disabled ? 'cursor-not-allowed opacity-50' : '';

    // final classes (merge user className too)
    $classes = trim("{$base} {$sizeClass} {$variantClass} {$className} {$disabledClass}");
@endphp

<button
    {{ $attributes->merge(['class' => $classes, 'type' => $attributes->get('type', 'button')]) }}
    @if($disabled) disabled @endif
>
    {{-- start icon: priority — named slot 'startIcon' first, then startIcon prop if it's a HtmlString --}}
    @if (isset($__env) && $slot->isEmpty() === false) @endif

    @hasSection('startIcon')
        <span class="flex items-center">
            @yield('startIcon')
        </span>
    @elseif($startIcon)
        <span class="flex items-center">{!! $startIcon !!}</span>
    @endif

    {{-- main slot --}}
    {{ $slot }}

    {{-- end icon: named slot 'endIcon' first, then endIcon prop --}}
    @hasSection('endIcon')
        <span class="flex items-center">
            @yield('endIcon')
        </span>
    @elseif($endIcon)
        <span class="flex items-center">{!! $endIcon !!}</span>
    @endif
</button>
