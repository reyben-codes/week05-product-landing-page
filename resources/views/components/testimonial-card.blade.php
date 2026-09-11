@props([
    'name',
    'image',
    'quote',
    'role' => 'Customer',
    'source' => 'Customer feedback',
    'accent' => 'teal',
])

@php
    $accentClasses = match ($accent) {
        'coral' => 'bg-brand-coral text-brand-ink',
        'ink' => 'bg-brand-ink text-white',
        default => 'bg-brand-teal text-brand-ink',
    };
@endphp

<figure class="group flex h-full flex-col rounded-[1.75rem] border border-brand-ink/10 bg-white p-6 shadow-[0_16px_45px_rgba(17,19,19,0.06)] transition duration-300 hover:-translate-y-1 hover:shadow-soft sm:p-7">
    <div class="flex items-start justify-between gap-4">
        <img
            src="{{ asset($image) }}"
            alt="{{ $name }}, {{ strtolower($role) }}"
            width="72"
            height="72"
            loading="lazy"
            class="size-16 rounded-full border-4 border-brand-paper object-cover shadow-md sm:size-[4.5rem]"
        >
        <span class="{{ $accentClasses }} flex size-11 shrink-0 items-center justify-center rounded-full transition-transform duration-300 group-hover:-rotate-6" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor" class="size-5">
                <path d="M6.7 17.5c-2.2 0-3.7-1.5-3.7-3.8 0-3.6 2-6.6 5.8-8.9l1.1 1.7C7.7 8 6.5 9.5 6.3 11.1h.4c1.8 0 3.1 1.2 3.1 3.1 0 1.9-1.3 3.3-3.1 3.3Zm9.2 0c-2.2 0-3.7-1.5-3.7-3.8 0-3.6 2-6.6 5.8-8.9l1.1 1.7c-2.2 1.5-3.4 3-3.6 4.6h.4c1.8 0 3.1 1.2 3.1 3.1 0 1.9-1.3 3.3-3.1 3.3Z" />
            </svg>
        </span>
    </div>

    <blockquote class="mt-6 flex-1 text-[0.95rem] leading-7 text-brand-ink/65">
        “{{ $quote }}”
    </blockquote>

    <figcaption class="mt-7 border-t border-brand-ink/10 pt-5">
        <p class="font-display text-lg font-black tracking-tight text-brand-ink">{{ $name }}</p>
        <div class="mt-1 flex flex-wrap items-center gap-x-2 gap-y-1 text-xs font-bold text-brand-ink/45">
            <span>{{ $role }}</span>
            <span class="size-1 rounded-full bg-brand-teal" aria-hidden="true"></span>
            <span>{{ $source }}</span>
        </div>
    </figcaption>
</figure>
