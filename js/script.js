// Theme Swap
document.addEventListener("DOMContentLoaded", function () {
    const selector = document.getElementById('theme-selector');
    const body = document.body;

    function updateTheme(theme) {
        body.setAttribute('data-theme', theme.toLowerCase());
    }

    // Initialisation
    updateTheme(selector.value);

    selector.addEventListener('change', function () {
        updateTheme(this.value);
    });
});