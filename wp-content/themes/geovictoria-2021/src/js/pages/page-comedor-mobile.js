import {
  comedor_animation_step1,
  comedor_animation_step2,
  comedor_animation_step3,
} from "../timelines/page-comedor-mobile.js";
import "../../scss/page-comedor-mobile.scss";
import SharedMobile from "./_shared-mobile.js";
import { addAnimationTrigger } from "../addAnimationTrigger";

const comedor_container_step1 = document.querySelector(
  ".step-1.animation-comedor"
);
const comedor_container_step2 = document.querySelector(
  ".step-2.animation-comedor"
);
const comedor_container_step3 = document.querySelector(
  ".step-3.animation-comedor"
);

addAnimationTrigger(comedor_container_step1, comedor_animation_step1);
addAnimationTrigger(comedor_container_step2, comedor_animation_step2);
addAnimationTrigger(comedor_container_step3, comedor_animation_step3);
