const progressAnimation = anime.timeline({
  autoplay:0
});

let progressAnimationHasPlayed = 0;

var observer = new IntersectionObserver(function(entries) {
	if(entries[0].isIntersecting === true && progressAnimationHasPlayed == 0)
		progressAnimation.play();
    progressAnimationHasPlayed = 1;
    
}, { threshold: [0] });

observer.observe(document.querySelector(".progress__bg"));

// Animation down - step 1

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





// function elementInViewport(el) {
//     var top = el.offsetTop;
//     var left = el.offsetLeft;
//     var width = el.offsetWidth;
//     var height = el.offsetHeight;
  
//     while(el.offsetParent) {
//       el = el.offsetParent;
//       top += el.offsetTop;
//       left += el.offsetLeft;
//     }
  
//     return (
//       top >= window.pageYOffset &&
//       left >= window.pageXOffset &&
//       (top + height) <= (window.pageYOffset + window.innerHeight) &&
//       (left + width) <= (window.pageXOffset + window.innerWidth)
//     );
//   }
