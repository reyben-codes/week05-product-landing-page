@props([
    'number',
    'icon',
    'title',
    'eyebrow',
    'description',
    'tone' => 'teal',
])

@php
    $iconClasses = match ($tone) {
        'coral' => 'bg-brand-coral text-brand-ink',
        'ink' => 'bg-brand-ink text-white',
        default => 'bg-brand-teal text-brand-ink',
    };

    $hoverClasses = match ($tone) {
        'coral' => 'group-hover:border-brand-coral/60',
        'ink' => 'group-hover:border-brand-ink/40',
        default => 'group-hover:border-brand-teal/70',
    };
@endphp

<article {{ $attributes->class([
    'group relative min-h-72 overflow-hidden rounded-[1.75rem] border border-black/10 bg-brand-cream p-6 shadow-soft transition duration-300 hover:-translate-y-1 hover:shadow-xl sm:p-7',
    $hoverClasses,
]) }}>
    <span class="absolute right-5 top-3 font-display text-6xl font-black tracking-tighter text-black/[0.045] transition group-hover:text-black/[0.075]" aria-hidden="true">
        {{ $number }}
    </span>

    <div class="relative flex h-full flex-col">
        <span @class(['flex size-12 items-center justify-center rounded-2xl shadow-sm', $iconClasses])>
            @switch($icon)
                @case('consult')
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-5" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h8m-8 4h5m8-2a9 9 0 1 1-4.2-7.6L21 3v5h-5" />
                    </svg>
                    @break
                @case('scissors')
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="size-6" aria-hidden="true">
                        <circle cx="6" cy="7" r="3" /><circle cx="6" cy="17" r="3" />
                        <path stroke-linecap="round" d="m8.5 8.5 11 9M8.5 15.5l11-9M13 12H8.5" />
                    </svg>
                    @break
                @case('razor')
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="size-6" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 19 5.2-5.2m0 0 2.7-2.7m-2.7 2.7-2-2 2.7-2.7m2 2 5.6-5.6-2-2-5.6 5.6m2 2 2 2-5.6 5.6-2-2" />
                    </svg>
                    @break
                @case('image')
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="size-6" aria-hidden="true">
                        <rect x="3" y="4" width="18" height="16" rx="2" />
                        <circle cx="9" cy="9" r="2" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="m4 17 4-4 3 3 3-3 6 5" />
                    </svg>
                    @break
                @case('message')
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="size-6" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 11.5a8 8 0 0 1-9.1 7.9L5 21l1.6-4.2A8 8 0 1 1 20 11.5Z" />
                        <path stroke-linecap="round" d="M8.5 10.5h7M8.5 14h4" />
                    </svg>
                    @break
                @case('pin')
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="size-6" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z" />
                        <circle cx="12" cy="10" r="2.5" />
                    </svg>
                    @break
            @endswitch
        </span>

        <div class="mt-auto pt-12">
            <p class="text-[0.65rem] font-black uppercase tracking-[0.2em] text-brand-teal-dark">{{ $eyebrow }}</p>
            <h3 class="mt-2 font-display text-2xl font-black tracking-tight">{{ $title }}</h3>
            <p class="mt-3 text-sm leading-6 text-black/55">{{ $description }}</p>
        </div>
    </div>
</article>
