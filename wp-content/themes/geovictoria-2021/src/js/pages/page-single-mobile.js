import Shared from "./_shared-mobile.js";

function initSocialShareButtons() {
  var text = encodeURIComponent(
    document.querySelector(".entry-title").innerHTML.split(" ", 10).join(" ")
  );
  var url = window.location.href;
  var user_id = "GeoVictoriaCL";
  var hash_tags = "#YoTeAyudo";
  var params = "menubar=no,toolbar=no,status=no,width=570,height=570"; // for window

  var facebook = document.querySelector(".share-icon__btn--fb");
  var twitter = document.querySelector(".share-icon__btn--tw");
  var linkedin = document.querySelector(".share-icon__btn--in");

  facebook.addEventListener("click", function (ev) {
    let shareUrl = `http://www.facebook.com/sharer/sharer.php?u=${url}`;
    window.open(shareUrl, "NewWindow", params);
  });

  twitter.addEventListener("click", function (ev) {
    let shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${text}&via=${user_id}&hashtags=${hash_tags}`;
    window.open(shareUrl, "NewWindow", params);
  });

  linkedin.addEventListener("click", function (ev) {
    let shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;
    window.open(shareUrl, "NewWindow", params);
  });
}

function initReadingProgressBar() {
  const body = document.body;
  const html = document.documentElement;

  const progressBar = document.querySelector(".readingProgressbar");
  const height = body.offsetHeight - document.documentElement.clientHeight;
  const maxValue = progressBar.getAttribute("max");

  progressBar.setAttribute("value", 0);

  window.addEventListener("scroll", function (e) {
    let currentValue = (window.scrollY * maxValue) / height;
    progressBar.setAttribute("value", currentValue);
  });
}

window.onload = initReadingProgressBar;
initSocialShareButtons();
