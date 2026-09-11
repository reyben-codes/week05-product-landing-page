<section id="contact" class="relative scroll-mt-20 overflow-hidden bg-brand-teal py-20 sm:py-24">
    <div class="absolute -left-24 -top-24 size-72 rounded-full border-[36px] border-white/10" aria-hidden="true"></div>
    <div class="absolute -bottom-32 -right-24 size-80 rounded-full bg-brand-coral/70 blur-3xl" aria-hidden="true"></div>

    <div class="relative mx-auto max-w-7xl px-5 sm:px-8">
        <div class="overflow-hidden rounded-[2rem] bg-brand-paper shadow-soft lg:grid lg:grid-cols-[1.08fr_0.92fr]">
            <div class="px-6 py-10 sm:px-10 sm:py-14 lg:px-14 lg:py-16">
                <p class="font-display text-xs font-black uppercase tracking-[0.24em] text-brand-teal-dark">Your next look starts here</p>
                <h2 class="mt-4 max-w-2xl font-display text-4xl font-black leading-[0.98] tracking-[-0.05em] text-brand-ink sm:text-5xl lg:text-6xl">
                    Ready for your next cut?
                </h2>
                <p class="mt-6 max-w-xl text-base leading-7 text-brand-ink/60">
                    Tell NIK NOOK what you have in mind, share a reference, and confirm the service, current rate, and availability directly with the shop.
                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row sm:flex-wrap">
                    <a
                        href="https://www.facebook.com/profile.php?id=100063595255719"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex items-center justify-center gap-2 rounded-full bg-brand-ink px-6 py-3.5 text-sm font-black text-white transition hover:-translate-y-0.5 hover:bg-brand-teal-dark"
                    >
                        Contact the shop
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-4" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m-5-5 5 5-5 5" />
                        </svg>
                    </a>
                    <a href="#pricing" class="inline-flex items-center justify-center rounded-full border-2 border-brand-ink px-6 py-3 text-sm font-black text-brand-ink transition hover:-translate-y-0.5 hover:bg-brand-ink hover:text-white">
                        Review service options
                    </a>
                </div>

                <p class="mt-5 flex items-center gap-2 text-xs font-bold text-brand-ink/50">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-4 text-brand-teal-dark" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" />
                    </svg>
                    No online payment—final details are confirmed with the shop.
                </p>
            </div>

            <div class="relative min-h-80 overflow-hidden bg-brand-ink px-6 py-10 text-white sm:px-10 lg:px-12 lg:py-14">
                <div class="absolute inset-0 opacity-[0.08]" aria-hidden="true" style="background-image: radial-gradient(circle at center, #fff 1px, transparent 1px); background-size: 22px 22px;"></div>
                <div class="absolute -right-20 -top-16 size-56 rounded-full bg-brand-teal/30 blur-3xl" aria-hidden="true"></div>

                <div class="relative">
                    <div class="flex items-center justify-between">
                        <p class="text-xs font-black uppercase tracking-[0.2em] text-brand-teal">Three simple steps</p>
                        <span class="flex size-11 items-center justify-center rounded-full bg-brand-coral text-brand-ink">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-5" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h8m-8 4h5m8-2a9 9 0 1 1-4.2-7.6L21 3v5h-5" />
                            </svg>
                        </span>
                    </div>

                    <ol class="mt-8 space-y-4">
                        @foreach ([
                            ['Register your interest', 'Choose the kind of service you want to ask about.'],
                            ['Contact NIK NOOK', 'Message the shop through its official Facebook page.'],
                            ['Start your inquiry', 'Confirm the details before planning your visit.'],
                        ] as [$title, $description])
                            <li class="flex gap-4 rounded-2xl border border-white/10 bg-white/[0.06] p-4">
                                <span class="flex size-9 shrink-0 items-center justify-center rounded-full bg-brand-teal font-display text-sm font-black text-brand-ink">
                                    {{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}
                                </span>
                                <div>
                                    <p class="font-display text-base font-black">{{ $title }}</p>
                                    <p class="mt-1 text-xs leading-5 text-white/50">{{ $description }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
