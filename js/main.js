// Trigger events on page load
document.addEventListener(
  "DOMContentLoaded",
  function () {
    // trigger

    const getRandom = (min, max) =>
      Math.floor(Math.random() * (max - min + 1) + min);

    const circles = document.querySelectorAll(".animation-circles li");
    circles.forEach((item, index) => {
      item.style.right = getRandom(30, 30 - 50) + "vh";
      item.style.bottom = getRandom(40, 40 - 30) + "vh";
    });

    setInterval(() => {
      circles.forEach((item, index) => {
        item.style.right = getRandom(30, 30 - 50) + "vh";
        item.style.bottom = getRandom(40, 40 - 30) + "vh";
      });
    }, 10000);
  },
  false
);
