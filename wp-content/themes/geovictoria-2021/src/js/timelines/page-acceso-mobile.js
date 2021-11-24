import { pop, slideX, flyOutX, scale, shake, flyOut, translate, shine, fadeOut, fadeIn, arrowLoop, spinLoop, ripple, meterFillLeft, meterFillRight, updateNum } from './general.js';

const acceso_animation_step1 = anime.timeline({
    autoplay: false
});

const acceso_animation_step2 = anime.timeline({
  autoplay: false
});

const acceso_animation_step3 = anime.timeline({
  autoplay: false
});

const step1 = [
  {
    parameters: {targets: '.step-1__text', translateY:[200, 0], duration: 500, easing: 'easeOutSine'}
  },
  {
    parameters: pop('.step-1__entry-device'),
    offset: '-=500'
  },
  {
    parameters: {
      targets: '.step-1__entry-device .step-1__entry-selector',
      keyframes: [
        { translateY: 46 },
        { opacity: [0, 1] },
        { translateY: 87 },
        { translateY: 46 },

      ],
      duration: 1700,
      easing: 'easeInOutElastic(1, .8)',
    }, offset: '-=1500'
  },
  {
    parameters: ripple('.step-1__ripple', 195, 100),
    offset: '+=100'
  },
  {
    parameters: fadeOut('.step-1__entry-selector'),
    offset: '-=300'
  },
  {
    parameters: slideX('.step-1__entry-device', -300 ),
    offset: '-=950'
  },
  {
    parameters: fadeOut('.step-1__entry-device' ),
    offset: '-=950'
  }, 
  {
    parameters: pop('.step-1__entry-method'),
    offset: '-=500'
  },
  {
    parameters: {
      targets: '.step-1__entry-method .step-1__entry-selector',
      keyframes: [
        { translateY: 46 },
        { opacity: [0, 1] },
        { translateY: 87 },
      ],
      duration: 1275,
      easing: 'easeInOutElastic(1, .8)',
    }, offset: '-=1500'
  },
  {
    parameters: ripple('.step-1__ripple', 195, 90),
    offset: '+=100'
  },
  {
    parameters: fadeOut('.step-1__entry-method .step-1__entry-selector'),
    offset: '-=300'
  },
  {
    parameters: pop('.step-1__speedface-container'),
    offset: '-=700'
  },
  {
    parameters: slideX('.step-1__entry-method', -300 ),
    offset: '-=950'
  },
  {
    parameters: fadeOut('.step-1__entry-method' ),
    offset: '-=950'
  }, 
  {
    parameters: slideX('.step-1__speedface-face', -220),
    offset: '-=600'
  },
  {
    parameters: pop('.step-1__speedface-blocked', -220),
    offset: '-=800'
  },
  {
    parameters: fadeIn('.step-1__biometry'),
    offset: '-=600'
  },
  {
    parameters: fadeIn('.step-1__biometry-line'),
    offset: '-=600'
  },
  {
    parameters: {
      targets: '.step-1__biometry-line',
      keyframes: [
        { translateY: 0 },
        { translateY: -84 },
        { translateY: 0 },
      ],
      duration: 1500,
      easing: 'easeInOutSine',
    }, offset: '-=1000'
  },
  {
    parameters: fadeOut('.step-1__speedface-blocked'),
    offset: '-=400'
  },
  {
    parameters: fadeOut('.step-1__biometry-line'),
    offset: '-=500'
  },
  {
    parameters: fadeOut('.step-1__biometry'),
    offset: '-=500'
  },
  {
    parameters: slideX('.step-1__speedface-notification', 124),
    offset: '-=600'
  },
  {
    parameters: pop('.step-1__speedface-open'),
    offset: '-=1000'
  },
  {
    parameters: fadeOut('.step-1__speedface-open'),
    offset: '-=0'
  },
  {
    parameters: pop('.step-1__entry-id'),
    offset: '-=500'
  },
  {
    parameters: fadeOut('.step-1__speedface-container'),
    offset: '-=500'
  },
  // { 
  //   parameters: flyOutX('.step-1__entry-id', 3540),
  //   offset: '-=200'
  // },
  // {
  //   parameters: flyOutX('.step-1.animation-acceso', -2020),
  //   offset: '-=1500'
  // },
  // {
  //   parameters: {
  //     targets: 'step-1.animation-acceso',
  //     opacity: [1, 0],
  //   },
  //   offset: '-=900'
  // },
];

step1.forEach( anim => {
  if (anim.offset) {
    return acceso_animation_step1.add(anim.parameters, anim.offset );
  } else {
    return acceso_animation_step1.add(anim.parameters);
  };
});



  const step2 = [
    {
      parameters: spinLoop('.step-2__loading'),
      offset: 0
    },
    {
      parameters: translate('.step-2__entry-id--size-1', 120, 100),
      offset: '-=3100'
    },
    {
      parameters: shake('.step-2__cloud', 5),
      offset: '-=2300'
    },
    {
      parameters: translate('.step-2__entry-id--size-2', 75, -110),
      offset: '-=2700'
    },
    {
      parameters: shake('.step-2__cloud', 5),
      offset: '-=1900'
    },
    {
      parameters: translate('.step-2__entry-id--size-3', -130, -50),
      offset: '-=2300'
    },
    {
      parameters: shake('.step-2__cloud', 5),
      offset: '-=1500'
    },
    {
      parameters: translate('.step-2__entry-id--size-4', -96, 100),
      offset: '-=1900'
    },
    {
      parameters: shake('.step-2__cloud', 5),
      offset: '-=1100'
    },
    {
      parameters: fadeOut('.step-2__loading'),
      offset: '-=500'
    },
    {
      parameters: arrowLoop('.step-2__arrow-up'),
      offset: '-=500'
    },
    {
      parameters: {
        targets: ".step-2__cloud-aura",
        duration: 500,
        opacity: [0.5, 0],
        scale: [1, 1.5],
        easing: 'easeInOutSine'
      },
      offset: '-=1500'
    },
    {
      parameters: {
        targets: ".step-2__cloud-aura",
        duration: 500,
        opacity: [0.5, 0],
        scale: [1, 1.3],
        easing: 'easeInOutSine'
      },
      offset: '-=1000'
    },
    {
      parameters: {
        targets: ".step-2__cloud-aura",
        duration: 500,
        opacity: [0.5, 0],
        scale: [1, 1.1],
        easing: 'easeInOutSine'
      },
      offset: '-=500'
    },
    {
      parameters: shine('.step-2__cloud'),
      offset: '-=2000'
    },
    {
      parameters: shake('.step-2__cloud', 1),
      offset: '-=1000'
    },
    {
      parameters: shake('.step-2__cloud', 1),
      offset: '-=1500'
    },
    {
      parameters: scale('.step-2__cloud', 1, 0),
      offset: '-=500'
    },
    {
      parameters: scale('.step-2__bubble', 0, 1),
      offset: '-=1000'
    },
    {
      parameters: scale('.step-2__check', 0, 1),
      offset: '-=1000'
    },
    // {
    //   parameters: fadeOut('.step-2__entry-id--size-1'),
    //    offset: '-=4500'
    // },
  ]

  step2.forEach( anim => {
    if (anim.offset) {
      return acceso_animation_step2.add(anim.parameters, anim.offset );
    } else {
      return acceso_animation_step2.add(anim.parameters);
    };
  });


  const step3 = [
    {
      parameters: {targets: '.step-3__text', translateY:[200, 0], scale: [1.3, 1],  opacity: [0, 1], duration: 500, easing: 'easeOutSine'},
      offset: '0'
    },
    {
      parameters: pop('.step-3__platform', 0, 1),
      offset: '0'
    },
    {
      parameters: scale('.step-3__report-action', 0, 1),
      offset: '-=500'
    },
    {
      parameters: ripple('.step-3__ripple', 410, -274),
      offset: '-=700'
    },
    {
      parameters: slideX('.step-3__platform', -1000),
      offset: '-=300'
    },
    {
      parameters: slideX('.step-3__report-action', -1000),
      offset: '-=500'
    },
    {
      parameters: scale('.step-3__graphic-container', 0, 1),
      offset: '-=500'
    },
    {
      parameters: {
        targets: '.step-3__graphic-container .step-3__bar-group',
        scaleY: [0, 1],
        easing: 'easeOutSine'
      },
      offset: '-=300'
    },
    {
      parameters: scale('.step-3__users-detail-container', 0, 1),
      offset: '-=500'
    },
    { 
      parameters: scale('.step-3__monitoring', 0, 1),
      offset: '-=500'
    },
    {
      parameters: scale('.step-3__date-container', 0, 0.8),
      offset: '-=500'
    },
    {
      parameters: scale('.step-3__users-container', 0, 1),
      offset: '-=500'
    },




  ]



  step3.forEach( anim => {
    if (anim.offset) {
      return acceso_animation_step3.add(anim.parameters, anim.offset );
    } else {
      return acceso_animation_step3.add(anim.parameters);
    };
  });

  export { acceso_animation_step1, acceso_animation_step2, acceso_animation_step3}