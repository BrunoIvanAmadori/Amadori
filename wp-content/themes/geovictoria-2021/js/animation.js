



// document.body.classList.add('js-loading');
// img.addEventListener("load", removeLoadingClass);
// function removeLoadingClass() {
//   document.body.classList.remove('js-loading');
// }

var observer = new IntersectionObserver(
  (entries) => {
    entries.forEach(entry => {

      if (entry.isIntersecting) {
        console.log(entry);
        playTarget(entry.target);
    }
  });
}, { threshold: [0.5]});

let $triggers = [];

function addAnimationTrigger( $triggerClass, $animation, $component) {
  observer.observe(document.querySelector($triggerClass));
  if (!$component) {
    
    $triggers.push({class: $triggerClass, hasPlayed: 0, animation: $animation, finishedLoading: true  });
  } else {
    
    
  let lazyImages = [];
  $component.childNodes.forEach( el => {
    if (el.nodeName == 'IMG') {
     lazyImages.push(el);
    }
  });

  lazyImages.forEach( img => {
  
    loadingCount = 0;
    
    img.addEventListener("load", () => {
      loadingCount++;
      if (loadingCount == lazyImages.length ) {
        let $finishedLoading = true;
        $triggers.push({class: $triggerClass, hasPlayed: 0, animation: $animation, finishedLoading: $finishedLoading  });
       
      }
    });
  });
  }
  
}
let a = 0;
function playTarget(el) {
  
  $triggers.forEach( $trig => {
//    console.log($trig.class);
//    console.log(el.classList.contains('header-animation'));
   if (el.classList.contains($trig.class.substr(1))) {
    let promise = new Promise ( (res, rej) => {
          if ($trig.finishedLoading == true) {
            $trig.animation.play();
            res();
          }
   });
   promise.then( function () { $trig.animation.play(); $trig.hasPlayed = 1; });
  }
});
}
   //console.log($trig.class.substr(1));
    // if (el.classList.contains($trig.class.substr(1)) && $trig.hasPlayed === 0 && $trig.finishedLoading == true) {
    //   $trig.animation.play();
    //   console.log($trig);
    //   $trig.hasPlayed = 1;
    //  // console.log($trig);
    // } else {
    //   // let promise = new Promise ( (res, rej) => {
    //   //   if ($trig.finishedLoading == true) {
    //   //     res('..');
    //   //   }
    //   // });

      
    // }

   
