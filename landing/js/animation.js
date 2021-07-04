var serviceTiles = document.querySelectorAll('section.services .service-tile');

console.log(serviceTiles.length, 'tiles')
serviceTiles.forEach((tile) => {
    tile.addEventListener('mouseover', () => animateHandlerConstructor(tile));
    tile.addEventListener('mouseleave', () => animateHandlerDestructor(tile));

});

function animateHandlerConstructor(element) {
    element.classList.add('animate__animated', 'animate__flip');
}

function animateHandlerDestructor(element) {
    element.classList.remove('animate__animated', 'animate__flip');
}