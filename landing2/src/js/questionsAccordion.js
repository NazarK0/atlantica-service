const acc = document.getElementsByClassName("accordion-head");
let i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    closePanels(this);
    this.classList.toggle("active");
    const panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
      panel.style.display = "none";
      console.log('active has maxHeight')
    } else {
      panel.style.display = "block";
      panel.style.maxHeight = panel.scrollHeight + "px";
      console.log('active hasn`t maxHeight')
    }
  });
}

function closePanels(exceptThis) {
  console.log('close Panels')
  for (i = 0; i < acc.length; i++) {
    if (acc[i] !== exceptThis) {
      acc[i].classList.remove("active");
      const panel = acc[i].nextElementSibling;

      panel.style.maxHeight = null;
      panel.style.display = "none";
    }
    
  }
}
