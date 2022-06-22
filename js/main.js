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
function projects() {
  const element = document.getElementById("project");
  element.scrollIntoView();
}
function contact() {
  const element = document.getElementById("contact");
  element.scrollIntoView();
}

// Swiper Slider - - - - -
var swiper = new Swiper(".mySwiper", {
  // Default parameters
  slidesPerView: 1,
  spaceBetween: 10,
  // Responsive breakpoints
  breakpoints: {
    200: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    1024: {
      slidesPerView: 3,
      slidesPerGroup: 6,
      slidesPerColumn: 2,
      spaceBetween: 0,
      slidesPerColumnFill: "row",
    },
  },
  // navigation click
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  // work with keyboard
  keyboard: {
    enabled: true,
    onlyInViewport: false,
  },
  // loop
  loop: true,
  autoplay: {
    delay: 10500,
    disableOnInteraction: false,
  },
});

// Skills link Alert
function myFunction() {
  alert("Next skill coming soon...🔥");
}

// Loading page animation
// window.onload = function () {
//   document.querySelector(".preloader").style.display = "none";
// };