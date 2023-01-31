const showOnPx = 100;
const backToTopButton = document.querySelector(".back-home");

const scrollContainer = () => {
  return document.documentElement || document.body;
};

document.addEventListener("scroll", () => {
  if (scrollContainer().scrollTop > showOnPx) {
    backToTopButton.classList.remove("top");
  } else {
    backToTopButton.classList.add("top");
  }
});

var navLinks = document.getElementById("nav-links");

function showMenu() {
  // navLinks.style.right = "0";
  navLinks.style.display = "block";
}
function hideMenu() {
  //navLinks.style.right = "-200px";
  navLinks.style.display = "none";
}
