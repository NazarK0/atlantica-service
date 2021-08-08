const modal = document.getElementById("modalMenu");
const btn = document.getElementById("menuHamburgerButton");
const closeBtn = document.getElementsByClassName("modal-close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}

closeBtn.onclick = function() {
  modal.style.display = "none";
}
