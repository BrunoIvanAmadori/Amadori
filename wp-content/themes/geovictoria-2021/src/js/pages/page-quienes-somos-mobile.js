import { fslightbox } from "fslightbox";
import SharedMobile from "./_shared-mobile.js";
import "../../scss/page-quienes-somos.scss";
import Splide from "@splidejs/splide";
import "@splidejs/splide/dist/css/splide.min.css";
import { addAnimationTrigger } from "../addAnimationTrigger";
import { enableAnimeSelectors } from "../timelines/general";
import {
  progressAnimation,
  // progressMobileAnimation_step_1,
  progressMobileAnimation_step_2,
  progressMobileAnimation_step_3,
  progressMobileAnimation_step_4,
  progressMobileAnimation_step_5,
} from "../timelines/page-quienes-somos";

new Splide(".splide", {
  perPage: 3,
  breakpoints: {
    1100: {
      perPage: 3,
    },
    767: {
      perPage: 2,
    },
    564: {
      perPage: 1,
    },
  },
  lazyLoad: true,
  perMove: 1,
  pagination: false,
  gap: 30,
  height: 245,
}).mount();

let progressComponent = document.querySelector(".progress__section");

addAnimationTrigger(progressComponent, progressAnimation);

// progressMobileComponent

// let progressMobileComponent_step_1 = document.querySelector(
//   ".progressMobile__bg.step-1"
// );
let progressMobileComponent_step_2 = document.querySelector(
  ".progressMobile__bg.step-2"
);
let progressMobileComponent_step_3 = document.querySelector(
  ".progressMobile__bg.step-3"
);
let progressMobileComponent_step_4 = document.querySelector(
  ".progressMobile__bg.step-4"
);
let progressMobileComponent_step_5 = document.querySelector(
  ".progressMobile__bg.step-5"
);

// addAnimationTrigger(
//   progressMobileComponent_step_1,
//   progressMobileAnimation_step_1
// );
addAnimationTrigger(
  progressMobileComponent_step_2,
  progressMobileAnimation_step_2
);
addAnimationTrigger(
  progressMobileComponent_step_3,
  progressMobileAnimation_step_3
);
addAnimationTrigger(
  progressMobileComponent_step_4,
  progressMobileAnimation_step_4
);
addAnimationTrigger(
  progressMobileComponent_step_5,
  progressMobileAnimation_step_5
);

enableAnimeSelectors();
