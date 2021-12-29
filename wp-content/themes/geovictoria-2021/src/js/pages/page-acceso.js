import { setIconScrollPosition } from "../setIconScrollPosition.js";
import {
  acceso_animation_step_1,
  acceso_animation_step_2,
  acceso_animation_step_3,
  transition_animation_step_1,
} from "../timelines/page-acceso.js";
import Shared from "./_shared.js";
import { throttle } from "../throttle.js";
import "../../scss/page-acceso.scss";
import { addAnimationTrigger } from "../addAnimationTrigger";

let scrollOffset = window.scrollY;

const heroContainer = document.querySelector(".hero");
const animationContainer = document.querySelector(".animation-container");

let heroHeight = heroContainer.offsetHeight + heroContainer.offsetTop;

animationContainer.style.transform = "translate3d(0," + heroHeight + "px , 0)";

const animation_trigger_step_1 = document.querySelector(
  ".animation-acceso.step-1 .step-1__graphics"
);

const animation_trigger_step_2 = document.querySelector(
  ".animation-acceso.step-2 .step-2__graphics"
);

const animation_trigger_step_3 = document.querySelector(
  ".animation-acceso.step-3 .step-3__graphics"
);

window.addEventListener("scroll", function (e) {
  scrollOffset = window.scrollY;

  if ((scrollOffset > heroHeight) & (scrollOffset < 6200)) {
    transition_animation_step_1.seek(-heroHeight + scrollOffset);
    setIconScrollPosition("show");
    animationContainer.style.position = "fixed";
    animationContainer.style.top = "0px";
    animationContainer.style.transform = "translate3d(0, 0, 0)";
    animationContainer.style.left = "0";
    animationContainer.style.right = "0";
  } else if (scrollOffset < heroHeight) {
    transition_animation_step_1.seek(0);
    animationContainer.style.position = "absolute";
    animationContainer.style.transform =
      "translate3d(0," + heroHeight + "px , 0)";
    setIconScrollPosition("hide");
  } else if (scrollOffset > 6200) {
    animationContainer.style.position = "absolute";
    animationContainer.style.transform = "translate3d(0, 6200px, 0)";
    transition_animation_step_1.seek(9999);
    setIconScrollPosition("hide");
  }
});

window.addEventListener("load", (ev) => {
  let hiddenElements = document.querySelectorAll(".invisible");
  for (let i = 0; i < hiddenElements.length; i++) {
    hiddenElements[i].classList.remove("invisible");
  }
});

addAnimationTrigger(animation_trigger_step_1, acceso_animation_step_1);
addAnimationTrigger(animation_trigger_step_2, acceso_animation_step_2);
addAnimationTrigger(animation_trigger_step_3, acceso_animation_step_3);
setIconScrollPosition(scrollOffset);

// const getAnimationSpaceHeight = () => {
//   let el = window.getComputedStyle(document.querySelector(".animation-space"))
//     .height;

//   return el.substring(-1, el.length - 2);
// };
// let animation_space_height = getAnimationSpaceHeight();
