import {
  acceso_animation_step1,
  acceso_animation_step2,
  acceso_animation_step3,
} from "../timelines/page-acceso-mobile.js";
import "../../scss/page-acceso-mobile.scss";
import SharedMobile from "./_shared-mobile.js";
import { addAnimationTrigger } from "../addAnimationTrigger";

const acceso_container_step1 = document.querySelector(
  ".step-1.animation-acceso"
);
const acceso_container_step2 = document.querySelector(
  ".step-2.animation-acceso"
);
const acceso_container_step3 = document.querySelector(
  ".step-3.animation-acceso"
);

addAnimationTrigger(acceso_container_step1, acceso_animation_step1);
addAnimationTrigger(acceso_container_step2, acceso_animation_step2);
addAnimationTrigger(acceso_container_step3, acceso_animation_step3);
