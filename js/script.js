// Theme Swap
document.addEventListener("DOMContentLoaded", function () {
    const selector = document.getElementById('theme-selector');
    const body = document.body;

    function setCookie(name, value, days) {
        const d = new Date();
        d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000));
        const expires = "expires=" + d.toUTCString();
        document.cookie = `${name}=${value}; ${expires}; path=/`;
    }

    function getCookie(name) {
        const nameEQ = name + "=";
        const ca = document.cookie.split(';');
        for (let c of ca) {
            c = c.trim();
            if (c.indexOf(nameEQ) === 0) {
                return c.substring(nameEQ.length);
            }
        }
        return null;
    }

    function updateTheme(theme) {
        body.setAttribute('data-theme', theme.toLowerCase());
        if (selector) selector.value = theme;
    }

    // Initialisation
    let savedTheme = getCookie('theme') || 'Redbull';
    updateTheme(savedTheme);

    // Gestion du changement de thème
    if (selector) {
        selector.addEventListener('change', function () {
            const newTheme = this.value;
            updateTheme(newTheme);
            setCookie('theme', newTheme, 1);
        });
    }
});