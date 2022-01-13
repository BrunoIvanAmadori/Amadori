export function initAnimationContainerLoading() {
  const animationContainer = document.querySelector(".animation-container");
  const imagesOnContainer = animationContainer.getElementsByTagName("img");

  let imagesLoaded = 0;
  let totalImages = imagesOnContainer.length;

  function imageLoaded() {
    imagesLoaded++;
  }

  function allImagesLoaded() {
    let hiddenElements = document.querySelectorAll(".invisible");
    for (let i = 0; i < hiddenElements.length; i++) {
      hiddenElements[i].classList.remove("invisible");
    }
  }

  for (let img of imagesOnContainer) {
    let newImg = document.createElement("img");

    newImg.addEventListener("load", (ev) => {
      imageLoaded();

      if (imagesLoaded == totalImages) {
        allImagesLoaded();
      }
    });

    let src = img.getAttribute("src");
    newImg.setAttribute("src", src);
  }
}
