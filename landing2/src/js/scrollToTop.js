const scrollToTopBtn = document.querySelector(".scroll-to-top");

function handleScroll() {
  if ((document.documentElement.scrollTop > document.documentElement.clientHeight )) {
    scrollToTopBtn.style.display = "block";
  } else {
    scrollToTopBtn.style.display = "none";
  }
}

document.addEventListener("scroll", handleScroll);

function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
}

scrollToTopBtn.addEventListener("click", scrollToTop);
