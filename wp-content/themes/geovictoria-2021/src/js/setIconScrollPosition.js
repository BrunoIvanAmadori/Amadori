const show = anime.timeline({
  targets: ".icon-scroll",
  duration: 500,
  easing: "easeInOutSine",
});

const hide = anime.timeline({
  targets: ".icon-scroll",
  easing: "easeInOutSine",
  duration: 500,
});

show.add({
  opacity: [0, 1],
});

hide.add({
  opacity: [1, 0],
});

let isScrollIconVisible = false;

function setIconScrollPosition(action) {
  if (action == "show" && isScrollIconVisible == false) {
    isScrollIconVisible = true;
    show.play();
  } else if (action == "hide" && isScrollIconVisible == true) {
    isScrollIconVisible = false;
    hide.play();
  }
}

export { isScrollIconVisible, setIconScrollPosition };
