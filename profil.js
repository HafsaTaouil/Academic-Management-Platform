function toggleMenu(event) {
  const burger = document.querySelector('.burger');
  const menuContent = document.querySelector('#menu-content');

  burger.classList.toggle('active');
  menuContent.classList.toggle('active');

  // Arrêter la propagation de l'événement
  event.stopPropagation();
}

// Ajouter l'événement de clic sur l'icône de menu
const menuIcon = document.querySelector('#burger-icon');
menuIcon.addEventListener('click', toggleMenu);
