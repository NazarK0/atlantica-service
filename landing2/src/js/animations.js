const menuItems = document.querySelectorAll('.block.menu .menu>.menu-item');
const statisticProjects = document.getElementById('stat-projects');
const statisticBranches = document.getElementById('stat-branches');
const statisticClients = document.getElementById('stat-clients');
const statisticEmploees = document.getElementById('stat-emploees');


menuItems.forEach(item => {
  item.addEventListener('mouseover', () => {
    const submenu = item.querySelector('.dropdown-content')
    submenu?.classList.add('animate__fadeInUp');
    
  });
  item.addEventListener('mouseleave', () => {
    const submenu = item.querySelector('.dropdown-content')
    submenu?.classList.remove('animate__fadeInUp');
  });
})

animateNumber(statisticProjects, 0, statisticProjects.innerText, 2000);
animateNumber(statisticBranches, 0, statisticBranches.innerText, 2000);
animateNumber(statisticClients, 0, statisticClients.innerText, 2000);
animateNumber(statisticEmploees, 0, statisticEmploees.innerText, 2000);