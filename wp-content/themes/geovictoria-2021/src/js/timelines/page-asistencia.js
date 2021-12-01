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

// import { dynamic } from "../pages/page-asistencia";

const asistencia_animation_step_1 = anime.timeline({
  autoplay: false,
});

const asistencia_animation_step_2 = anime.timeline({
  autoplay: false,
});

const asistencia_animation_step_3 = anime.timeline({
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
        asistencia_animation_step_1.restart();
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
          asistencia_animation_step_2.restart();
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
        asistencia_animation_step_2.restart();
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
        asistencia_animation_step_3.restart();
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

const step_1 = [
  {
    parameters: pop(".step-1__entry-type"),
  },
  {
    parameters: {
      targets: ".step-1__entry-selector",
      keyframes: [
        { translateY: 46 },
        { opacity: [0, 1] },
        { translateY: 98 },
        { translateY: 148 },
      ],
      duration: 1700,
      easing: "easeInOutElastic(1, .8)",
    },
    offset: "-=1500",
  },
  {
    parameters: ripple(".step-1__ripple", 195, 130),
    offset: "+=100",
  },
  {
    parameters: fadeOut(".step-1__entry-selector"),
    offset: "-=300",
  },
  {
    parameters: pop(".step-1__app-screen"),
    offset: "-=700",
  },
  {
    parameters: slideX(".step-1__entry-type", -300),
    offset: "-=950",
  },
  {
    parameters: fadeOut(".step-1__entry-type"),
    offset: "-=950",
  },
  {
    parameters: ripple(".step-1__ripple", 157, 230),
    offset: "-=200",
  },
  {
    parameters: slideX(".step-1__phone-camera", -220),
    offset: "-=600",
  },
  {
    parameters: fadeOut(".step-1__app-screen img.screen"),
  },
  {
    parameters: {
      targets: "step-1__bg-curve",
      translateY: -2000,
      opacity: 1,
      duration: 500,
    },
    offset: "-=400",
  },
  {
    parameters: fadeIn(".step-1__biometry"),
    offset: "-=1200",
  },
  {
    parameters: fadeIn(".step-1__biometry-line"),
    offset: "-=1200",
  },
  {
    parameters: {
      targets: ".step-1__biometry-line",
      keyframes: [{ translateY: 0 }, { translateY: -120 }, { translateY: 0 }],
      duration: 1500,
      easing: "easeInOutSine",
    },
    offset: "-=1500",
  },
  {
    parameters: fadeOut(".step-1__biometry-line"),
    offset: "-=500",
  },
  {
    parameters: slideX(".step-1__app-screen", -50),
    offset: "-=500",
  },
  {
    parameters: pop(".step-1__entry-id"),
    offset: "-=700",
  },
];

step_1.forEach((anim) => {
  if (anim.offset) {
    return asistencia_animation_step_1.add(anim.parameters, anim.offset);
  } else {
    return asistencia_animation_step_1.add(anim.parameters);
  }
});

// FIN DEL step_ 1
const step_2 = [
  {
    parameters: {
      targets: [
        ".step-2__loading",
        ".step-2__cloud",
        ".step-2__cloud-aura",
        ".step-2__entry-id--size-2",
        ".step-2__entry-id--size-3",
        ".step-2__entry-id--size-4",
      ],
      scale: [0, 1],
      duration: 500,
      delay: anime.stagger(200),
    },
  },
  {
    parameters: {
      targets: ".step-2__entry-id--size-1",
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
    parameters: translate(".step-2__entry-id--size-1", 2120, 100),
    offset: "-=3100",
  },
  {
    parameters: shake(".step-2__cloud", 5),
    offset: "-=2300",
  },
  {
    parameters: translate(".step-2__entry-id--size-2", 155, -210),
    offset: "-=2700",
  },
  {
    parameters: shake(".step-2__cloud", 5),
    offset: "-=1900",
  },
  {
    parameters: translate(".step-2__entry-id--size-3", -430, -150),
    offset: "-=2300",
  },
  {
    parameters: shake(".step-2__cloud", 5),
    offset: "-=1500",
  },
  {
    parameters: translate(".step-2__entry-id--size-4", -496, 200),
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

step_2.forEach((anim) => {
  if (anim.offset) {
    return asistencia_animation_step_2.add(anim.parameters, anim.offset);
  } else {
    return asistencia_animation_step_2.add(anim.parameters);
  }
});

// FIN DEL step_ 2
const step_3 = [
  {
    parameters: scale(".step-3__report-action", 0, 1),
  },
  {
    parameters: ripple(".step-3__ripple", 410, -278),
    offset: "-=700",
  },
  {
    parameters: slideX(".step-3__platform", -1000),
    offset: "-=300",
  },
  {
    parameters: slideX(".step-3__report-action", -1000),
    offset: "-=500",
  },
  {
    parameters: scale(".step-3__meter-container.ausentismo-total", 0, 0.8),
    offset: "-=600",
  },
  {
    parameters: meterFillLeft(
      ".step-3__meter-container.ausentismo-total .step-3__meter",
      21.7
    ),
    offset: "-=800",
  },
  {
    parameters: updateNum(
      ".step-3__meter-container.ausentismo-total .step-3__meter-num-progress",
      "0%",
      "21.7%"
    ),
    offset: "-=1000",
  },
  {
    parameters: scale(".step-3__meter-container.atrasos", 0, 0.5),
    offset: "-=600",
  },
  {
    parameters: meterFillLeft(
      ".step-3__meter-container.atrasos .step-3__meter",
      21.3
    ),
    offset: "-=800",
  },

  {
    parameters: updateNum(
      ".step-3__meter-container.atrasos .step-3__meter-num-progress",
      "0%",
      "21.3%"
    ),
    offset: "-=1000",
  },
  {
    parameters: updateNum(
      ".step-3__meter-container.atrasos .step-3__meter-left-data--orange",
      "0",
      "20"
    ),
    offset: "-=1000",
  },
  {
    parameters: updateNum(
      ".step-3__meter-container.atrasos .step-3__meter-right-data",
      "0",
      "94"
    ),
    offset: "-=1000",
  },
  {
    parameters: scale(".step-3__meter-container.asistencia-total", 0, 0.3),
    offset: "-=600",
  },
  {
    parameters: meterFillLeft(
      ".step-3__meter-container.asistencia-total .step-3__meter",
      50
    ),
    offset: "-=800",
  },
  {
    parameters: meterFillRight(
      ".step-3__meter-container.asistencia-total .step-3__meter",
      78.3
    ),
  },
  {
    parameters: updateNum(
      ".step-3__meter-container.asistencia-total .step-3__meter-num-progress",
      "0%",
      "78.3%"
    ),
    offset: "-=1200",
  },
  {
    parameters: updateNum(
      ".step-3__meter-container.asistencia-total .step-3__meter-left-data--blue",
      "0",
      "94"
    ),
    offset: "-=800",
  },
  {
    parameters: updateNum(
      ".step-3__meter-container.asistencia-total  .step-3__meter-right-data",
      "0",
      "120"
    ),
    offset: "-=800",
  },
  {
    parameters: slideX(".step-3__meter-container.ausentismo-total", -1000),
    offset: "-=500",
  },
  {
    parameters: slideX(".step-3__meter-container.atrasos", -1000),
    offset: "-=500",
  },
  {
    parameters: slideX(".step-3__meter-container.asistencia-total", -1500),
    offset: "-=500",
  },
  {
    parameters: fadeOut([
      ".step-3__meter-container.asistencia-total",
      ".step-3__meter-container.atrasos",
      ".step-3__meter-container.ausentismo-total",
    ]),
    offset: "-=1000",
  },
  {
    parameters: scale(".step-3__assist-line", 0, 0.9),
    offset: "-=500",
  },
  {
    parameters: {
      targets: ".step-3__assist-line .step-3__line",
      opacity: [0, 1],
      easing: "easeInOutSine",
    },
    offset: "-=800",
  },
  {
    parameters: scale(".step-3__plan-bars", 0, 0.7),
    offset: "-=500",
  },
  {
    parameters: {
      targets: ".step-3__plan-bars .step-3__bar-group > div",
      scaleY: [0, 1],
      delay: anime.stagger(100),
      easing: "easeInOutExpo",
    },
    offset: "-=800",
  },
  {
    parameters: scale(".step-3__assist-bars", 0, 0.55),
    offset: "-=1000",
  },
  {
    parameters: {
      targets: ".step-3__assist-bars .step-3__bar-group div",
      scaleX: [0, 1],
      delay: anime.stagger(100),
      easing: "easeInOutExpo",
    },
    offset: "-=800",
  },
];

step_3.forEach((anim) => {
  if (anim.offset) {
    return asistencia_animation_step_3.add(anim.parameters, anim.offset);
  } else {
    return asistencia_animation_step_3.add(anim.parameters);
  }
});

export {
  asistencia_animation_step_1,
  asistencia_animation_step_2,
  asistencia_animation_step_3,
  transition_animation_step_1,
};
