@php
    $testimonials = [
        [
            'name' => 'Edralin Canape',
            'image' => 'images/testimonials/edralin-canape.jpg',
            'quote' => 'Mabilis and maayos mag pa appointment ng haircut. Super sulit nang haircut for their rate and magagaling din barbers nila, shoutout kay Cedric na kuha lagi yung reference ko.',
            'role' => 'Customer',
            'source' => 'Facebook review',
            'accent' => 'teal',
        ],
        [
            'name' => 'Kenn Buena',
            'image' => 'images/testimonials/kenn-buena.jpg',
            'quote' => 'Very affordable yung prices nila for a decent haircut. Sobrang linis din ng haircuts nila. Overall, good service sya para sakin. Recommended for those na naghahanap ng good quality but cheap priced haircuts.',
            'role' => 'Customer',
            'source' => 'Customer feedback',
            'accent' => 'coral',
        ],
        [
            'name' => 'Brent Ysrelle',
            'image' => 'images/testimonials/brent-ysrelle.jpg',
            'quote' => 'Sobrang bait ng mga staff samin kahit na medyo na late kami ng konti sa pag dating for our appointment sa kanila. Very recommendable kasi sobrang linis ng gupit nila and talagang nagagawa nila yung mga references na pinapakita namin sa kanila.',
            'role' => 'Customer',
            'source' => 'Customer feedback',
            'accent' => 'ink',
        ],
    ];
@endphp

<section id="testimonials" class="relative scroll-mt-20 overflow-hidden bg-brand-paper py-20 sm:py-24">
    <div class="absolute -left-32 top-1/3 size-80 rounded-full bg-brand-coral/10 blur-3xl" aria-hidden="true"></div>
    <div class="absolute -right-32 top-0 size-80 rounded-full bg-brand-teal/10 blur-3xl" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid items-end gap-6 lg:grid-cols-[1fr_0.72fr]">
            <div>
                <p class="font-display text-xs font-black uppercase tracking-[0.24em] text-brand-teal-dark">Customer stories</p>
                <h2 class="mt-4 max-w-3xl font-display text-4xl font-black leading-tight tracking-[-0.045em] text-brand-ink sm:text-5xl">
                    Fresh cuts.<br class="hidden sm:block"> Real feedback.
                </h2>
            </div>
            <p class="max-w-xl text-base leading-7 text-brand-ink/55 lg:justify-self-end">
                Customers highlight the value, clean results, accommodating staff, and the team’s ability to follow their haircut references.
            </p>
        </div>

        <div class="mt-12 grid items-stretch gap-5 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($testimonials as $testimonial)
                <x-testimonial-card
                    :name="$testimonial['name']"
                    :image="$testimonial['image']"
                    :quote="$testimonial['quote']"
                    :role="$testimonial['role']"
                    :source="$testimonial['source']"
                    :accent="$testimonial['accent']"
                />
            @endforeach
        </div>

        <div class="mt-8 flex flex-col items-start justify-between gap-4 rounded-2xl border border-brand-ink/10 bg-brand-teal/10 px-5 py-5 sm:flex-row sm:items-center sm:px-7">
            <div>
                <p class="font-display text-sm font-black text-brand-ink">Want to see more from the shop?</p>
                <p class="mt-1 text-xs leading-5 text-brand-ink/50">Visit NIK NOOK’s official Facebook page for its latest public updates.</p>
            </div>
            <a
                href="https://www.facebook.com/profile.php?id=100063595255719"
                target="_blank"
                rel="noopener noreferrer"
                class="inline-flex items-center gap-2 text-sm font-black text-brand-teal-dark underline decoration-brand-teal/40 decoration-2 underline-offset-4 transition hover:text-brand-ink"
            >
                Visit Facebook
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-4" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" /></svg>
            </a>
        </div>
    </div>
</section>
