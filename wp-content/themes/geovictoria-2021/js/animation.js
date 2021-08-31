var observer = new IntersectionObserver(
  (entries) => {
    console.log(entries);
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        
        playTarget(entry.target);
    }
  });
}, { threshold: [0.5]});

let $triggers = [];

function addAnimationTrigger( $triggerEl, $animation) {
  observer.observe($triggerEl);
  if (!$triggerEl) {
    
    
  } else {
    
    
  let lazyImages = [];
  
  $triggerEl.childNodes.forEach( el => {
    if (el.nodeName == 'IMG') {
     lazyImages.push(el);
    }
  });

  if (lazyImages.length == 0) {
    $triggers.push({trigger: $triggerEl, hasPlayed: 0, animation: $animation, finishedLoading: true  });
  } else {
    lazyImages.forEach( img => {
      
      loadingCount = 0;
      
      img.addEventListener("load", () => {
        
        loadingCount++;
        if (loadingCount == lazyImages.length ) {
          let $finishedLoading = true;
         
          $triggers.push({trigger: $triggerEl, hasPlayed: 0, animation: $animation, finishedLoading: $finishedLoading  });
          $triggers.forEach( ($trig) => {
            console.log($trig);
            console.log($trig.finishedLoading);
            console.log(isInViewport($trig.trigger));
            console.log($trig.hasPlayed);
            
            if ($trig.finishedLoading == true && isInViewport($trig.trigger) == true && $trig.hasPlayed == 0 ) {
              console.log($trig.trigger)
              $trig.animation.play();
              $trig.hasPlayed = 1;
            }
          })
  
        }
      });
    });
    }
  }
  
}

function isInViewport(myElement) {
  var bounding = myElement.getBoundingClientRect();
  var myElementHeight = myElement.offsetHeight;
  var myElementWidth = myElement.offsetWidth;

  if (bounding.top >= -myElementHeight 
      && bounding.left >= -myElementWidth
      && bounding.right <= (window.innerWidth || document.documentElement.clientWidth) + myElementWidth
      && bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight) + myElementHeight) {
      return true;
  } else {
      return false;
  }
}
let a = 0;
function playTarget(el) {
  $triggers.forEach( $trig => {

   if (el == $trig.trigger && $trig.hasPlayed == 0) {
    console.log($trig.trigger);
    console.log('has played');
     $trig.animation.play();
     $trig.hasPlayed = 1;
    
  //   let promise = new Promise ( (res, rej) => {
  //         if ($trig.finishedLoading == true) {
  //           $trig.animation.play();
  //           res();
  //         }
  //  });
  //  promise.then( function () { $trig.animation.play(); $trig.hasPlayed = 1; });
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

   
