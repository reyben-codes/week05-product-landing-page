@props([
    'name',
    'tagline',
    'price',
    'description',
    'features' => [],
    'featured' => false,
])

<article @class([
    'relative flex h-full flex-col overflow-hidden rounded-[1.8rem] border p-6 transition duration-300 hover:-translate-y-1 sm:p-7',
    'border-brand-teal bg-brand-teal text-brand-ink shadow-[0_24px_65px_-25px_rgba(45,183,191,0.65)] lg:-translate-y-3 lg:hover:-translate-y-4' => $featured,
    'border-white/12 bg-white/[0.055] text-white shadow-soft hover:border-white/25' => ! $featured,
])>
    @if ($featured)
        <div class="absolute right-0 top-0 rounded-bl-2xl bg-brand-ink px-4 py-2 text-[0.6rem] font-black uppercase tracking-[0.16em] text-white">
            Most detailed
        </div>
    @endif

    <div class="flex items-start justify-between gap-4">
        <span @class([
            'flex size-11 items-center justify-center rounded-2xl',
            'bg-brand-ink text-white' => $featured,
            'bg-white/10 text-brand-teal' => ! $featured,
        ])>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" class="size-5" aria-hidden="true">
                <circle cx="6" cy="7" r="3" /><circle cx="6" cy="17" r="3" />
                <path stroke-linecap="round" d="m8.5 8.5 11 9M8.5 15.5l11-9M13 12H8.5" />
            </svg>
        </span>
        <span @class([
            'text-[0.62rem] font-black uppercase tracking-[0.16em]',
            'text-brand-ink/55' => $featured,
            'text-white/35' => ! $featured,
        ])>Service plan</span>
    </div>

    <p @class([
        'mt-8 text-[0.65rem] font-black uppercase tracking-[0.18em]',
        'text-brand-ink/55' => $featured,
        'text-brand-teal' => ! $featured,
    ])>{{ $tagline }}</p>
    <h3 class="mt-2 font-display text-3xl font-black tracking-tight">{{ $name }}</h3>
    <p @class(['mt-3 text-sm leading-6', 'text-brand-ink/65' => $featured, 'text-white/50' => ! $featured])>
        {{ $description }}
    </p>

    <div @class([
        'my-6 border-y py-5',
        'border-brand-ink/15' => $featured,
        'border-white/10' => ! $featured,
    ])>
        <p @class(['text-[0.6rem] font-black uppercase tracking-[0.16em]', 'text-brand-ink/50' => $featured, 'text-white/35' => ! $featured])>Current price</p>
        <p class="mt-1 font-display text-2xl font-black tracking-tight">{{ $price }}</p>
    </div>

    <p class="text-[0.62rem] font-black uppercase tracking-[0.16em] opacity-50">What’s included</p>
    <ul class="mt-4 space-y-3">
        @foreach ($features as $feature)
            <li class="flex items-start gap-3 text-sm font-semibold">
                <span @class([
                    'mt-0.5 flex size-5 shrink-0 items-center justify-center rounded-full',
                    'bg-brand-ink text-white' => $featured,
                    'bg-brand-teal text-brand-ink' => ! $featured,
                ])>
                    <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" class="size-3" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m3 8 3 3 7-7" /></svg>
                </span>
                {{ $feature }}
            </li>
        @endforeach
    </ul>

    <a
        href="https://www.facebook.com/profile.php?id=100063595255719"
        target="_blank"
        rel="noopener noreferrer"
        @class([
            'mt-8 inline-flex items-center justify-center gap-2 rounded-full px-5 py-3.5 text-sm font-black transition',
            'bg-brand-ink text-white hover:bg-white hover:text-brand-ink' => $featured,
            'bg-white text-brand-ink hover:bg-brand-teal' => ! $featured,
        ])
        aria-label="Inquire about the {{ $name }} plan on Facebook"
    >
        Inquire about plan
        <span aria-hidden="true">→</span>
    </a>
</article>
