// function to set a given theme/color-scheme

function setTheme(theme) {
  localStorage.setItem("theme", theme);
  document.documentElement.className = theme;
}
// function to toggle between light and dark theme
function toggleTheme() {
  if (localStorage.getItem("theme") === "sec") {
    setTheme("pry");
  } else {
    setTheme("sec");
  }
}
// Immediately invoked function to set the theme on initial load
(function () {
  if (localStorage.getItem("theme") === "sec") {
    setTheme("sec");
  } else {
    setTheme("pry");
  }
})();
