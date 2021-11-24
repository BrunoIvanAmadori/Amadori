import {
  headerAnimation,
  progressMobileAnimation_step_1,
  progressMobileAnimation_step_2,
  progressMobileAnimation_step_3,
  progressMobileAnimation_step_4,
  progressMobileAnimation_step_5,
} from "../timelines/front-page";
import { addAnimationTrigger } from "../addAnimationTrigger";
import { enableAnimeSelectors } from "../timelines/general";
import Webfontloader from "../../../node_modules/webfontloader/webfontloader";
import SharedMobile from "./_shared-mobile.js";

Webfontloader.load({
  google: {
    families: ["Nunito"],
  },
  custom: {
    families: ["Brsonoma"],
    urls: ["/wp-content/themes/geovictoria-2021/dist/fonts/fonts.css"],
  },
  active: function () {
    sessionStorage.fonts = true;
  },
  timeout: 8000,
});
let headerElement = document.querySelector(".animation-home");

addAnimationTrigger(headerElement, headerAnimation);

let progressMobileComponent_step_1 = document.querySelector(
  ".progressMobile__bg.step-1"
);
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

addAnimationTrigger(
  progressMobileComponent_step_1,
  progressMobileAnimation_step_1
);
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
