@extends('layouts.app')

@section('title', 'NIK NOOK Barbers Elbi | Landing Page Prototype')

@section('content')
    <x-navbar />

    <main id="main-content">
        <x-hero />

        <section id="features" class="border-y border-zinc-300 bg-zinc-50 py-16">
            <div class="mx-auto max-w-6xl px-6">
                <p class="text-sm uppercase">Features</p>
                <h2 class="mt-2 text-3xl font-bold">What the shop experience can offer</h2>
                <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ([
                        ['Scissor', 'Classic cuts', 'Everyday cuts shaped around your preferred style.'],
                        ['Razor', 'Clean finishing', 'Detail work for crisp edges and a polished finish.'],
                        ['Chair', 'Local convenience', 'A neighborhood barbershop based in Los Baños.'],
                        ['Clock', 'Easy inquiries', 'Reach the shop through its public Facebook page.'],
                        ['Mirror', 'Personal style', 'Bring a reference and discuss the look you want.'],
                        ['Spark', 'Fresh confidence', 'Leave ready for work, class, or your next event.'],
                    ] as [$icon, $title, $description])
                        <article class="border border-zinc-300 bg-white p-5">
                            <div class="mb-4 flex size-10 items-center justify-center rounded-full border border-zinc-400 text-xs">{{ $icon }}</div>
                            <h3 class="font-bold">{{ $title }}</h3>
                            <p class="mt-2 text-sm text-zinc-600">{{ $description }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="mx-auto max-w-6xl px-6 py-16">
            <p class="text-sm uppercase">Product showcase</p>
            <h2 class="mt-2 text-3xl font-bold">Preview the booking journey</h2>
            <div class="mt-8 grid gap-5 lg:grid-cols-3">
                <div class="flex min-h-64 items-center justify-center border border-dashed border-zinc-500 bg-zinc-100 p-6 text-center text-zinc-500 lg:col-span-2">Desktop dashboard / booking preview</div>
                <div class="flex min-h-64 items-center justify-center border border-dashed border-zinc-500 bg-zinc-100 p-6 text-center text-zinc-500">Mobile view</div>
            </div>
            <ul class="mt-6 grid gap-3 text-sm sm:grid-cols-3">
                <li class="border border-zinc-300 p-4">Clear service choices</li>
                <li class="border border-zinc-300 p-4">Mobile-friendly contact flow</li>
                <li class="border border-zinc-300 p-4">Fast access to shop details</li>
            </ul>
        </section>

        <section id="pricing" class="border-y border-zinc-300 bg-zinc-50 py-16">
            <div class="mx-auto max-w-6xl px-6">
                <p class="text-sm uppercase">Pricing prototype</p>
                <h2 class="mt-2 text-3xl font-bold">Choose your service</h2>
                <p class="mt-3 text-zinc-600">Placeholder packages for the initial wireframe; final pricing should be confirmed with the business.</p>
                <div class="mt-8 grid gap-5 md:grid-cols-3">
                    @foreach ([
                        ['Fresh Cut', 'Price on inquiry', ['Consultation', 'Haircut', 'Basic styling']],
                        ['Cut + Detail', 'Price on inquiry', ['Consultation', 'Haircut', 'Detail finishing']],
                        ['Full Refresh', 'Price on inquiry', ['Consultation', 'Haircut', 'Complete styling']],
                    ] as [$plan, $price, $items])
                        <article class="border border-zinc-400 bg-white p-6">
                            <h3 class="text-xl font-bold">{{ $plan }}</h3>
                            <p class="mt-4 text-2xl">{{ $price }}</p>
                            <ul class="my-6 space-y-2 text-sm text-zinc-600">
                                @foreach ($items as $item)
                                    <li>— {{ $item }}</li>
                                @endforeach
                            </ul>
                            <a href="#contact" class="block border border-zinc-900 px-4 py-3 text-center">Inquire</a>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="testimonials" class="mx-auto max-w-6xl px-6 py-16">
            <p class="text-sm uppercase">Testimonials</p>
            <h2 class="mt-2 text-3xl font-bold">Customer story placeholders</h2>
            <p class="mt-3 text-zinc-600">These cards demonstrate the required layout and do not represent published customer reviews.</p>
            <div class="mt-8 grid gap-5 md:grid-cols-3">
                @foreach (['Customer One', 'Customer Two', 'Customer Three'] as $customer)
                    <figure class="border border-zinc-300 p-6">
                        <div class="mb-4 flex size-12 items-center justify-center rounded-full bg-zinc-200">Photo</div>
                        <blockquote class="text-zinc-600">“Sample review content will appear here after the business provides permission and verified feedback.”</blockquote>
                        <figcaption class="mt-5">
                            <p class="font-bold">{{ $customer }}</p>
                            <p class="text-sm text-zinc-500">Sample customer</p>
                        </figcaption>
                    </figure>
                @endforeach
            </div>
        </section>

        <section id="contact" class="border-y border-zinc-300 bg-zinc-100 py-16 text-center">
            <div class="mx-auto max-w-3xl px-6">
                <h2 class="text-3xl font-bold">Ready for your next cut?</h2>
                <p class="mt-4 text-zinc-600">Register your interest, contact the shop, or begin a booking inquiry through its Facebook page.</p>
                <div class="mt-7 flex flex-wrap justify-center gap-3">
                    <a href="#" class="border border-zinc-900 px-4 py-3">Register</a>
                    <a href="#" class="border border-zinc-900 px-4 py-3">Contact shop</a>
                    <a href="#" class="border border-zinc-900 px-4 py-3">Start inquiry</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="px-6 py-12">
        <div class="mx-auto grid max-w-6xl gap-8 md:grid-cols-4">
            <div>
                <p class="font-bold">NIK NOOK Barbers Elbi</p>
                <p class="mt-2 text-sm text-zinc-600">A local barbershop in Los Baños.</p>
            </div>
            <div>
                <p class="font-bold">Quick links</p>
                <a href="#features" class="mt-2 block text-sm">Features</a>
                <a href="#pricing" class="mt-2 block text-sm">Pricing</a>
            </div>
            <div>
                <p class="font-bold">Social</p>
                <a href="https://www.facebook.com/profile.php?id=100063595255719" class="mt-2 block text-sm">Facebook</a>
            </div>
            <div>
                <p class="font-bold">Contact</p>
                <p class="mt-2 text-sm text-zinc-600">Los Baños, Laguna</p>
            </div>
        </div>
        <p class="mx-auto mt-10 max-w-6xl border-t border-zinc-300 pt-5 text-sm text-zinc-500">© {{ date('Y') }} NIK NOOK Barbers Elbi. Student project prototype.</p>
    </footer>
@endsection
