import './bootstrap';

const sidebar = document.getElementById('sidebar');
const sidebarScrim = document.getElementById('sidebarScrim');
const mobileMenuButton = document.getElementById('mobileMenuButton');
const sidebarMenuButton = document.getElementById('sidebarMenuButton');
const adminMenuButton = document.getElementById('adminMenuButton');
const adminDropdown = document.getElementById('adminDropdown');
const adminChevron = document.getElementById('adminChevron');

const isDesktop = () => window.innerWidth >= 1024;

/* ---- Mobile sidebar ---- */

function openSidebar() {
    if (!sidebar) return;

    sidebar.classList.add('translate-x-0');
    sidebar.classList.remove('-translate-x-full');
    document.body.classList.add('overflow-hidden');
    sidebarScrim?.classList.remove('hidden');
}

function closeSidebar() {
    if (!sidebar) return;

    sidebar.classList.remove('translate-x-0');
    sidebar.classList.add('-translate-x-full');
    document.body.classList.remove('overflow-hidden');
    sidebarScrim?.classList.add('hidden');
}

mobileMenuButton?.addEventListener('click', openSidebar);

sidebarMenuButton?.addEventListener('click', () => {
    if (!isDesktop()) {
        closeSidebar();
        return;
    }

    document.body.classList.toggle('sidebar-collapsed');
});

sidebarScrim?.addEventListener('click', closeSidebar);

/* ---- Admin dropdown ---- */

function closeAdminDropdown() {
    adminDropdown?.classList.add('hidden');
    adminChevron?.classList.remove('rotate-180');
    adminMenuButton?.setAttribute('aria-expanded', 'false');
}

adminMenuButton?.addEventListener('click', (event) => {
    event.stopPropagation();

    if (adminDropdown?.classList.contains('hidden')) {
        adminDropdown.classList.remove('hidden');
        adminChevron?.classList.add('rotate-180');
        adminMenuButton.setAttribute('aria-expanded', 'true');
    } else {
        closeAdminDropdown();
    }
});

document.addEventListener('click', (event) => {
    if (!adminDropdown || adminDropdown.classList.contains('hidden')) return;

    if (!adminDropdown.contains(event.target) && !adminMenuButton?.contains(event.target)) {
        closeAdminDropdown();
    }
});

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        closeAdminDropdown();
        closeSidebar();
    }
});

/* ---- Reset on resize ---- */

window.addEventListener('resize', () => {
    if (isDesktop()) {
        closeSidebar();
    }
});