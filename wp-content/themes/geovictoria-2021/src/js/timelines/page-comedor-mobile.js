import { pop, slideX, flyOutX, scale, shake, flyOut, translate, shine, fadeOut, fadeIn, arrowLoop, spinLoop, ripple, meterFillLeft, meterFillRight, updateNum } from './general.js';

const comedor_animation_step1 = anime.timeline({
  autoplay: false
});

const comedor_animation_step2 = anime.timeline({
autoplay: false
});

const comedor_animation_step3 = anime.timeline({
autoplay: false
});


const step1 = [
  {
    parameters: {targets: '.step-1__text', translateY:[200, 0], duration: 500, easing: 'easeOutSine'}
  },
  {
    parameters: pop('.step-1__entry-type'),
  },
  {
    parameters: {
      targets: '.step-1__entry-type .step-1__entry-selector',
      keyframes: [
        { translateY: 46 },
        { opacity: [0, 1] },
        { translateY: 95 },
        { translateY: 150 },
        { translateY: 202 },

      ],
      duration: 1700,
      easing: 'easeInOutElastic(1, .8)',
    }, offset: '-=1500'
  },
  {
    parameters: ripple('.step-1__ripple', 195, 220),
    offset: '+=100'
  },
  {
    parameters: fadeOut(['.step-1__entry-type .step-1__entry-selector', '.step-1__entry-type' ]),
    offset: '-=300'
  },
  {
    parameters: pop('.step-1__box-container'),
    offset: '-=700'
  },
  {
    parameters: slideX('.step-1__box-container .step-1__box-pass', -120 ),
    offset: '-=500'
  },
  {
    parameters: {
      targets: '.step-1__box-code span',
      opacity: [0, 1],
      delay: anime.stagger(200),
      duration: 1250
    }
  },
  {
    parameters: ripple('.step-1__ripple', 83, 140),
    offset: '-=2250'
  },
  {
    parameters: ripple('.step-1__ripple', 131, 140),
    offset: '-=2100'
  },
  {
    parameters: ripple('.step-1__ripple', 178, 140),
    offset: '-=1900'
  },
  {
    parameters: ripple('.step-1__ripple', 83, 170),
    offset: '-=1700'
  },
  {
    parameters: ripple('.step-1__ripple', 131, 170),
    offset: '-=1500'
  },
  {
    parameters: {
      targets: '.step-1__ticket',
      keyframes: [
        { opacity: [0, 1], duration: 1 },
        { translateY: [0, 150] },
        { translateY: [150, 255], easing: 'easeInOutSine' },
        { zIndex: [0, 3], duration: 1 },
        { translateY: [255, -5], duration: 600, easing: 'easeInOutSine'}
      ],
      duration: 1700
    },
    offset: '-=500'
  },
];

step1.forEach( anim => {
  if (anim.offset) {
    return comedor_animation_step1.add(anim.parameters, anim.offset );
  } else {
    return comedor_animation_step1.add(anim.parameters);
  };
});


  // FIN DEL STEP 1
  const step2 = [

    {
      parameters: {
        targets: ['.step-2__loading', '.step-2__cloud','.step-2__cloud-aura', '.step-2__ticket--size-2', '.step-2__ticket--size-3', '.step-2__ticket--size-4' ],
        scale: [0, 1],
        duration: 500,
        delay: anime.stagger(100)
      }
    },
    {
      parameters: {targets: '.step-2__text', translateY:[200, 0], scale: [1.3, 1],  opacity: [0, 1], duration: 500, easing: 'easeOutSine'},
      offset: '0'
    },
    {
      parameters: { targets: ('.step-2__ticket--size-1'), translateX: 2000, easing: 'easeInOutCubic'},
      offset: '-=500'
    },
    {
      parameters: spinLoop('.step-2__loading'),
      offset: 0
    },
    {
      parameters: translate('.step-2__ticket--size-1', 2120, 100),
      offset: '-=3100'
    },
    {
      parameters: shake('.step-2__cloud', 5),
      offset: '-=2300'
    },
    {
      parameters: translate('.step-2__ticket--size-2', 155, -210),
      offset: '-=2700'
    },
    {
      parameters: shake('.step-2__cloud', 5),
      offset: '-=1900'
    },
    {
      parameters: translate('.step-2__ticket--size-3', -430, -150),
      offset: '-=2300'
    },
    {
      parameters: shake('.step-2__cloud', 5),
      offset: '-=1500'
    },
    {
      parameters: translate('.step-2__ticket--size-4', -496, 200),
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
    //   parameters: flyOutX('.step-2.animation-comedor', -4000),
    //   offset: '-=200'
    // },
    // {
    //   parameters: fadeOut('.step-2.animation-comedor'),
    //   offset: '-=1000'
    // }
    // {
    //   parameters: fadeOut('.step-2__entry-id--size-1'),
    //    offset: '-=4500'
    // },
  ]

  step2.forEach( anim => {
    if (anim.offset) {
      return comedor_animation_step2.add(anim.parameters, anim.offset );
    } else {
      return comedor_animation_step2.add(anim.parameters);
    };
  });

  // FIN DEL STEP 2
  const step3 = [
  {
    parameters: fadeIn('.step-3.animation-comedor'),
    offset: 0
  },
  {
    parameters: pop('.step-3__platform', 0, 1),
    offset: '-=500'
  },
  {
    parameters: {targets: '.step-3__text', translateY:[200, 0], scale: [1.3, 1],  opacity: [0, 1], duration: 500, easing: 'easeOutSine'},
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
    parameters: slideX(['.step-3__platform','.step-3__report-action'], -1000),
    offset: '-=300'
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
    parameters: updateNum('.step-3__graphic-container .step-3__data-1', '0', '700'),
    offset: '-=1000'
  },
  {
    parameters: updateNum('.step-3__graphic-container .step-3__data-2', '0', '700'),
    offset: '-=500'
  },
  {
    parameters: scale('.step-3__rations-container', 0, 1),
    offset: '-=500'
  },
  {
    parameters: updateNum('.step-3__rations-container .step-3__data-1', '0', '700'),
    offset: '-=1000'
  },
  {
    parameters: updateNum('.step-3__rations-container .step-3__data-2', '0', '500'),
    offset: '-=1000'
  },
  {
    parameters: updateNum('.step-3__rations-container .step-3__data-3', '0', '505'),
    offset: '-=1000'
  },
  {
    parameters: updateNum('.step-3__rations-container .step-3__data-4', '0', '450'),
    offset: '-=1000'
  },
  { 
    parameters: scale('.step-3__report-container', 0, 1),
    offset: '-=500'
  },
  {
    parameters: updateNum('.step-3__report-container .step-3__data-1', '0', '23'),
    offset: '-=1000'
  },
  {
    parameters: updateNum('.step-3__report-container .step-3__data-2', '0', '50'),
    offset: '-=1000'
  },
  {
    parameters: updateNum('.step-3__report-container .step-3__data-3', '0', '20'),
    offset: '-=1000'
  },
]



  step3.forEach( anim => {
    if (anim.offset) {
      return comedor_animation_step3.add(anim.parameters, anim.offset );
    } else {
      return comedor_animation_step3.add(anim.parameters);
    };
  });



  export { comedor_animation_step1, comedor_animation_step2, comedor_animation_step3 }