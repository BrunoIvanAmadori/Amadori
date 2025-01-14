import { setIconScrollPosition } from "../setIconScrollPosition.js";
import {
  asistencia_animation_step_1,
  asistencia_animation_step_2,
  asistencia_animation_step_3,
  transition_animation_step_1,
} from "../timelines/page-asistencia.js";
import Shared from "./_shared.js";
import { throttle } from "../throttle.js";
import "../../scss/page-asistencia.scss";
import { addAnimationTrigger } from "../addAnimationTrigger";
import { initAnimationContainerLoading } from "../initAnimationContainerLoading";

let scrollOffset = window.scrollY;

const heroContainer = document.querySelector(".hero");
const animationContainer = document.querySelector(".animation-container");

let heroHeight = heroContainer.offsetHeight + heroContainer.offsetTop;

animationContainer.style.transform = "translate3d(0," + heroHeight + "px , 0)";

const animation_trigger_step_1 = document.querySelector(
  ".animation-asistencia.step-1 .step-1__graphics"
);

const animation_trigger_step_2 = document.querySelector(
  ".animation-asistencia.step-2 .step-2__graphics"
);

const animation_trigger_step_3 = document.querySelector(
  ".animation-asistencia.step-3 .step-3__graphics"
);

window.addEventListener("scroll", function (e) {
  scrollOffset = window.scrollY;

  if ((scrollOffset > heroHeight) & (scrollOffset < 6300)) {
    transition_animation_step_1.seek(-heroHeight + scrollOffset);

    setIconScrollPosition("show");

    animationContainer.style.position = "fixed";
    animationContainer.style.top = "0px";
    animationContainer.style.transform = "translate3d(0, 0, 0)";
    animationContainer.style.left = "0";
    animationContainer.style.right = "0";
  } else if (scrollOffset < heroHeight) {
    setIconScrollPosition("hide");
    transition_animation_step_1.seek(0);
    animationContainer.style.position = "absolute";
    animationContainer.style.transform =
      "translate3d(0," + heroHeight + "px , 0)";
  } else if (scrollOffset > 6300) {
    setIconScrollPosition("hide");
    animationContainer.style.position = "absolute";
    animationContainer.style.transform = "translate3d(0, 6300px, 0)";
    transition_animation_step_1.seek(999999);
  }
});

addAnimationTrigger(animation_trigger_step_1, asistencia_animation_step_1);
addAnimationTrigger(animation_trigger_step_2, asistencia_animation_step_2);
addAnimationTrigger(animation_trigger_step_3, asistencia_animation_step_3);

setIconScrollPosition(scrollOffset);
initAnimationContainerLoading();

// const getAnimationSpaceHeight = () => {
//   let el = window.getComputedStyle(document.querySelector(".animation-space"))
//     .height;

//   return el.substring(-1, el.length - 2);
// };
// let animation_space_height = getAnimationSpaceHeight();
