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

const acceso_animation_step_1 = anime.timeline({
  autoplay: false,
});

const acceso_animation_step_2 = anime.timeline({
  autoplay: false,
});

const acceso_animation_step_3 = anime.timeline({
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
        acceso_animation_step_1.restart();
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
          acceso_animation_step_2.restart();
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
        acceso_animation_step_2.restart();
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
        acceso_animation_step_3.restart();
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
    parameters: pop(".step-1__entry-device"),
  },
  {
    parameters: {
      targets: ".step-1__entry-device .step-1__entry-selector",
      keyframes: [
        { translateY: 46 },
        { opacity: [0, 1] },
        { translateY: 87 },
        { translateY: 46 },
      ],
      duration: 1700,
      easing: "easeInOutElastic(1, .8)",
    },
    offset: "-=1700",
  },
  {
    parameters: ripple(".step-1__ripple", 195, 100),
    offset: "-=300",
  },
  {
    parameters: fadeOut(".step-1__entry-selector"),
    offset: "-=300",
  },
  {
    parameters: slideX(".step-1__entry-device", -300),
    offset: "-=950",
  },
  {
    parameters: fadeOut(".step-1__entry-device"),
    offset: "-=950",
  },
  {
    parameters: pop(".step-1__entry-method"),
    offset: "-=900",
  },
  {
    parameters: {
      targets: ".step-1__entry-method .step-1__entry-selector",
      keyframes: [{ translateY: 46 }, { opacity: [0, 1] }, { translateY: 87 }],
      duration: 1275,
      easing: "easeInOutElastic(1, .8)",
    },
    offset: "-=1275",
  },
  {
    parameters: ripple(".step-1__ripple", 195, 90),
    offset: "+=100",
  },
  {
    parameters: fadeOut(".step-1__entry-method .step-1__entry-selector"),
    offset: "-=300",
  },
  {
    parameters: pop(".step-1__speedface-container"),
    offset: "-=700",
  },
  {
    parameters: slideX(".step-1__entry-method", -300),
    offset: "-=950",
  },
  {
    parameters: fadeOut(".step-1__entry-method"),
    offset: "-=950",
  },
  {
    parameters: slideX(".step-1__speedface-face", -220),
    offset: "-=600",
  },
  {
    parameters: pop(".step-1__speedface-blocked", -220),
    offset: "-=800",
  },
  {
    parameters: fadeIn(".step-1__biometry"),
    offset: "-=600",
  },
  {
    parameters: fadeIn(".step-1__biometry-line"),
    offset: "-=600",
  },
  {
    parameters: {
      targets: ".step-1__biometry-line",
      keyframes: [{ translateY: 0 }, { translateY: -84 }, { translateY: 0 }],
      duration: 1500,
      easing: "easeInOutSine",
    },
    offset: "-=1000",
  },
  {
    parameters: fadeOut(".step-1__speedface-blocked"),
    offset: "-=400",
  },
  {
    parameters: fadeOut(".step-1__biometry-line"),
    offset: "-=500",
  },
  {
    parameters: fadeOut(".step-1__biometry"),
    offset: "-=500",
  },
  {
    parameters: slideX(".step-1__speedface-notification", 124),
    offset: "-=600",
  },
  {
    parameters: pop(".step-1__speedface-open"),
    offset: "-=1000",
  },
  {
    parameters: fadeOut(".step-1__speedface-open"),
    offset: "-=0",
  },
  {
    parameters: pop(".step-1__entry-id"),
    offset: "-=600",
  },
];

step1.forEach((anim) => {
  if (anim.offset) {
    return acceso_animation_step_1.add(anim.parameters, anim.offset);
  } else {
    return acceso_animation_step_1.add(anim.parameters);
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

step2.forEach((anim) => {
  if (anim.offset) {
    return acceso_animation_step_2.add(anim.parameters, anim.offset);
  } else {
    return acceso_animation_step_2.add(anim.parameters);
  }
});

// FIN DEL STEP 2
const step3 = [
  {
    parameters: pop(".step-3__platform", 0, 1),
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
    parameters: slideX(".step-3__platform", -1000),
    offset: "-=300",
  },
  {
    parameters: slideX(".step-3__report-action", -1000),
    offset: "-=500",
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
    parameters: scale(".step-3__users-detail-container", 0, 1),
    offset: "-=500",
  },
  {
    parameters: scale(".step-3__monitoring", 0, 1),
    offset: "-=500",
  },
  {
    parameters: scale(".step-3__date-container", 0, 0.8),
    offset: "-=500",
  },
  {
    parameters: scale(".step-3__users-container", 0, 1),
    offset: "-=500",
  },
];

step3.forEach((anim) => {
  if (anim.offset) {
    return acceso_animation_step_3.add(anim.parameters, anim.offset);
  } else {
    return acceso_animation_step_3.add(anim.parameters);
  }
});

export {
  acceso_animation_step_1,
  acceso_animation_step_2,
  acceso_animation_step_3,
  transition_animation_step_1,
};
