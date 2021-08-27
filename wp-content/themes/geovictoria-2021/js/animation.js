



var observer = new IntersectionObserver(
  (entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        playTarget(entry.target);
    }
  }, { threshold: [0.5] });
});

observer.observe(document.querySelector(".progress__bg"));
observer.observe(document.querySelector(".header-animation"));

function playTarget(el) {
  if(el.classList.contains('progress__bg') && progressAnimationPlayed == 0) {
    progressAnimation.play();
    progressAnimationPlayed = 1;
  } else if ( el.classList.contains('header-animation') && headerAnimationPlayed == 0 ) {
    headerAnimation.play();
    headerAnimationPlayed = 1;
  }
}

const headerAnimation = anime.timeline({
  autoplay: 0
})

let headerAnimationPlayed = 0;
let headerScreen = document.querySelector(".header-animation__screen");
let headerUser = document.querySelector(".header-animation__user");

headerAnimation
.add({
  targets: '.header-animation__screen',
  duration: 1500,
  opacity: [0, 1],
  translateX: [700, 0],
  easing: 'easeOutExpo'
}, 0)

.add({
  targets: '.header-animation__arrow',
  duration: 1000,
  translateX: [700, 0],
  easing: 'easeInOutSine'
}, 0)

.add({
  targets: '.header-animation__user',
  duration: 1500,
  translateY: [100, 0],
  opacity: [0, 1],
  easing: 'easeOutExpo'
}, 1000)

.add({
  targets: '.header-animation__screen',
  duration: 500,
  update: function(anim){
    headerScreen.style.filter = 'brightness(' + (100 - (20 * anim.progress / 100)) + '%)'
  },
  easing: 'easeOutSine',
}, 1000)


.add({
  targets: '.header-animation__entry-type',
  duration: 1500,
  translateY: [100, 0],
  opacity: [0, 1],
  easing: 'easeOutExpo'
}, 1500)

.add({
  targets: ['.header-animation__user', '.header-animation__screen'],
  duration: 500,
  update: function(anim){
    headerScreen.style.filter = 'brightness(' + (80 - (20 * anim.progress / 100)) + '%)';
    headerUser.style.filter = 'brightness(' + (100 - (20 * anim.progress / 100)) + '%)'
  },
  easing: 'easeOutSine',
}, 1500);

anime({
  targets: '.header-animation__arrow',
  translateX: [-20, 0],
  direction: 'alternate',
  loop: true,
  easing: 'easeInOutSine',
});

// Animation down - step 1

const progressAnimation = anime.timeline({
  autoplay:0
});

let progressAnimationPlayed = 0;

progressAnimation
.add({
    targets: '.progress__bg.step-1',
    height: [180, 400]
}, 0)

.add({
  targets: ['.progress__bg.step-1 .progress__circle'],
  translateY: [0, 220]
}, 0)

.add({
  targets: ['.progress__bg.step-1 .progress__text--up'],
  opacity: [0, 1]
}, 150)

.add({
  targets: ['.progress__arrow.step-1'],
  opacity: [0, 1],
  scale: [0, 1],
  easing: 'spring(2, 100, 10, 0)',
}, 150)


// Animation up - step 2

.add({
  targets: '.progress__bg.step-2',
  height: [180, 400],
}, 650)

.add({
  targets: ['.progress__bg.step-2 .progress__text--down'],
  opacity: [0, 1]
}, 800)

.add({
  targets: ['.progress__arrow.step-2'],
  opacity: [0, 1],
  scale: [0, 1],
  easing: 'spring(2, 100, 10, 0)',
}, 800)

// Animation down - step 3

.add({
  targets: '.progress__bg.step-3',
  height: [180, 400],
}, 1300)

.add({
targets: ['.progress__bg.step-3 .progress__circle'],
translateY: [0, 220],
}, 1300)

.add({
  targets: ['.progress__bg.step-3 .progress__text--up'],
  opacity: [0, 1]
}, 1450)

.add({
  targets: ['.progress__arrow.step-3'],
  opacity: [0, 1],
  scale: [0, 1],
  easing: 'spring(2, 100, 10, 0)',
}, 1450)

// Animation up - step 4

.add({
  targets: '.progress__bg.step-4',
  height: [180, 400],
}, 1950)

.add({
  targets: ['.progress__bg.step-4 .progress__text--down'],
  opacity: [0, 1]
}, 2100)

.add({
  targets: ['.progress__arrow.step-4'],
  opacity: [0, 1],
  scale: [0, 1],
  easing: 'spring(2, 100, 10, 0)'
}, 2100)

// Animation down - step 5

.add({
  targets: '.progress__bg.step-5',
  height: [180, 400]
}, 2650)

.add({
targets: ['.progress__bg.step-5 .progress__circle'],
translateY: [0, 220]
}, 2650)

.add({
  targets: ['.progress__bg.step-5 .progress__text--up'],
  opacity: [0, 1]
}, 2800);
