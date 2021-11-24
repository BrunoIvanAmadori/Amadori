const headerAnimation = anime.timeline({
  autoplay: false,
  delay: 500,
});

let headerScreen = document.querySelector(".animation-home__screen-desk");
let headerUser = document.querySelector(".animation-home__user");

headerAnimation
  .add(
    {
      targets: ".animation-home__screen-desk",
      duration: 1500,
      opacity: [0, 1],
      scale: [0.75, 0.85],
    },
    300
  )

  .add(
    {
      targets: ".animation-home__arrow",
      duration: 1000,
      opacity: [0, 1],
      translateX: [700, 0],
      easing: "easeInOutExpo",
    },
    300
  )

  .add(
    {
      targets: ".animation-home__user",
      duration: 1500,
      scale: [0, 0.6],
    },
    800
  )
  .add(
    {
      targets: ".animation-home__entry-type",
      duration: 1500,
      translateY: [100, 0],
      scale: [0, 0.9],
    },
    1100
  )
  .add(
    {
      targets: [".animation-home__screen-group"],
      duration: 1000,
      scale: [1, 0.8],
      translateY: [0, -50],
      easing: "easeInOutSine",
    },
    1500
  )
  .add(
    {
      targets: [".animation-home__user", ".animation-home__entry-type"],
      duration: 3000,
      opacity: [1, 0],
    },
    2800
  )
  .add(
    {
      targets: [".animation-home__screen-tablet"],
      duration: 1500,
      scale: [0, 1],
    },
    3250
  )
  .add(
    {
      targets: [".animation-home__screen-mobile"],
      duration: 1500,
      scale: [0, 1],
    },
    2500
  )
  .add(
    {
      targets: [".animation-home__usb"],
      duration: 1500,
      scale: [0, 1],
    },
    2750
  )
  .add(
    {
      targets: [".animation-home__box"],
      duration: 1500,
      scale: [0, 1],
    },
    3000
  );

anime({
  targets: ".animation-home__arrow",
  translateX: [0, 20],
  direction: "alternate",
  loop: true,
  easing: "easeInOutSine",
});

const progressAnimation = anime.timeline({
  autoplay: 0,
});

// Animation down - step 1

progressAnimation

  .add(
    {
      targets: ".progress__bg.step-1",
      height: [180, 550],
      opacity: [0, 1],
    },
    0
  )

  .add(
    {
      targets: [".progress__bg.step-1 .progress__circle"],
      translateY: [0, 370],
    },
    0
  )

  .add(
    {
      targets: [".progress__bg.step-1 .progress__text--up"],
      opacity: [0, 1],
    },
    150
  )

  .add(
    {
      targets: [".progress__arrow.step-1"],
      opacity: [0, 1],
      scale: [0, 1],
      easing: "spring(2, 100, 10, 0)",
    },
    150
  )

  // Animation up - step 2

  .add(
    {
      targets: ".progress__bg.step-2",
      height: [180, 550],
      opacity: [0, 1],
    },
    650
  )

  .add(
    {
      targets: [".progress__bg.step-2 .progress__text--down"],
      opacity: [0, 1],
    },
    800
  )

  .add(
    {
      targets: [".progress__arrow.step-2"],
      opacity: [0, 1],
      scale: [0, 1],
      easing: "spring(2, 100, 10, 0)",
    },
    800
  )

  // Animation down - step 3

  .add(
    {
      targets: ".progress__bg.step-3",
      height: [180, 550],
      opacity: [0, 1],
    },
    1300
  )

  .add(
    {
      targets: [".progress__bg.step-3 .progress__circle"],
      translateY: [0, 370],
    },
    1300
  )

  .add(
    {
      targets: [".progress__bg.step-3 .progress__text--up"],
      opacity: [0, 1],
    },
    1450
  )

  .add(
    {
      targets: [".progress__arrow.step-3"],
      opacity: [0, 1],
      scale: [0, 1],
      easing: "spring(2, 100, 10, 0)",
    },
    1450
  )

  // Animation up - step 4

  .add(
    {
      targets: ".progress__bg.step-4",
      height: [180, 550],
      opacity: [0, 1],
    },
    1950
  )

  .add(
    {
      targets: [".progress__bg.step-4 .progress__text--down"],
      opacity: [0, 1],
    },
    2100
  )

  .add(
    {
      targets: [".progress__arrow.step-4"],
      opacity: [0, 1],
      scale: [0, 1],
      easing: "spring(2, 100, 10, 0)",
    },
    2100
  )

  // Animation down - step 5

  .add(
    {
      targets: ".progress__bg.step-5",
      height: [180, 550],
      opacity: [0, 1],
    },
    2650
  )

  .add(
    {
      targets: [".progress__bg.step-5 .progress__circle"],
      translateY: [0, 370],
    },
    2650
  )

  .add(
    {
      targets: [".progress__bg.step-5 .progress__text--up"],
      opacity: [0, 1],
    },
    2800
  );

const progressMobileAnimation_step_1 = anime.timeline({
  autoplay: 0,
});

const progressMobileAnimation_step_2 = anime.timeline({
  autoplay: 0,
});

const progressMobileAnimation_step_3 = anime.timeline({
  autoplay: 0,
});

const progressMobileAnimation_step_4 = anime.timeline({
  autoplay: 0,
});

const progressMobileAnimation_step_5 = anime.timeline({
  autoplay: 0,
});

// Animation down - step 1

progressMobileAnimation_step_1
  .add(
    {
      targets: ".progressMobile__bg.step-1",
      opacity: [0, 1],
      width: ["0%", "100%"],
    },
    0
  )

  .add(
    {
      targets: [
        ".step-1 .progressMobile__text--left",
        ".step-1 .progressMobile__text",
      ],
      opacity: [0, 1],
    },
    300
  );

// Animation up - step 2
progressMobileAnimation_step_2
  .add(
    {
      targets: ".progressMobile__bg.step-2",
      opacity: [0, 1],
      width: ["0%", "100%"],
    },
    0
  )

  .add(
    {
      targets: [".progressMobile__bg.step-2 .progressMobile__text--left"],
      opacity: [0, 1],
    },
    300
  );

// Animation down - step 3
progressMobileAnimation_step_3
  .add(
    {
      targets: ".progressMobile__bg.step-3",
      opacity: [0, 1],
      width: ["0%", "100%"],
    },
    0
  )

  .add(
    {
      targets: [".progressMobile__bg.step-3 .progressMobile__text--left"],
      opacity: [0, 1],
    },
    300
  );

// Animation up - step 4
progressMobileAnimation_step_4
  .add(
    {
      targets: ".progressMobile__bg.step-4",
      opacity: [0, 1],
      width: ["0%", "100%"],
    },
    0
  )

  .add(
    {
      targets: [".progressMobile__bg.step-4 .progressMobile__text--left"],
      opacity: [0, 1],
    },
    300
  );

// Animation down - step 5
progressMobileAnimation_step_5
  .add(
    {
      targets: ".progressMobile__bg.step-5",
      opacity: [0, 1],
      width: ["0%", "100%"],
    },
    0
  )

  .add(
    {
      targets: [".progressMobile__bg.step-5 .progressMobile__text--left"],
      opacity: [0, 1],
    },
    300
  );

export {
  headerAnimation,
  progressMobileAnimation_step_1,
  progressMobileAnimation_step_2,
  progressMobileAnimation_step_3,
  progressMobileAnimation_step_4,
  progressMobileAnimation_step_5,
  progressAnimation,
};
