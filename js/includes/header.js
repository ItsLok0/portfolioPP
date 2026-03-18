// Menu burger
document.addEventListener('DOMContentLoaded', () => {
  const burgerButton = document.getElementById('burger');
  const mainMenu = document.getElementById('main-menu');
  const imgBtn = document.getElementById('imgBtn');

  // Fermer le menu
  const closeMenu = () => {
    mainMenu.classList.remove('open');
    burgerButton.setAttribute('aria-expanded', 'false');
    burgerButton.setAttribute('aria-label', 'Afficher le menu');
    imgBtn.src = "img/menu-btn.svg";

    // Remettre focus sur btn burger
    burgerButton.focus();

    // Supprimer gestionnaire Escape
    document.removeEventListener('keydown', handleEscape);
  };

  const handleEscape = (e) => {
    if (e.key === 'Escape' || e.key === 'Esc') {
      closeMenu();
    }
  };

  if (burgerButton && mainMenu && imgBtn) {
    burgerButton.addEventListener('click', () => {
      const isOpen = mainMenu.classList.toggle('open');
      burgerButton.setAttribute('aria-expanded', isOpen);

      if (isOpen) {
        burgerButton.setAttribute('aria-label', 'Masquer le menu');
        imgBtn.src = "img/cross-btn.svg";

        // Ajouter gestion Escape
        document.addEventListener('keydown', handleEscape);
      } else {
        closeMenu();
      }
    });
  } else {
    console.error('Le bouton burger est introuvable.');
  }
  // Changement class="active" menu
  const links = document.querySelectorAll('#main-menu a');

  const currentPage = window.location.pathname.split('/').pop();

  links.forEach(link => {
    const linkHref = link.getAttribute('href').split('/').pop();

    // Supprimer classe active actuelle
    link.classList.remove('active');

    // Marquer lien page courante
    if (linkHref === currentPage || (currentPage === '' && linkHref.includes('index'))) {
      link.classList.add('active');
    }
  });
});