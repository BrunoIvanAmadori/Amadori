import { setIconScrollPosition } from "../setIconScrollPosition.js";
import { bi_animation } from "../timelines/page-business-intelligence.js";
import SharedMobile from "./_shared-mobile.js";
import { throttle } from "../throttle.js";
import "../../scss/page-business-intelligence-mobile.scss";
import { addAnimationTrigger } from "../addAnimationTrigger";

const animationContainer = document.querySelector(".hero");

addAnimationTrigger(animationContainer, bi_animation);
