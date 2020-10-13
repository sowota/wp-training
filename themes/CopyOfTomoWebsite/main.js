const toggler = document.getElementById('nav_toggle');

toggler.addEventListener('click', () => {
  document.body.classList.toggle('nav-open');
});

toggler();