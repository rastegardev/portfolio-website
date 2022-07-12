// Mobile navbar toggler - - - - -
const toggler = document.getElementById("toggle");
const sidebar = document.getElementById("sidebar");

toggle.addEventListener("click", (e) => {
  toggle.classList.toggle("active");
  sidebar.classList.toggle("active");
});

// navbar list
function more() {
  const element = document.getElementById("more");
  element.scrollIntoView();
}
function aboutme() {
  const element = document.getElementById("aboutme");
  element.scrollIntoView();
}
function skills() {
  const element = document.getElementById("skills");
  element.scrollIntoView();
}
function contact() {
  const element = document.getElementById("contact");
  element.scrollIntoView();
}

// Skills link Alert
function myFunction() {
  alert("Next skill coming soon...🔥");
}
