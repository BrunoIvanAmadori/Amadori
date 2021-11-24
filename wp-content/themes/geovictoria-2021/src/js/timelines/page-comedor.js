import {
  pop,
  slideX,
  flyOutX,
  scale,
  shake,
  flyOut,
  translate,
  shine,
  fadeOut,
  fadeIn,
  arrowLoop,
  spinLoop,
  ripple,
  meterFillLeft,
  meterFillRight,
  updateNum,
} from "./general.js";

import { dynamic } from "../pages/page-comedor";

const comedor_animation_step_1 = anime.timeline({
  autoplay: false,
});

const comedor_animation_step_2 = anime.timeline({
  autoplay: false,
});

const comedor_animation_step_3 = anime.timeline({
  autoplay: false,
});

const transition_animation_step_1 = anime.timeline({
  autoplay: false,
});

var animation1;
var animation2;
var animation3;

transition_animation_step_1
  .add(
    {
      targets: ".step-1__text",
      translateX: [0, -300],
      opacity: [1, 0],
      easing: "easeInOutSine",
      duration: 1000,
    },
    "+=500"
  )
  .add(
    {
      targets: ".step-1__graphics",
      translateX: [0, "100%"],
      easing: "easeInOutSine",
      duration: 1000,
    },
    "-=750"
  )
  .add({
    targets: ".step-1__graphics",
    scale: [1, 0],
    duration: 500,
    easing: "easeInOutSine",
    changeBegin: function (anim) {
      if (animation1 == 0) {
        comedor_animation_step_1.restart();
      }

      animation1 = 1;
      animation2 = 0;
      animation3 = 0;
    },
  })
  // empieza el step 2
  .add(
    {
      targets: ".step-2__graphics",
      scale: [0, 1],
      duration: 500,
      easing: "easeInOutSine",
      changeBegin: function (anim) {
        console.log("changeBegin");
        if (animation2 == 0) {
          comedor_animation_step_2.restart();
        }
        animation1 = 0;
        animation2 = 1;
        animation3 = 0;
      },
    },
    "-=200"
  )
  .add(
    {
      targets: ".step-2__text",
      translateX: ["50%", 0],
      opacity: [0, 1],
      easing: "easeInOutSine",
      duration: 1000,
    },
    "-=1500"
  )

  .add(
    {
      targets: ".step-2__text",
      translateX: [0, "50%"],
      opacity: [1, 0],
      easing: "easeInOutSine",
      duration: 1000,
    },
    "+=500"
  )
  .add(
    {
      targets: ".step-2__graphics",
      translateX: [0, "-100%"],
      easing: "easeInOutSine",
      duration: 1000,
    },
    "-=1000"
  )
  .add({
    targets: ".scale-fix",
    scale: [1, 0],
    duration: 500,
    easing: "easeInOutSine",
    changeBegin: function (anim) {
      if (animation2 == 0) {
        comedor_animation_step_2.restart();
      }

      animation1 = 0;
      animation2 = 1;
      animation3 = 0;
    },
  }) // empieza el step 3
  .add({
    targets: ".step-3__graphics",
    scale: [0, 1],
    duration: 500,
    changeBegin: function (anim) {
      console.log("changeBegin");
      if (animation3 == 0) {
        comedor_animation_step_3.restart();
      }
      animation1 = 0;
      animation2 = 0;
      animation3 = 1;
    },
  })
  .add(
    {
      targets: ".step-3__text",
      translateX: ["-50%", 0],
      opacity: [0, 1],
      easing: "easeInOutSine",
      duration: 1000,
    },
    "-=1500"
  );

const step1 = [
  {
    parameters: pop(".step-1__entry-type"),
  },
  {
    parameters: {
      targets: ".step-1__entry-type .step-1__entry-selector",
      keyframes: [
        { translateY: 46 },
        { opacity: [0, 1] },
        { translateY: 95 },
        { translateY: 150 },
        { translateY: 202 },
      ],
      duration: 1700,
      easing: "easeInOutElastic(1, .8)",
    },
    offset: "-=1500",
  },
  {
    parameters: ripple(".step-1__ripple", 195, 220),
    offset: "+=100",
  },
  {
    parameters: fadeOut([
      ".step-1__entry-type .step-1__entry-selector",
      ".step-1__entry-type",
    ]),
    offset: "-=300",
  },
  {
    parameters: pop(".step-1__box-container"),
    offset: "-=700",
  },
  {
    parameters: slideX(".step-1__box-container .step-1__box-pass", -120),
    offset: "-=500",
  },
  {
    parameters: {
      targets: ".step-1__box-code span",
      opacity: [0, 1],
      delay: anime.stagger(200),
      duration: 1250,
    },
  },
  {
    parameters: ripple(".step-1__ripple", 83, 140),
    offset: "-=2250",
  },
  {
    parameters: ripple(".step-1__ripple", 131, 140),
    offset: "-=2100",
  },
  {
    parameters: ripple(".step-1__ripple", 178, 140),
    offset: "-=1900",
  },
  {
    parameters: ripple(".step-1__ripple", 83, 170),
    offset: "-=1700",
  },
  {
    parameters: ripple(".step-1__ripple", 131, 170),
    offset: "-=1500",
  },
  {
    parameters: {
      targets: ".step-1__ticket",
      keyframes: [
        { opacity: [0, 1] },
        { translateY: [0, 150] },
        { translateY: [150, 255], easing: "easeOutSine" },
        { zIndex: [0, 3], duration: 0 },
        { translateY: [255, -50], easing: "easeInOutSine" },
      ],
      duration: 1500,
    },
    offset: "-=1000",
  },
];

step1.forEach((anim) => {
  if (anim.offset) {
    return comedor_animation_step_1.add(anim.parameters, anim.offset);
  } else {
    return comedor_animation_step_1.add(anim.parameters);
  }
});

// FIN DEL STEP 1
const step2 = [
  {
    parameters: {
      targets: [
        ".step-2__loading",
        ".step-2__cloud",
        ".step-2__cloud-aura",
        ".step-2__ticket--size-2",
        ".step-2__ticket--size-3",
        ".step-2__ticket--size-4",
      ],
      scale: [0, 1],
      duration: 500,
      delay: anime.stagger(200),
    },
  },
  {
    parameters: {
      targets: ".step-2__ticket--size-1",
      opacity: [0, 1],
      translateX: 2000,
      easing: "easeInOutCubic",
    },
    offset: "-=500",
  },
  {
    parameters: spinLoop(".step-2__loading"),
    offset: 0,
  },
  {
    parameters: translate(".step-2__ticket--size-1", 2120, 100),
    offset: "-=3100",
  },
  {
    parameters: shake(".step-2__cloud", 5),
    offset: "-=2300",
  },
  {
    parameters: translate(".step-2__ticket--size-2", 155, -210),
    offset: "-=2700",
  },
  {
    parameters: shake(".step-2__cloud", 5),
    offset: "-=1900",
  },
  {
    parameters: translate(".step-2__ticket--size-3", -430, -150),
    offset: "-=2300",
  },
  {
    parameters: shake(".step-2__cloud", 5),
    offset: "-=1500",
  },
  {
    parameters: translate(".step-2__ticket--size-4", -496, 200),
    offset: "-=1900",
  },
  {
    parameters: shake(".step-2__cloud", 5),
    offset: "-=1100",
  },
  {
    parameters: fadeOut(".step-2__loading"),
    offset: "-=500",
  },
  {
    parameters: arrowLoop(".step-2__arrow-up"),
    offset: "-=500",
  },
  {
    parameters: {
      targets: ".step-2__cloud-aura",
      duration: 500,
      opacity: [0.5, 0],
      scale: [1, 1.5],
      easing: "easeInOutSine",
    },
    offset: "-=1500",
  },
  {
    parameters: {
      targets: ".step-2__cloud-aura",
      duration: 500,
      opacity: [0.5, 0],
      scale: [1, 1.3],
      easing: "easeInOutSine",
    },
    offset: "-=1000",
  },
  {
    parameters: {
      targets: ".step-2__cloud-aura",
      duration: 500,
      opacity: [0.5, 0],
      scale: [1, 1.1],
      easing: "easeInOutSine",
    },
    offset: "-=500",
  },
  {
    parameters: shine(".step-2__cloud"),
    offset: "-=2000",
  },
  {
    parameters: shake(".step-2__cloud", 1),
    offset: "-=1000",
  },
  {
    parameters: shake(".step-2__cloud", 1),
    offset: "-=1500",
  },
  {
    parameters: scale(".step-2__cloud", 1, 0),
    offset: "-=500",
  },
  {
    parameters: scale(".step-2__bubble", 0, 1),
    offset: "-=1000",
  },
  {
    parameters: scale(".step-2__check", 0, 1),
    offset: "-=1000",
  },
];

step2.forEach((anim) => {
  if (anim.offset) {
    return comedor_animation_step_2.add(anim.parameters, anim.offset);
  } else {
    return comedor_animation_step_2.add(anim.parameters);
  }
});

// FIN DEL STEP 2
const step3 = [
  {
    parameters: pop(".step-3__platform", 0, 1),
    offset: "0",
  },
  {
    parameters: scale(".step-3__report-action", 0, 1),
    offset: "-=500",
  },
  {
    parameters: ripple(".step-3__ripple", 410, -274),
    offset: "-=700",
  },
  {
    parameters: slideX([".step-3__platform", ".step-3__report-action"], -1000),
    offset: "-=300",
  },
  {
    parameters: scale(".step-3__graphic-container", 0, 1),
    offset: "-=500",
  },
  {
    parameters: {
      targets: ".step-3__graphic-container .step-3__bar-group",
      scaleY: [0, 1],
      easing: "easeOutSine",
    },
    offset: "-=300",
  },
  {
    parameters: updateNum(
      ".step-3__graphic-container .step-3__data-1",
      "0",
      "700"
    ),
    offset: "-=1000",
  },
  {
    parameters: updateNum(
      ".step-3__graphic-container .step-3__data-2",
      "0",
      "700"
    ),
    offset: "-=500",
  },
  {
    parameters: scale(".step-3__rations-container", 0, 1),
    offset: "-=800",
  },
  {
    parameters: updateNum(
      ".step-3__rations-container .step-3__data-1",
      "0",
      "700"
    ),
    offset: "-=1000",
  },
  {
    parameters: updateNum(
      ".step-3__rations-container .step-3__data-2",
      "0",
      "500"
    ),
    offset: "-=1000",
  },
  {
    parameters: updateNum(
      ".step-3__rations-container .step-3__data-3",
      "0",
      "505"
    ),
    offset: "-=1000",
  },
  {
    parameters: updateNum(
      ".step-3__rations-container .step-3__data-4",
      "0",
      "450"
    ),
    offset: "-=1000",
  },
  {
    parameters: scale(".step-3__report-container", 0, 1),
    offset: "-=500",
  },
  {
    parameters: updateNum(
      ".step-3__report-container .step-3__data-1",
      "0",
      "23"
    ),
    offset: "-=1000",
  },
  {
    parameters: updateNum(
      ".step-3__report-container .step-3__data-2",
      "0",
      "50"
    ),
    offset: "-=1000",
  },
  {
    parameters: updateNum(
      ".step-3__report-container .step-3__data-3",
      "0",
      "20"
    ),
    offset: "-=1000",
  },
];

step3.forEach((anim) => {
  if (anim.offset) {
    return comedor_animation_step_3.add(anim.parameters, anim.offset);
  } else {
    return comedor_animation_step_3.add(anim.parameters);
  }
});

export {
  comedor_animation_step_1,
  comedor_animation_step_2,
  comedor_animation_step_3,
  transition_animation_step_1,
};
