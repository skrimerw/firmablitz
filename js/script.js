const burger = document.querySelector(".header__burger");
const mobileNav = document.querySelector(".mobile-nav");
const timeInput = document.getElementById("time-input");
const dateInput = document.getElementById("date-input");

function closeMobileNav(e) {
  if (
    e.target.closest(".mobile-nav__links li") ||
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

if (timeInput) {
  const timeMask = new IMask(timeInput, {
    mask: "HH:mm",
    blocks: {
      HH: {
        mask: IMask.MaskedRange,
        from: 0,
        to: 23,
        maxLenght: 2,
      },
      mm: {
        mask: IMask.MaskedRange,
        from: 0,
        to: 59,
        maxLenght: 2,
      },
    },
    format: (time) => {
      let hours = time.split(":")[0];
      let minutes = time.split(":")[1];

      if (hours < 10) hours = "0" + hours;
      if (minutes < 10) minutes = "0" + minutes;

      return [hours, minutes].join(":");
    },
  });

  timeInput.addEventListener("focus", () => {
    timeMask.updateOptions({
      lazy: false,
    });
  });

  timeInput.addEventListener("blur", () => {
    if (timeMask.value === "__:__")
      timeMask.updateOptions({
        lazy: true,
      });
  });
}

if (dateInput) {
  const dateMask = new IMask(dateInput, {
    mask: "dd/mm/YYYY",
    blocks: {
      dd: {
        mask: IMask.MaskedRange,
        from: 1,
        to: 31,
        maxLenght: 2,
      },
      mm: {
        mask: IMask.MaskedRange,
        from: 1,
        to: 12,
        maxLenght: 2,
      },
      YYYY: {
        mask: IMask.MaskedRange,
        from: 1900,
        to: 9999,
        maxLenght: 4,
      },
    },
    format: (time) => {
      let hours = time.split(":")[0];
      let minutes = time.split(":")[1];

      if (hours < 10) hours = "0" + hours;
      if (minutes < 10) minutes = "0" + minutes;

      return [hours, minutes].join(":");
    },
  });

  dateInput.addEventListener("focus", () => {
    dateMask.updateOptions({
      lazy: false,
    });
  });

  dateInput.addEventListener("blur", () => {
    if (dateMask.value === "__/__/____")
      dateMask.updateOptions({
        lazy: true,
      });
  });
}
