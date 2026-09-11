@php
    $navigation = [
        ['label' => 'Home', 'href' => '#home'],
        ['label' => 'Features', 'href' => '#features'],
        ['label' => 'Pricing', 'href' => '#pricing'],
        ['label' => 'Testimonials', 'href' => '#testimonials'],
        ['label' => 'Contact', 'href' => '#contact'],
    ];
@endphp

<header class="sticky top-0 z-50 border-b border-black/10 bg-brand-paper/90 backdrop-blur-xl">
    <nav class="mx-auto flex h-20 max-w-7xl items-center justify-between gap-8 px-5 sm:px-8" aria-label="Main navigation">
        <a href="#home" class="group flex shrink-0 items-center gap-3" aria-label="NIK NOOK Barbers Elbi, home">
            <img
                src="{{ asset('images/nik-nook-logo.jpg') }}"
                alt=""
                width="48"
                height="48"
                class="size-12 rounded-full border-2 border-brand-ink object-cover transition-transform duration-300 group-hover:-rotate-6"
            >
            <span class="leading-none">
                <span class="block font-display text-lg font-black uppercase tracking-[-0.04em]">NIK NOOK</span>
                <span class="mt-1 block text-[0.62rem] font-bold uppercase tracking-[0.24em] text-brand-teal-dark">Barbers Elbi</span>
            </span>
        </a>

        <div class="hidden items-center gap-1 lg:flex">
            @foreach ($navigation as $item)
                <a href="{{ $item['href'] }}" class="rounded-full px-3 py-2 text-sm font-semibold text-brand-ink/70 transition hover:bg-brand-teal/15 hover:text-brand-ink">
                    {{ $item['label'] }}
                </a>
            @endforeach
        </div>

        <div class="hidden items-center gap-2 lg:flex">
            <a
                href="https://www.facebook.com/login/"
                target="_blank"
                rel="noopener noreferrer"
                class="rounded-full px-4 py-2.5 text-sm font-bold transition hover:bg-black/5"
            >
                Sign In
            </a>
            <a href="#pricing" class="rounded-full bg-brand-ink px-5 py-2.5 text-sm font-bold text-white shadow-soft transition hover:-translate-y-0.5 hover:bg-brand-teal-dark">
                Get Started
            </a>
        </div>

        <button
            type="button"
            class="inline-flex size-11 items-center justify-center rounded-full border border-black/15 bg-white text-brand-ink transition hover:bg-brand-teal/15 lg:hidden"
            aria-controls="mobile-menu"
            aria-expanded="false"
            data-menu-button
        >
            <span class="sr-only">Toggle navigation menu</span>
            <svg data-menu-open aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-5">
                <path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" />
            </svg>
            <svg data-menu-close aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="hidden size-5">
                <path stroke-linecap="round" d="m6 6 12 12M18 6 6 18" />
            </svg>
        </button>
    </nav>

    <div id="mobile-menu" class="hidden border-t border-black/10 bg-brand-paper px-5 pb-6 pt-3 shadow-soft lg:hidden" data-mobile-menu>
        <div class="mx-auto grid max-w-7xl gap-1">
            @foreach ($navigation as $item)
                <a href="{{ $item['href'] }}" class="rounded-xl px-4 py-3 text-base font-bold transition hover:bg-brand-teal/15">
                    {{ $item['label'] }}
                </a>
            @endforeach
            <div class="mt-3 grid grid-cols-2 gap-3 border-t border-black/10 pt-4">
                <a
                    href="https://www.facebook.com/login/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="rounded-full border border-brand-ink px-4 py-3 text-center text-sm font-bold"
                >
                    Sign In
                </a>
                <a href="#pricing" class="rounded-full bg-brand-ink px-4 py-3 text-center text-sm font-bold text-white">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</header>
