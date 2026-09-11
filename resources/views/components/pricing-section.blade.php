@php
    $plans = [
        [
            'name' => 'Fresh Cut',
            'tagline' => 'A clean everyday reset',
            'price' => 'Ask for today’s rate',
            'description' => 'A straightforward option for keeping your usual look neat and refreshed.',
            'features' => ['Style conversation', 'Classic haircut direction', 'Clean everyday finish'],
            'featured' => false,
        ],
        [
            'name' => 'Cut + Detail',
            'tagline' => 'Sharper lines, closer detail',
            'price' => 'Ask for today’s rate',
            'description' => 'For a more defined result with extra attention around the finishing details.',
            'features' => ['Style conversation', 'Haircut or fade direction', 'Detail-focused finishing'],
            'featured' => true,
        ],
        [
            'name' => 'Style Refresh',
            'tagline' => 'Bring your next-look idea',
            'price' => 'Ask for today’s rate',
            'description' => 'Start from a photo or inspiration and discuss how to make the look your own.',
            'features' => ['Reference-photo discussion', 'Personalized cut direction', 'Finishing and styling'],
            'featured' => false,
        ],
    ];
@endphp

<section id="pricing" class="relative scroll-mt-20 overflow-hidden bg-brand-ink py-20 text-white sm:py-24">
    <div class="absolute inset-0 opacity-[0.07]" aria-hidden="true" style="background-image: radial-gradient(circle at center, #fff 1px, transparent 1px); background-size: 24px 24px;"></div>
    <div class="absolute -left-40 top-1/4 size-96 rounded-full bg-brand-coral/20 blur-3xl" aria-hidden="true"></div>
    <div class="absolute -right-40 bottom-0 size-96 rounded-full bg-brand-teal/20 blur-3xl" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-7xl px-5 sm:px-8">
        <div class="grid items-end gap-6 lg:grid-cols-[1fr_0.7fr]">
            <div>
                <p class="font-display text-xs font-black uppercase tracking-[0.24em] text-brand-teal">Service plans</p>
                <h2 class="mt-4 max-w-3xl font-display text-4xl font-black leading-tight tracking-[-0.045em] sm:text-5xl">
                    Start with the kind of cut you’re looking for.
                </h2>
            </div>
            <div class="lg:justify-self-end">
                <p class="max-w-xl text-base leading-7 text-white/55">
                    Choose a starting point, then contact NIK NOOK to confirm the exact service, current rate, and availability for your visit.
                </p>
                <div class="mt-4 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-2 text-[0.68rem] font-bold text-white/60">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-4 text-brand-coral" aria-hidden="true"><circle cx="12" cy="12" r="9" /><path stroke-linecap="round" d="M12 8v5m0 3h.01" /></svg>
                    Final services and rates are confirmed by the shop
                </div>
            </div>
        </div>

        <div class="mt-12 grid items-stretch gap-5 lg:grid-cols-3">
            @foreach ($plans as $plan)
                <x-pricing-card
                    :name="$plan['name']"
                    :tagline="$plan['tagline']"
                    :price="$plan['price']"
                    :description="$plan['description']"
                    :features="$plan['features']"
                    :featured="$plan['featured']"
                />
            @endforeach
        </div>

        <div class="mt-9 flex flex-col items-start justify-between gap-4 rounded-2xl border border-white/10 bg-white/5 px-5 py-5 sm:flex-row sm:items-center sm:px-7">
            <div class="flex items-start gap-3">
                <span class="flex size-9 shrink-0 items-center justify-center rounded-full bg-brand-teal text-brand-ink">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-4" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M8 10h8m-8 4h5m8-2a9 9 0 1 1-4.2-7.6L21 3v5h-5" /></svg>
                </span>
                <div>
                    <p class="text-sm font-black">Not sure which option fits?</p>
                    <p class="mt-1 text-xs leading-5 text-white/50">Send your reference or describe the look you want when you inquire.</p>
                </div>
            </div>
            <a href="https://www.facebook.com/profile.php?id=100063595255719" target="_blank" rel="noopener noreferrer" class="text-sm font-black text-brand-teal underline decoration-brand-teal/40 decoration-2 underline-offset-4 transition hover:text-white">
                Ask NIK NOOK →
            </a>
        </div>
    </div>
</section>
