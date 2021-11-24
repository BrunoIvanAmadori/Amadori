import { addAnimationTrigger } from "../addAnimationTrigger";

const enableAnimeSelectors = () => {
  const fadeInChildsTarget = document.querySelectorAll(".anime-fadein-childs");
  const fadeInTarget = document.querySelectorAll(".anime-fadein");
  const popTarget = document.querySelectorAll(".anime-pop");

  fadeInChildsTarget.forEach((target) => {
    addAnimationTrigger(
      target,
      anime({
        targets: target.children,
        duration: 500,
        opacity: [0, 1],
        translateY: [50, 0],
        autoplay: 0,
        delay: anime.stagger(300),
        easing: "easeInOutSine",
      })
    );
  });

  fadeInTarget.forEach((target) => {
    target.style.willChange = "transform, opacity";
    target.style.opacity = "0";

    addAnimationTrigger(
      target,
      anime(
        {
          targets: target,
          duration: 500,
          opacity: [0, 1],
          translateY: [50, 0],
          autoplay: 0,
          easing: "easeOutSine",
        },
        500
      )
    );
  });

  popTarget.forEach((target) => {
    target.style.willChange = "transform, opacity";

    addAnimationTrigger(
      target,
      anime(
        {
          targets: target,
          duration: 1200,
          scale: [0, 1],
          autoplay: 0,
          easing: "easeOutElastic(1, .6)",
        },
        500
      )
    );
  });
};

// Pareciera que no pueden haber dos instancias en paralelo de una misma animacion. Tengo que recrear una animacion nueva por cada elemento que debiera ser animado.
// Esto lo puedo hacer creando una animacion en el foreach y apsandola.

const slideX = (target, x) => {
  return {
    targets: target,
    translateX: {
      value: "+=" + x,
    },
    duration: 700,
    easing: "easeInOutQuad",
  };
};

const flyOutX = (target, x) => {
  return {
    targets: target,
    keyframes: [
      { scale: [1, 1.3] },
      { translateX: x, easing: "easeInOutCubic" },
      { scale: [1.3, 1] },
    ],
    duration: 1500,
    easing: "easeInOutSine",
  };
};

const scale = (target, from, to) => {
  return {
    targets: target,
    scale: [from, to],
    duration: 1000,
  };
};

const shake = (target, xMax) => {
  return {
    targets: target,
    scale: [
      { value: [1, 0.9], easing: "easeInElastic(1, .5)" },
      { value: [0.9, 1], easing: "easeOutElastic(1, .5)" },
    ],
    duration: 300,
    // easing: 'easeInOutElastic(1, .5)'
  };
};

const flyOut = (target, x, y) => {
  return {
    targets: target,
    keyframes: [
      { scale: [1, 1.3] },
      { translateX: x, translateY: y, easing: "easeInOutCubic" },
      { scale: [1.3, 1] },
    ],
    duration: 1500,
    easing: "easeInOutSine",
  };
};

const translate = (target, x, y) => {
  return {
    targets: target,
    translateX: x,
    translateY: y,
    opacity: [1, 0],
    scale: [1, 0],
    duration: 1000,
    easing: "easeInOutQuad",
  };
};

const pop = (target) => {
  return {
    targets: target,
    duration: 1000,
    opacity: [0, 1],
    scale: [0, 1],
    easing: "easeOutElastic(3, 1)",
  };
};

const shine = (target) => {
  let targetEl = document.querySelector(target);
  return {
    targets: target,
    duration: 2000,
    update: function (anim) {
      if (anim.progress < 25) {
        targetEl.style.filter =
          "brightness(" + (100 + anim.progress / 1.25) + "%)";
      } else if (anim.progress > 25 && anim.progress < 50) {
        targetEl.style.filter =
          "brightness(" + (120 - (anim.progress - 25) / 1.25) + "%)";
      } else if (anim.progress > 50 && anim.progress < 75) {
        targetEl.style.filter =
          "brightness(" + (100 + (anim.progress - 50) / 1.25) + "%)";
      } else if (anim.progress > 75 && anim.progress < 101) {
        targetEl.style.filter =
          "brightness(" + (120 - (anim.progress - 75) / 1.25) + "%)";
      }
    },

    // keyframes: [

    //   {
    //     update: function(anim){
    //       targetEl.style.filter = 'brightness(' + (120 - (anim.progress / 5)) + '%)'
    //     },
    //   }
    // ]
  };
};

const fadeOut = (target) => {
  return {
    targets: target,
    duration: 750,
    opacity: [1, 0],
    easing: "easeInOutSine",
  };
};

const fadeIn = (target) => {
  return {
    targets: target,
    duration: 750,
    opacity: [0, 1],
    easing: "easeInOutSine",
  };
};

const arrowLoop = (target) => {
  return {
    targets: target,
    duration: 2000,
    keyframes: [
      { scale: [0, 1], easing: "easeOutElastic(1, .5)" },
      { translateY: [0, -200] },
      { translateY: [130, -200] },
      { translateY: [130, -200] },
    ],
    easing: "easeInOutSine",
  };
};

const spinLoop = (target) => {
  return {
    targets: target,
    duration: 3300,
    rotate: 720,
    easing: "easeInOutSine",
  };
};

const ripple = (target, x, y) => {
  return {
    targets: target,
    duration: 700,
    translateX: [x, x],
    translateY: [y, y],
    keyframes: [{ opacity: [0, 1] }, { opacity: [1, 0] }],
    scale: [0, 1],
    easing: "easeOutSine",
  };
};

const meterFillLeft = (target, finishValue) => {
  const meterFillLeft = target + "-fill--left";
  const meterFillRight = target + "-fill--right";
  let targetAngle = (180 * finishValue) / 100;
  return {
    targets: [meterFillLeft, meterFillRight],
    rotate: [0, targetAngle],
    // keyframes: [
    //   { opacity: [0, 1], duration: 1},
    //   {rotate: [0, 90]}
    // ],
    easing: "easeInSine",
    duration: 800,
  };
};

const meterFillRight = (target, finishValue) => {
  const meterFillRight = target + "-fill--right";
  let targetAngle = (180 * finishValue) / 100;

  return {
    targets: [meterFillRight],
    rotate: [90, targetAngle],
    easing: "easeOutSine",
    duration: 800,
  };
};

const updateNum = (target, from, to) => {
  var meterNumProgressElement = document.querySelector(target);

  var meterNumProgress = {
    progress: from,
  };
  return {
    targets: meterNumProgress,
    progress: to,
    easing: "easeInOutExpo",
    round: 1,
    duration: 1000,
    update: function () {
      meterNumProgressElement.innerHTML = meterNumProgress.progress;
    },
  };
};

export {
  enableAnimeSelectors,
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
};
