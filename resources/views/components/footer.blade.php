@php
    $quickLinks = [
        ['label' => 'Home', 'href' => '#home'],
        ['label' => 'Features', 'href' => '#features'],
        ['label' => 'Showcase', 'href' => '#showcase'],
        ['label' => 'Pricing', 'href' => '#pricing'],
        ['label' => 'Testimonials', 'href' => '#testimonials'],
        ['label' => 'Contact', 'href' => '#contact'],
    ];
@endphp

<footer class="bg-brand-ink text-white">
    <div class="mx-auto max-w-7xl px-5 py-14 sm:px-8 sm:py-16">
        <div class="grid gap-10 border-b border-white/10 pb-12 sm:grid-cols-2 lg:grid-cols-[1.4fr_0.8fr_0.8fr_1fr]">
            <div class="max-w-sm">
                <a href="#home" class="group inline-flex items-center gap-3" aria-label="NIK NOOK Barbers Elbi, home">
                    <img
                        src="{{ asset('images/nik-nook-logo.jpg') }}"
                        alt=""
                        width="56"
                        height="56"
                        class="size-14 rounded-full border-2 border-brand-teal object-cover transition-transform duration-300 group-hover:-rotate-6"
                    >
                    <span class="leading-none">
                        <span class="block font-display text-xl font-black uppercase tracking-[-0.04em]">NIK NOOK</span>
                        <span class="mt-1.5 block text-[0.62rem] font-bold uppercase tracking-[0.24em] text-brand-teal">Barbers Elbi</span>
                    </span>
                </a>
                <p class="mt-5 text-sm leading-6 text-white/50">
                    A neighborhood barbershop for clean cuts, careful details, and fresh looks in the Elbi community.
                </p>
            </div>

            <div>
                <h2 class="font-display text-sm font-black uppercase tracking-[0.16em] text-white">Quick links</h2>
                <ul class="mt-5 space-y-3">
                    @foreach (array_slice($quickLinks, 0, 3) as $link)
                        <li><a href="{{ $link['href'] }}" class="text-sm text-white/55 transition hover:text-brand-teal">{{ $link['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h2 class="font-display text-sm font-black uppercase tracking-[0.16em] text-white">Explore</h2>
                <ul class="mt-5 space-y-3">
                    @foreach (array_slice($quickLinks, 3) as $link)
                        <li><a href="{{ $link['href'] }}" class="text-sm text-white/55 transition hover:text-brand-teal">{{ $link['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h2 class="font-display text-sm font-black uppercase tracking-[0.16em] text-white">Connect</h2>
                <p class="mt-5 flex items-start gap-3 text-sm leading-6 text-white/55">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="mt-0.5 size-4 shrink-0 text-brand-teal" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z" /><circle cx="12" cy="10" r="2.5" />
                    </svg>
                    Los Baños, Laguna
                </p>
                <a
                    href="https://www.facebook.com/profile.php?id=100063595255719"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="mt-4 inline-flex items-center gap-3 text-sm font-bold text-white/70 transition hover:text-brand-teal"
                    aria-label="Visit NIK NOOK Barbers Elbi on Facebook"
                >
                    <span class="flex size-9 items-center justify-center rounded-full bg-white/10">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="size-4" aria-hidden="true">
                            <path d="M13.5 21v-8h2.75l.41-3H13.5V8.08c0-.87.25-1.46 1.58-1.46h1.69V3.94a22.6 22.6 0 0 0-2.46-.13c-2.43 0-4.1 1.49-4.1 4.22V10H7.46v3h2.75v8h3.29Z" />
                        </svg>
                    </span>
                    Facebook
                </a>
            </div>
        </div>

        <div class="flex flex-col gap-3 pt-6 text-xs text-white/40 sm:flex-row sm:items-center sm:justify-between">
            <p>© {{ date('Y') }} NIK NOOK Barbers Elbi.</p>
            <a href="#home" class="inline-flex items-center gap-2 font-bold uppercase tracking-[0.14em] transition hover:text-brand-teal">
                Back to top
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-3.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m6 15 6-6 6 6" /></svg>
            </a>
        </div>
    </div>
</footer>
