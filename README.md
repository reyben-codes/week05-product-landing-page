# NIK NOOK Barbers Elbi — Responsive Product Landing Page

A modern, responsive landing page created for **NIK NOOK Barbers Elbi**, a local barbershop serving the Los Baños community. The project transforms the business information available through its [Facebook page](https://www.facebook.com/profile.php?id=100063595255719) into a focused customer journey for discovering services, reviewing customer feedback, and contacting the shop.

This is **Mini Project 04** for Week 5 and was built individually with Laravel, Blade components, Tailwind CSS, JavaScript, and Vite.

## Project Objectives

- Present a real local business through a professional landing-page experience.
- Build a clear content flow from service discovery to direct inquiry.
- Create reusable Blade components instead of repeating interface markup.
- Use Tailwind CSS utilities for responsive layouts and visual consistency.
- Support desktop, laptop, tablet, and mobile screen sizes.
- Provide accessible navigation, visible focus states, semantic sections, and descriptive image alternatives.
- Preserve content accuracy by directing visitors to the shop for current services, rates, and availability.

## Landing Page Sections

The page contains all required sections:

1. Responsive navigation with logo, page links, Sign In, and Get Started actions
2. Hero section with headline, description, primary and secondary calls to action, and an inquiry mockup
3. Six service-feature cards
4. Desktop and mobile product showcase
5. Three service-plan pricing cards
6. Three genuine customer testimonials
7. Final conversion call-to-action
8. Footer with company information, quick links, social link, location, and copyright

## Responsive Design

The interface follows a mobile-first approach. Tailwind breakpoints reorganize the same semantic page rather than loading separate mobile content.

| View | Responsive behavior |
| --- | --- |
| Mobile | Collapsible navigation, single-column sections, full-width actions, and stacked cards |
| Tablet | Expanded typography, two-column card layouts where space permits, and a larger product preview |
| Laptop/Desktop | Full navigation, multi-column layouts, side-by-side hero content, and three-column card grids |

Flexible widths, responsive spacing, CSS grid, flexbox, wrapping controls, and scalable typography prevent horizontal scrolling and keep content readable across supported devices.

## Tailwind CSS Implementation

The project uses Tailwind CSS v4 through Vite. Its utility classes handle:

- Responsive grid and flex layouts
- Breakpoint-specific spacing and typography
- Brand colors and reusable theme values
- Rounded cards, borders, shadows, and decorative backgrounds
- Hover, focus-visible, and transition states
- Reduced-motion support and smooth in-page navigation

Project theme values are defined in `resources/css/app.css`, including the teal, coral, cream, paper, and ink color palette used throughout the page.

## Blade Components

Reusable Blade components keep each section focused and maintainable:

| Component | Responsibility |
| --- | --- |
| `navbar.blade.php` | Desktop and mobile navigation |
| `hero.blade.php` | Main message, actions, and inquiry preview |
| `feature-card.blade.php` | Reusable feature presentation |
| `product-showcase.blade.php` | Desktop/mobile service-discovery mockups |
| `pricing-card.blade.php` | Reusable service-plan card |
| `pricing-section.blade.php` | Pricing data and responsive plan grid |
| `testimonial-card.blade.php` | Reusable customer review card |
| `testimonials-section.blade.php` | Testimonial data and section layout |
| `cta-section.blade.php` | Final customer inquiry path |
| `footer.blade.php` | Company details, links, and social connection |

The page view at `resources/views/pages/home.blade.php` composes these sections inside `resources/views/layouts/app.blade.php`.

## UI Design

The visual direction was inspired by classic barbershop contrast while retaining the turquoise color associated with the existing NIK NOOK logo. The interface combines:

- High-contrast black and off-white surfaces
- Teal as the main action and brand color
- Coral accents inspired by traditional barber poles
- Heavy display typography for strong section hierarchy
- Rounded cards and soft shadows for a modern, approachable appearance
- Original interface mockups that explain the customer inquiry journey

Prices and availability are intentionally not invented. Visitors are asked to confirm current information directly with the shop through Facebook.

## Project Structure

```text
week05-product-landing-page/
├── documentation/
│   ├── design-comparison.md
│   ├── before-design.png
│   └── screenshots/
├── public/
│   └── images/
│       ├── testimonials/
│       ├── nik-nook-favicon.png
│       └── nik-nook-logo.jpg
├── resources/
│   ├── css/app.css
│   ├── js/app.js
│   └── views/
│       ├── components/
│       ├── layouts/app.blade.php
│       └── pages/home.blade.php
├── routes/web.php
└── tests/Feature/LandingPageTest.php
```

## Screenshots

### Before and After

| Initial wireframe | Final design |
| --- | --- |
| ![Initial low-fidelity landing-page wireframe](documentation/screenshots/before-design.png) | ![Final NIK NOOK landing-page design](documentation/screenshots/after-design.png) |

The before image is a low-fidelity wireframe created for this project from the business information available online. It is not presented as an earlier website owned by NIK NOOK. See the full [design comparison](documentation/design-comparison.md).

### Responsive Views

| Desktop | Tablet | Mobile |
| --- | --- | --- |
| [View desktop screenshot](documentation/screenshots/after-desktop.png) | [View tablet screenshot](documentation/screenshots/after-tablet.png) | [View mobile screenshot](documentation/screenshots/after-mobile.png) |

### Page Sections

- [Navigation on mobile](documentation/screenshots/navigation-mobile.png)
- [Hero section](documentation/screenshots/hero.png)
- [Features section](documentation/screenshots/features.png)
- [Product showcase](documentation/screenshots/showcase.png)
- [Pricing section](documentation/screenshots/pricing.png)
- [Testimonials section](documentation/screenshots/testimonials.png)
- [Footer](documentation/screenshots/footer.png)

### Development Evidence

- [VS Code project structure](documentation/screenshots/vscode-project-structure.png)
- [Blade component folders](documentation/screenshots/blade-components.png)
- [Public GitHub repository](documentation/screenshots/github-repository.png)

## Local Setup

### Requirements

- PHP 8.2 or later
- Composer
- Node.js and npm

### Installation

```bash
git clone https://github.com/reyben-codes/week05-product-landing-page.git
cd week05-product-landing-page
composer install
php -r "file_exists('.env') || copy('.env.example', '.env');"
php artisan key:generate
npm install
npm run build
php artisan serve
```

Open `http://127.0.0.1:8000` in a browser.

This static landing page does not require application database records. Its displayed content is maintained through Blade component data.

## Testing

Run the automated feature checks with:

```bash
php artisan test
```

The tests verify the required section order, navigation and calls to action, official business link, absence of placeholder links, and all three customer testimonials.

## Content and Usage Note

This website was created for educational purposes. NIK NOOK Barbers Elbi and its logo belong to their respective owner. Customer names, feedback, and supplied portrait images should only remain in the public repository with their permission.
