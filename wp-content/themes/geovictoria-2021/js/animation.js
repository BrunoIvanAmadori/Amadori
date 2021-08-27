var observer = new IntersectionObserver(
  (entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        playTarget(entry.target);
    }
  }, { threshold: [0.5] });
});

let $triggers = [];

function addAnimationTrigger( $triggerClass, $animation) {
  $triggers.push({class: $triggerClass, hasPlayed: 0, animation: $animation  });
  observer.observe(document.querySelector($triggerClass));
}

function playTarget(el) {
  $triggers.forEach( $trig => {
    if (el.classList.contains($trig.class.substr(1)) && $trig.hasPlayed === 0) {
      $trig.animation.play();
      $trig.hasPlayed = 1;
  }})
}