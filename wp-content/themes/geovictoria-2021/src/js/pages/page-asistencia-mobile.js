import {
  asistencia_animation_step1,
  asistencia_animation_step2,
  asistencia_animation_step3,
} from "../timelines/page-asistencia-mobile.js";
import SharedMobile from "./_shared-mobile.js";
import "../../scss/page-asistencia-mobile.scss";
import { addAnimationTrigger } from "../addAnimationTrigger";

const asistencia_container_step1 = document.querySelector(
  ".step-1.animation-asistencia"
);
const asistencia_container_step2 = document.querySelector(
  ".step-2.animation-asistencia"
);
const asistencia_container_step3 = document.querySelector(
  ".step-3.animation-asistencia"
);

addAnimationTrigger(asistencia_container_step1, asistencia_animation_step1);
addAnimationTrigger(asistencia_container_step2, asistencia_animation_step2);
addAnimationTrigger(asistencia_container_step3, asistencia_animation_step3);
