const menuItems = document.querySelectorAll('.block.menu .menu>.menu-item');
const menuHeader = document.querySelector('.block.logo.accent-with-hover')

menuItems.forEach(item => {
  item.addEventListener('mouseover', () => {
    const submenu = item.querySelector('.dropdown-content')
    submenu?.classList.add('animate__fadeInUp');
    
  });
  item.addEventListener('mouseleave', () => {
    const submenu = item.querySelector('.dropdown-content')
    submenu?.classList.remove('animate__fadeInUp');
  });
});

menuHeader.addEventListener('mouseover', ()=> {
  const img = menuHeader.querySelector('img');
  img.src = '../assets/images/logo/logo_full_color.png'
})
menuHeader.addEventListener('mouseleave', ()=> {
  const img = menuHeader.querySelector('img');
  img.src = '../assets/images/logo/logo_full_black.png'
})
