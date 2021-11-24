import { pop, slideX, flyOutX, scale, shake, flyOut, translate, shine, fadeOut, fadeIn, arrowLoop, spinLoop, ripple, meterFillLeft, meterFillRight, updateNum } from './general.js';

const asistencia_animation_step1 = anime.timeline({
    autoplay: false
});

const asistencia_animation_step2 = anime.timeline({
  autoplay: false
});

const asistencia_animation_step3 = anime.timeline({
  autoplay: false
});

const asistencia_container_step1 = document.querySelector('.step-1.animation-asistencia');
const asistencia_container_step2 = document.querySelector('.step-2.animation-asistencia');
const asistencia_container_step3 = document.querySelector('.step-3.animation-asistencia');

addAnimationTrigger(asistencia_container_step1, asistencia_animation_step1);
addAnimationTrigger(asistencia_container_step2, asistencia_animation_step2);
addAnimationTrigger(asistencia_container_step3, asistencia_animation_step3);


  const step1 = [
    {
      parameters: pop('.step-1__entry-type'),
    },
    {
      parameters: {
        targets: '.step-1__entry-selector',
        keyframes: [
          { translateY: 46 },
          { opacity: [0, 1] },
          { translateY: 98 },
          { translateY: 148 }
        ],
        duration: 1700,
        easing: 'easeInOutElastic(1, .8)',
      }, offset: '-=1500'
    },
    {
      parameters: ripple('.step-1__ripple', 195, 130),
      offset: '+=100'
    },
    {
      parameters: fadeOut('.step-1__entry-selector'),
      offset: '-=300'
    },
    {
      parameters: pop('.step-1__app-screen'),
      offset: '-=700'
    },
    {
      parameters: slideX('.step-1__entry-type', -300 ),
      offset: '-=950'
    },
    {
      parameters: fadeOut('.step-1__entry-type' ),
      offset: '-=950'
    }, 
    {
      parameters: ripple('.step-1__ripple', 157, 230),
      offset: '-=200'
    },
    {
      parameters: slideX('.step-1__phone-camera', -220),
      offset: '-=600'
    },
    {
      parameters: fadeOut('.step-1__app-screen img.screen')
    },
    {
      parameters: fadeIn('.step-1__biometry'),
      offset: '-=1200'
    },
    {
      parameters: fadeIn('.step-1__biometry-line'),
      offset: '-=1200'
    },
    {
      parameters: {
        targets: '.step-1__biometry-line',
        keyframes: [
          { translateY: 0 },
          { translateY: -120 },
          { translateY: 0 },
        ],
        duration: 1500,
        easing: 'easeInOutSine',
      }, offset: '-=1500'
    },
    {
      parameters: fadeOut('.step-1__biometry-line'),
      offset: '-=500'
    },
    {
      parameters: slideX('.step-1__app-screen', -50),
      offset: '-=500'
    },
    {
      parameters: pop('.step-1__entry-id'),
      offset: '-=700'
    },
    // { // Se va del cuadro
    //   parameters: flyOutX('.step-1__entry-id', 3840),
    //   offset: '-=200'
    // },
    // {
    //   parameters: slideX('.step-1__graphics', -1920),
    //   offset: '-=1200'
    // },
  ]

  step1.forEach( anim => {
    if (anim.offset) {
      return asistencia_animation_step1.add(anim.parameters, anim.offset );
    } else {
      return asistencia_animation_step1.add(anim.parameters);
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
      return asistencia_animation_step2.add(anim.parameters, anim.offset );
    } else {
      return asistencia_animation_step2.add(anim.parameters);
    };
  });


  const step3 = [
    {
      parameters: pop('.step-3__platform', 0, 1),
      offset: '0'
    },
    {
      parameters: scale('.step-3__report-action', 0, 1),
      offset: '-=500'
    },
    {
      parameters: ripple('.step-3__ripple', 410, -278),
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
      parameters: scale('.step-3__meter-container.ausentismo-total', 0, 0.8),
      offset: '-=600'
    },
    {
      parameters: meterFillLeft('.step-3__meter-container.ausentismo-total .step-3__meter', 21.7),
      offset: '-=800'
    },
    {
      parameters: updateNum('.step-3__meter-container.ausentismo-total .step-3__meter-num-progress', '0%', '21.7%'),
      offset: '-=1000'
    },
    {
      parameters: scale('.step-3__meter-container.atrasos', 0, 0.5),
      offset: '-=600'
    },
    {
      parameters: meterFillLeft('.step-3__meter-container.atrasos .step-3__meter', 21.3),
      offset: '-=800'
    },
 
    {
      parameters: updateNum('.step-3__meter-container.atrasos .step-3__meter-num-progress', '0%', '21.3%'),
      offset: '-=1000'
    },
    {
      parameters: updateNum('.step-3__meter-container.atrasos .step-3__meter-left-data--orange', '0', '20'),
      offset: '-=1000'
    },
    {
      parameters: updateNum('.step-3__meter-container.atrasos .step-3__meter-right-data', '0', '94'),
      offset: '-=1000'
    },  
    {
      parameters: scale('.step-3__meter-container.asistencia-total', 0, 0.3),
      offset: '-=600'
    },
    {
      parameters: meterFillLeft('.step-3__meter-container.asistencia-total .step-3__meter', 50),
      offset: '-=800'
    },
    {
      parameters: meterFillRight('.step-3__meter-container.asistencia-total .step-3__meter', 78.3),
    },
    {
      parameters: updateNum('.step-3__meter-container.asistencia-total .step-3__meter-num-progress', '0%', '78.3%'),
      offset: '-=1200'
    },
    {
      parameters: updateNum('.step-3__meter-container.asistencia-total .step-3__meter-left-data--blue', '0', '94'),
      offset: '-=800'
    },
    {
      parameters: updateNum('.step-3__meter-container.asistencia-total  .step-3__meter-right-data', '0', '120'),
      offset: '-=800'
    },
    {
      parameters: slideX('.step-3__meter-container.ausentismo-total', -1000),
      offset: '-=500'
    },
    {
      parameters: slideX('.step-3__meter-container.atrasos', -1000),
      offset: '-=500'
    },
    {
      parameters: slideX('.step-3__meter-container.asistencia-total', -1500),
      offset: '-=500'
    },
    {
      parameters: scale('.step-3__assist-line', 0, 0.9),
      offset: '-=500'
    },
    {
      parameters: {
        targets: '.step-3__assist-line .step-3__line',
        opacity: [0, 1],
        easing: 'easeInOutSine'
      },
      offset: '-=800'
    },
    {
      parameters: scale('.step-3__plan-bars', 0, 0.7),
      offset: '-=500'
    },
    {
      parameters: {
        targets: '.step-3__plan-bars .step-3__bar-group > div',
        scaleY: [0, 1],
        delay: anime.stagger(100),
        easing: 'easeInOutExpo'
      },
      offset: '-=800'
    },
    {
      parameters: scale('.step-3__assist-bars', 0, 0.55),
      offset: '-=1000'
    },
    {
      parameters: {
        targets: '.step-3__assist-bars .step-3__bar-group div',
        scaleX: [0, 1],
        delay: anime.stagger(100),
        easing: 'easeInOutExpo'
      },
      offset: '-=800'
    },
    
    
  ]


  step3.forEach( anim => {
    if (anim.offset) {
      return asistencia_animation_step3.add(anim.parameters, anim.offset );
    } else {
      return asistencia_animation_step3.add(anim.parameters);
    };
  });



  export { asistencia_animation_step1, asistencia_animation_step2, asistencia_animation_step3 }