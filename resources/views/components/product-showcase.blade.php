<section id="showcase" class="scroll-mt-20 overflow-hidden bg-brand-cream py-20 sm:py-24">
    <div class="mx-auto max-w-7xl px-5 sm:px-8">
        <div class="mx-auto max-w-3xl text-center">
            <p class="font-display text-xs font-black uppercase tracking-[0.24em] text-brand-teal-dark">Website showcase</p>
            <h2 class="mt-4 font-display text-4xl font-black leading-tight tracking-[-0.045em] sm:text-5xl">
                From style idea to shop visit,<br class="hidden sm:block"> without the guesswork.
            </h2>
            <p class="mx-auto mt-5 max-w-2xl text-base leading-7 text-black/55">
                The landing page organizes key information into a simple customer journey that works just as clearly on a laptop or a phone.
            </p>
        </div>

        <figure class="relative mt-12 lg:mt-16" aria-labelledby="showcase-caption">
            <figcaption id="showcase-caption" class="sr-only">Desktop dashboard and mobile view mockups for the NIK NOOK customer inquiry experience.</figcaption>

            <div class="grid items-center gap-7 lg:grid-cols-[minmax(0,1fr)_19rem] xl:gap-10">
                <div class="relative min-w-0">
                    <div class="absolute -left-16 -top-16 size-48 rounded-full bg-brand-coral/20 blur-3xl" aria-hidden="true"></div>
                    <div class="relative overflow-hidden rounded-[1.6rem] border-[6px] border-brand-ink bg-brand-ink shadow-[0_34px_80px_-30px_rgba(17,19,19,0.5)] sm:rounded-[2rem] sm:border-[10px]">
                        <div class="flex h-10 items-center gap-2 border-b border-white/10 bg-[#202323] px-4" aria-hidden="true">
                            <span class="size-2.5 rounded-full bg-brand-coral"></span>
                            <span class="size-2.5 rounded-full bg-amber-300"></span>
                            <span class="size-2.5 rounded-full bg-brand-teal"></span>
                            <span class="ml-3 h-5 flex-1 rounded-full bg-white/10"></span>
                        </div>

                        <div class="grid min-h-[31rem] bg-brand-paper md:grid-cols-[11rem_1fr]">
                            <aside class="hidden border-r border-black/10 bg-brand-cream p-5 md:flex md:flex-col">
                                <div class="flex items-center gap-2.5">
                                    <img src="{{ asset('images/nik-nook-logo.jpg') }}" alt="" class="size-9 rounded-full border-2 border-brand-ink object-cover">
                                    <div class="leading-none">
                                        <p class="font-display text-sm font-black">NIK NOOK</p>
                                        <p class="mt-1 text-[0.48rem] font-bold uppercase tracking-[0.18em] text-brand-teal-dark">Barbers Elbi</p>
                                    </div>
                                </div>

                                <nav class="mt-9 space-y-2 text-xs font-bold" aria-label="Dashboard preview navigation">
                                    <span class="flex items-center gap-2.5 rounded-xl bg-brand-ink px-3 py-3 text-white">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-4" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m4 10 8-6 8 6v9a1 1 0 0 1-1 1h-5v-6h-4v6H5a1 1 0 0 1-1-1v-9Z" /></svg>
                                        Discover
                                    </span>
                                    <span class="flex items-center gap-2.5 rounded-xl px-3 py-3 text-black/45">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-4" aria-hidden="true"><circle cx="6" cy="7" r="3" /><circle cx="6" cy="17" r="3" /><path stroke-linecap="round" d="m8.5 8.5 11 9M8.5 15.5l11-9" /></svg>
                                        Services
                                    </span>
                                    <span class="flex items-center gap-2.5 rounded-xl px-3 py-3 text-black/45">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-4" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z" /><circle cx="12" cy="10" r="2" /></svg>
                                        Visit
                                    </span>
                                </nav>

                                <div class="mt-auto rounded-2xl bg-brand-teal p-4">
                                    <p class="text-[0.58rem] font-black uppercase tracking-wider">Need help?</p>
                                    <p class="mt-1 text-xs font-bold leading-4">Message the shop directly.</p>
                                    <span class="mt-3 block rounded-full bg-brand-ink px-3 py-2 text-center text-[0.6rem] font-black text-white">Open Facebook</span>
                                </div>
                            </aside>

                            <div class="min-w-0 p-4 sm:p-6 lg:p-7">
                                <div class="flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
                                    <div>
                                        <p class="text-[0.62rem] font-black uppercase tracking-[0.18em] text-brand-teal-dark">Style finder</p>
                                        <h3 class="mt-1 font-display text-2xl font-black tracking-tight sm:text-3xl">Find your next look</h3>
                                    </div>
                                    <div class="flex items-center gap-2 self-start rounded-full border border-black/10 bg-white px-3 py-2 text-[0.62rem] font-bold text-black/55 shadow-sm">
                                        <span class="size-2 rounded-full bg-brand-teal"></span>
                                        Ready when you are
                                    </div>
                                </div>

                                <div class="mt-6 grid gap-3 sm:grid-cols-3">
                                    @foreach ([
                                        ['Classic cut', 'Clean & timeless', 'teal'],
                                        ['Fade & detail', 'Sharp & defined', 'coral'],
                                        ['Style refresh', 'Bring a reference', 'ink'],
                                    ] as [$name, $description, $tone])
                                        @php
                                            $activeClasses = match ($tone) {
                                                'teal' => 'border-brand-teal bg-brand-teal/10',
                                                'coral' => 'border-black/10 bg-white',
                                                default => 'border-black/10 bg-white',
                                            };
                                            $iconClasses = match ($tone) {
                                                'coral' => 'bg-brand-coral',
                                                'ink' => 'bg-brand-ink text-white',
                                                default => 'bg-brand-teal',
                                            };
                                        @endphp
                                        <div @class(['rounded-2xl border p-3.5', $activeClasses])>
                                            <span @class(['flex size-8 items-center justify-center rounded-xl', $iconClasses])>
                                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-4" aria-hidden="true"><circle cx="6" cy="7" r="3" /><circle cx="6" cy="17" r="3" /><path stroke-linecap="round" d="m8.5 8.5 11 9M8.5 15.5l11-9" /></svg>
                                            </span>
                                            <p class="mt-4 text-xs font-black">{{ $name }}</p>
                                            <p class="mt-1 text-[0.62rem] text-black/45">{{ $description }}</p>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="mt-5 grid gap-4 xl:grid-cols-[1fr_0.8fr]">
                                    <div class="rounded-2xl border border-black/10 bg-white p-4">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <p class="text-[0.58rem] font-black uppercase tracking-wider text-black/40">Your inquiry path</p>
                                                <p class="mt-1 text-sm font-black">Three simple steps</p>
                                            </div>
                                            <span class="rounded-full bg-brand-teal/15 px-2.5 py-1 text-[0.55rem] font-black text-brand-teal-dark">QUICK GUIDE</span>
                                        </div>
                                        <div class="mt-5 grid grid-cols-3 gap-2 text-center">
                                            @foreach ([['1', 'Choose'], ['2', 'Message'], ['3', 'Confirm']] as [$step, $label])
                                                <div>
                                                    <span class="mx-auto flex size-8 items-center justify-center rounded-full bg-brand-cream text-xs font-black ring-1 ring-black/10">{{ $step }}</span>
                                                    <p class="mt-2 text-[0.6rem] font-bold text-black/55">{{ $label }}</p>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <div class="relative overflow-hidden rounded-2xl bg-brand-ink p-4 text-white">
                                        <div class="absolute -bottom-8 -right-6 size-24 rounded-full bg-brand-teal/30 blur-2xl" aria-hidden="true"></div>
                                        <p class="text-[0.58rem] font-black uppercase tracking-wider text-brand-teal">Direct connection</p>
                                        <p class="mt-2 text-sm font-black leading-5">Have a question before your visit?</p>
                                        <p class="mt-2 text-[0.62rem] leading-4 text-white/50">Continue the conversation on the shop’s Facebook page.</p>
                                        <span class="relative mt-4 flex items-center justify-between rounded-full bg-white px-3 py-2 text-[0.6rem] font-black text-brand-ink">
                                            Send inquiry
                                            <span aria-hidden="true">→</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto mt-3 h-3 w-[88%] rounded-b-full bg-black/15 blur-[1px]" aria-hidden="true"></div>
                </div>

                <div class="relative mx-auto w-full max-w-[19rem]">
                    <div class="absolute -right-16 -top-12 size-44 rounded-full bg-brand-teal/30 blur-3xl" aria-hidden="true"></div>
                    <div class="relative rounded-[2.7rem] border-[8px] border-brand-ink bg-brand-ink p-1.5 shadow-[0_30px_70px_-25px_rgba(17,19,19,0.55)]">
                        <div class="absolute left-1/2 top-3 z-10 h-5 w-24 -translate-x-1/2 rounded-full bg-brand-ink" aria-hidden="true"></div>
                        <div class="min-h-[35rem] overflow-hidden rounded-[2rem] bg-brand-paper">
                            <div class="bg-brand-teal px-5 pb-7 pt-10">
                                <div class="flex items-center justify-between">
                                    <img src="{{ asset('images/nik-nook-logo.jpg') }}" alt="" class="size-10 rounded-full border-2 border-brand-ink object-cover">
                                    <span class="flex size-9 items-center justify-center rounded-full bg-brand-ink text-white">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-4" aria-hidden="true"><path stroke-linecap="round" d="M4 7h16M4 12h16M4 17h16" /></svg>
                                    </span>
                                </div>
                                <p class="mt-7 text-[0.6rem] font-black uppercase tracking-[0.18em]">Your next look</p>
                                <p class="mt-2 font-display text-3xl font-black leading-none tracking-tight">Start with a conversation.</p>
                            </div>

                            <div class="p-5">
                                <p class="text-[0.6rem] font-black uppercase tracking-[0.16em] text-black/40">Popular directions</p>
                                <div class="mt-3 space-y-2.5">
                                    @foreach (['Classic cut', 'Fade & detail', 'Bring a reference'] as $mobileService)
                                        <div class="flex items-center justify-between rounded-2xl border border-black/10 bg-white p-3.5">
                                            <div class="flex items-center gap-3">
                                                <span class="flex size-8 items-center justify-center rounded-xl bg-brand-cream">
                                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-4" aria-hidden="true"><circle cx="6" cy="7" r="3" /><circle cx="6" cy="17" r="3" /><path stroke-linecap="round" d="m8.5 8.5 11 9M8.5 15.5l11-9" /></svg>
                                                </span>
                                                <span class="text-xs font-black">{{ $mobileService }}</span>
                                            </div>
                                            <span class="text-sm" aria-hidden="true">→</span>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="mt-5 rounded-2xl bg-brand-ink p-4 text-white">
                                    <div class="flex items-center gap-3">
                                        <span class="flex size-9 items-center justify-center rounded-full bg-brand-coral text-brand-ink">
                                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="size-4" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="M20 11.5a8 8 0 0 1-9.1 7.9L5 21l1.6-4.2A8 8 0 1 1 20 11.5Z" /></svg>
                                        </span>
                                        <div>
                                            <p class="text-xs font-black">Ready to inquire?</p>
                                            <p class="mt-0.5 text-[0.58rem] text-white/50">Continue on Facebook</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </figure>

        <div class="mt-14 grid gap-4 sm:grid-cols-3">
            @foreach ([
                ['Responsive by design', 'The content reorganizes naturally for desktop, tablet, and mobile screens.'],
                ['Clear service discovery', 'Visual groupings help visitors understand their options without information overload.'],
                ['Direct shop handoff', 'Calls to action lead customers to the business’s established Facebook presence.'],
            ] as [$title, $description])
                <article class="flex gap-4 rounded-2xl border border-black/10 bg-brand-paper p-5">
                    <span class="mt-0.5 flex size-7 shrink-0 items-center justify-center rounded-full bg-brand-teal text-brand-ink">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" class="size-3.5" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" d="m5 12 4 4L19 6" /></svg>
                    </span>
                    <div>
                        <h3 class="text-sm font-black">{{ $title }}</h3>
                        <p class="mt-2 text-xs leading-5 text-black/50">{{ $description }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
