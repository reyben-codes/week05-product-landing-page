import './bootstrap';

const menuButton = document.querySelector('[data-menu-button]');
const mobileMenu = document.querySelector('[data-mobile-menu]');

const setMenuState = (isOpen) => {
    if (!menuButton || !mobileMenu) {
        return;
    }

    menuButton.setAttribute('aria-expanded', String(isOpen));
    mobileMenu.classList.toggle('hidden', !isOpen);
    menuButton.querySelector('[data-menu-open]')?.classList.toggle('hidden', isOpen);
    menuButton.querySelector('[data-menu-close]')?.classList.toggle('hidden', !isOpen);
};

menuButton?.addEventListener('click', () => {
    setMenuState(menuButton.getAttribute('aria-expanded') !== 'true');
});

mobileMenu?.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => setMenuState(false));
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        setMenuState(false);
        menuButton?.focus();
    }
});

window.addEventListener('resize', () => {
    if (window.matchMedia('(min-width: 1024px)').matches) {
        setMenuState(false);
    }
});
