const progressAnimation = anime.timeline({
  autoplay: 0,
});
let progressComponent = document.querySelector(".progress__section");

// Animation down - step 1

progressAnimation

  // .add(
  //   {
  //     targets: ".progress__bg.step-1",
  //     height: [180, 570],
  //     opacity: [0, 1],
  //   },
  //   0
  // )

  // .add(
  //   {
  //     targets: [".progress__bg.step-1 .progress__circle"],
  //     translateY: [0, 340],
  //   },
  //   0
  // )

  // .add(
  //   {
  //     targets: [".progress__bg.step-1 .progress__text--up"],
  //     opacity: [0, 1],
  //   },
  //   150
  // )

  // .add(
  //   {
  //     targets: [".progress__arrow.step-1"],
  //     opacity: [0, 1],
  //     scale: [0, 1],
  //     easing: "spring(2, 100, 10, 0)",
  //   },
  //   150
  // )

  // Animation up - step 2

  .add(
    {
      targets: ".progress__bg.step-2",
      height: [180, 570],
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
      height: [180, 570],
      opacity: [0, 1],
    },
    1300
  )

  .add(
    {
      targets: [".progress__bg.step-3 .progress__circle"],
      translateY: [0, 390],
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
      height: [180, 570],
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
      height: [180, 570],
      opacity: [0, 1],
    },
    2650
  )

  .add(
    {
      targets: [".progress__bg.step-5 .progress__circle"],
      translateY: [0, 390],
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

// const progressMobileAnimation_step_1 = anime.timeline({
//   autoplay: 0,
// });

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

// progressMobileAnimation_step_1
//   .add(
//     {
//       targets: ".progressMobile__bg.step-1",
//       opacity: [0, 1],
//       width: ["0%", "100%"],
//     },
//     0
//   )

//   .add(
//     {
//       targets: [
//         ".step-1 .progressMobile__text--left",
//         ".step-1 .progressMobile__text",
//       ],
//       opacity: [0, 1],
//     },
//     300
//   );

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
  progressAnimation,
  // progressMobileAnimation_step_1,
  progressMobileAnimation_step_2,
  progressMobileAnimation_step_3,
  progressMobileAnimation_step_4,
  progressMobileAnimation_step_5,
};
