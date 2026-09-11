<?php

namespace Tests\Feature;

use Tests\TestCase;

class LandingPageTest extends TestCase
{
    public function test_home_page_contains_every_required_section(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSeeInOrder([
                'id="home"',
                'id="features"',
                'id="showcase"',
                'id="pricing"',
                'id="testimonials"',
                'id="contact"',
            ], false);
    }

    public function test_home_page_contains_required_navigation_and_actions(): void
    {
        $response = $this->get('/');

        $response->assertSeeTextInOrder([
            'Home',
            'Features',
            'Pricing',
            'Testimonials',
            'Contact',
            'Sign In',
            'Get Started',
        ]);

        $response
            ->assertSee('https://www.facebook.com/profile.php?id=100063595255719', false)
            ->assertDontSee('href="#"', false);
    }

    public function test_home_page_presents_three_customer_testimonials(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSeeText('Edralin Canape')
            ->assertSeeText('Kenn Buena')
            ->assertSeeText('Brent Ysrelle')
            ->assertSee('images/testimonials/edralin-canape.jpg', false)
            ->assertSee('images/testimonials/kenn-buena.jpg', false)
            ->assertSee('images/testimonials/brent-ysrelle.jpg', false);
    }
}
