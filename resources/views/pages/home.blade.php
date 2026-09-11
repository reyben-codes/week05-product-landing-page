@extends('layouts.app')

@section('title', 'NIK NOOK Barbers Elbi | Fresh Cuts in Los Baños')

@section('content')
    <x-navbar />

    <main id="main-content">
        <x-hero />

        <section id="features" class="relative scroll-mt-20 overflow-hidden bg-brand-paper py-20 sm:py-24">
            <div class="absolute right-0 top-0 size-80 translate-x-1/3 -translate-y-1/3 rounded-full bg-brand-teal/10 blur-3xl" aria-hidden="true"></div>
            <div class="mx-auto max-w-7xl px-5 sm:px-8">
                <div class="grid items-end gap-6 lg:grid-cols-[1fr_0.72fr]">
                    <div>
                        <p class="font-display text-xs font-black uppercase tracking-[0.24em] text-brand-teal-dark">The NIK NOOK experience</p>
                        <h2 class="mt-4 max-w-3xl font-display text-4xl font-black leading-tight tracking-[-0.045em] sm:text-5xl">
                            More than a cut—<br class="hidden sm:block">it’s your time to reset.
                        </h2>
                    </div>
                    <p class="max-w-xl text-base leading-7 text-black/55 lg:justify-self-end">
                        A straightforward local barber experience designed around your preferred look, from the first conversation to the finishing details.
                    </p>
                </div>

                @php
                    $features = [
                        ['consult', 'Tailored consultation', 'Start with questions', 'Talk through the length, shape, and finish you have in mind before the cut begins.', 'teal'],
                        ['scissors', 'Precision cuts', 'Built around you', 'Choose a clean everyday style or bring a reference for a more specific direction.', 'coral'],
                        ['razor', 'Detail-focused finish', 'The final touches', 'Complete the look with careful edging and finishing suited to your chosen style.', 'ink'],
                        ['image', 'Reference-friendly', 'Show the look', 'Bring a photo or inspiration so it is easier to communicate your preferred result.', 'coral'],
                        ['message', 'Direct inquiries', 'Simple connection', 'Use the shop’s Facebook page to ask questions and coordinate before your visit.', 'teal'],
                        ['pin', 'Local convenience', 'Made for Elbi', 'Find a neighborhood barbershop serving the Los Baños community.', 'ink'],
                    ];
                @endphp

                <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($features as [$icon, $title, $eyebrow, $description, $tone])
                        <x-feature-card
                            :number="str_pad($loop->iteration, 2, '0', STR_PAD_LEFT)"
                            :icon="$icon"
                            :title="$title"
                            :eyebrow="$eyebrow"
                            :description="$description"
                            :tone="$tone"
                        />
                    @endforeach
                </div>

                <div class="mt-8 flex flex-col justify-between gap-5 rounded-[1.75rem] bg-brand-teal px-6 py-6 sm:flex-row sm:items-center sm:px-8">
                    <div class="flex items-center gap-4">
                        <span class="flex size-12 shrink-0 items-center justify-center rounded-full bg-brand-ink text-white">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-5" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 16.5V19a1 1 0 0 0 1 1h2.5M4 16.5l4.3-4.3a2.4 2.4 0 0 1 3.4 0l.6.6a2.4 2.4 0 0 0 3.4 0L20 8.5M4 16.5V5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v3.5M20 8.5V19a1 1 0 0 1-1 1H7.5" />
                                <circle cx="9" cy="8" r="1.5" />
                            </svg>
                        </span>
                        <div>
                            <p class="font-display text-xl font-black tracking-tight">Already have a style in mind?</p>
                            <p class="mt-1 text-sm text-brand-ink/65">Keep the reference ready when you contact the shop.</p>
                        </div>
                    </div>
                    <a href="https://www.facebook.com/profile.php?id=100063595255719" target="_blank" rel="noopener noreferrer" class="inline-flex shrink-0 items-center justify-center rounded-full bg-brand-ink px-5 py-3 text-sm font-black text-white transition hover:-translate-y-0.5 hover:bg-white hover:text-brand-ink">
                        Send an inquiry
                    </a>
                </div>
            </div>
        </section>

        <x-product-showcase />

        <x-pricing-section />

        <x-testimonials-section />

        <x-cta-section />
    </main>

    <x-footer />
@endsection
