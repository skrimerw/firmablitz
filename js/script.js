const burger = document.querySelector(".header__burger");
const mobileNav = document.querySelector(".mobile-nav");

function closeMobileNav(e) {
  if (
    e.target.closest(".mobile-nav__item") ||
    e.target.closest(".mobile-nav__cross") ||
    e.target.classList.contains("mobile-nav")
  ) {
    mobileNav.classList.remove("mobile-nav--show");
  }
}

burger.addEventListener("click", () => {
  mobileNav.classList.add("mobile-nav--show");
});

document.body.addEventListener("click", (e) => closeMobileNav(e));
