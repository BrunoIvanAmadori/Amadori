import Shared from "./_shared-mobile.js";
window.onload = () => {
  const body = document.body;
  const html = document.documentElement;

  const progressBar = document.querySelector(".readingProgressbar");
  const height = body.offsetHeight - document.documentElement.clientHeight;
  const maxValue = progressBar.getAttribute("max");

  progressBar.setAttribute("value", 0);

  window.addEventListener("scroll", function (e) {
    // console.log(window.scrollY);
    let currentValue = (window.scrollY * maxValue) / height;
    // console.log(currentValue);
    progressBar.setAttribute("value", currentValue);
  });
};
