import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.data('siteNavigation', () => ({
    mobileMenuOpen: false,
    toggleMobileMenu() {
        this.mobileMenuOpen = !this.mobileMenuOpen;
    },
    closeMobileMenu() {
        this.mobileMenuOpen = false;
    }
}));
Alpine.data('themeSwitcher', () => ({
    darkMode: false,
    init() {
        let savedTheme = null;
        try {
            savedTheme = localStorage.getItem('aisnu-theme');
        } catch { }
        if (savedTheme === 'dark') {
            this.darkMode = true;
        } else if (savedTheme === 'light') {
            this.darkMode = false;
        } else {
            this.darkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
        }
        this.applyTheme();
    },
    applyTheme() {
        document.documentElement.classList.toggle('dark', this.darkMode);
        document.documentElement.style.colorScheme = this.darkMode ? 'dark' : 'light';
    },
    toggleTheme() {
        this.darkMode = !this.darkMode;
        this.applyTheme();
        try {
            localStorage.setItem('aisnu-theme', this.darkMode ? 'dark' : 'light');
        } catch { }
    }
}));
Alpine.data('dismissible', () => ({
    visible: true,
    dismiss() {
        this.visible = false;
    }
}));
Alpine.start();
