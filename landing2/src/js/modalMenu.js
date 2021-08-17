const modalMenu = document.getElementById("modalMenu");
const menuOpenBtn = document.getElementById("menuHamburgerButton");
const menuCloseBtn = document.getElementsByClassName("modal-close")[0];

const modalSearch = document.getElementById("modalSearch");
const searchOpenBtn = document.getElementById("search-open");
const searchCloseBtn = document.getElementsByClassName("search-close")[0];

menuOpenBtn.onclick = function() {
  modalMenu.style.display = "block";
}

menuCloseBtn.onclick = function() {
  modalMenu.style.display = "none";
}

searchOpenBtn.onclick = function() {
  modalSearch.style.display = "block";
}

searchCloseBtn.onclick = function() {
  modalSearch.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modalSearch) {
    modalSearch.style.display = "none";
  }
}
