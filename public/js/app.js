let menu = document.getElementById("menu");
let nav = document.getElementById("nav");
let list = document.getElementById("list");
let navbar = document.getElementById("navbar");
let navOffset = document.getElementById("nav-padding-offset");
let navHr = document.getElementById("nav-hr");

let sticky = nav.offsetTop;

menu.addEventListener("click", function () {
  list.classList.toggle("active");
  nav.classList.toggle("active");
  menu.classList.toggle("opened");
});

function responsiveNav() {
  if (window.screen.width > 768) {
    list.classList.remove("active");
    nav.classList.remove("active");
    menu.classList.remove("opened");
  }
}

function stickyNav() {
  if (window.pageYOffset > sticky) {
    navbar.classList.add("sticky");
    navOffset.classList.add("active");
    navHr.classList.add("hide");
  } else {
    navbar.classList.remove("sticky");
    navOffset.classList.remove("active");
    navHr.classList.remove("hide");
  }
}

window.onscroll = function () {
  stickyNav();
};

window.onresize = function () {
  responsiveNav();
};
