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

// rolling text effect
let elements = document.querySelectorAll(".rolling-button");

elements.forEach((element) => {
  let innerText = element.innerText;
  element.innerHTML = "";

  let textContainer = document.createElement("div");
  textContainer.classList.add("block");

  for (let letter of innerText) {
    let span = document.createElement("span");
    span.innerText = letter.trim() === "" ? "\xa0" : letter;
    span.classList.add("letter");
    textContainer.appendChild(span);
  }

  element.appendChild(textContainer);
  element.appendChild(textContainer.cloneNode(true));
});
