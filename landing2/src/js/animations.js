const menuItems = document.querySelectorAll('.block.menu .menu>.menu-item');

menuItems.forEach(item => {
  item.addEventListener('mouseover', () => {
    const submenu = item.querySelector('.dropdown-content')
    submenu.classList.add('animate__fadeInUp');
  });
  item.addEventListener('mouseleave', () => {
    const submenu = item.querySelector('.dropdown-content')
    submenu.classList.remove('animate__fadeInUp');
  });
})