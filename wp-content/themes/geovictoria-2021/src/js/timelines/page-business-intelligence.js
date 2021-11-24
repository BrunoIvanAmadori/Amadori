import { pop, slideX, flyOutX, scale, shake, flyOut, translate, shine, fadeOut, fadeIn, arrowLoop, spinLoop, ripple, meterFillLeft, meterFillRight, updateNum } from './general.js';


const bi_animation = anime.timeline({
    autoplay: false,
});


    // FIN DEL STEP 2
  const bi_animation_keyframes = [
    {
      parameters: {
        targets: '.hero__img',
        translateX: [-200, 0],
        opacity: [0, 1],
        duration: 750,
        delay: 500
      }  
    },
    {
      parameters: scale('.hero__meter-container.asistencia-total', 0, 0.27),
      offset: '-=600'
    },
    {
      parameters: meterFillLeft('.hero__meter-container.asistencia-total .hero__meter', 50),
      offset: '-=800'
    },
    {
      parameters: meterFillRight('.hero__meter-container.asistencia-total .hero__meter', 78.3),
      
    },
    {
      parameters: updateNum('.hero__meter-container.asistencia-total .hero__meter-num-progress', '0%', '78.3%'),
      offset: '-=1200'
    },
    {
      parameters: updateNum('.hero__meter-container.asistencia-total .hero__meter-left-data--blue', '0', '94'),
      offset: '-=800'
    },
    {
      parameters: updateNum('.hero__meter-container.asistencia-total .hero__meter-right-data', '0', '120'),
      offset: '-=800'
    },
    {
      parameters: scale('.hero__meter-container.ausentismo-total', 0, 0.35),
      offset: '-=1900'
    },
    {
      parameters: meterFillLeft('.hero__meter-container.ausentismo-total .hero__meter', 21.7),
      offset: '-=1600'
    },
    {
      parameters: updateNum('.hero__meter-container.ausentismo-total .hero__meter-num-progress', '0%', '21.7%'),
      offset: '-=1600'
    },
    {
      parameters: scale('.hero__meter-container.atrasos', 0, 0.35),
      offset: '-=1600'
    },
    {
      parameters: meterFillLeft('.hero__meter-container.atrasos .hero__meter', 21.3),
      offset: '-=800'
    },
 
    {
      parameters: updateNum('.hero__meter-container.atrasos .hero__meter-num-progress', '0%', '21.3%'),
      offset: '-=1000'
    },
    {
      parameters: updateNum('.hero__meter-container.atrasos .hero__meter-left-data--orange', '0', '20'),
      offset: '-=1000'
    },
    {
      parameters: updateNum('.hero__meter-container.atrasos .hero__meter-right-data', '0', '94'),
      offset: '-=1000'
    },
    {
      parameters: fadeOut(['.hero__meter-container.ausentismo-total', '.hero__meter-container.asistencia-total', '.hero__meter-container.atrasos']),
      offset: '-=500'
    },
    {
      parameters: scale('.hero__assist-line', 0, 0.53),
      offset: '-=500'
    },
    {
      parameters: {
        targets: '.hero__assist-line .hero__line',
        opacity: [0, 1],
        easing: 'easeInOutSine'
      },
      offset: '-=800'
    },
    {
      parameters: scale('.hero__plan-bars', 0, 0.42),
      offset: '-=800'
    },
    {
      parameters: {
        targets: '.hero__plan-bars .hero__bar-group > div',
        scaleY: [0, 1],
        delay: anime.stagger(100),
        easing: 'easeInOutExpo'
      },
      offset: '-=800'
    },
    {
      parameters: scale('.hero__assist-bars', 0, 0.4),
      offset: '-=1500'
    },
    {
      parameters: {
        targets: '.hero__assist-bars .hero__bar-group div',
        scaleX: [0, 1],
        delay: anime.stagger(100),
        easing: 'easeInOutExpo'
      },
      offset: '-=800'
    },
  ]



  bi_animation_keyframes.forEach( anim => {
    if (anim.offset) {
      return bi_animation.add(anim.parameters, anim.offset );
    } else {
      return bi_animation.add(anim.parameters);
    };
  });

  export { bi_animation}