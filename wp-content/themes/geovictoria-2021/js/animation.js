// I play whatever is visible in the viewport

var observer = new IntersectionObserver(
  (entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {  
        
        playTarget(entry.target);
        
    }
  });
}, { threshold: [0]});

let $triggers = [];

function addAnimationTrigger( element, animation ) {

  observer.observe(element);
  lazyLoad(element, animation);
}
  
function lazyLoad(element, animation) {
  let elementImages = [];



  
  // the element contains all the images of the animation
  element.childNodes.forEach( el => {
    if (el.nodeName == 'IMG') {
      elementImages.push({el: el, element: element, imagesLoaded: 0});
    }
  });



  if (elementImages.length == 0 ) {
    // if there are not images on the element, then take it as already loaded

    $triggers.push({trigger: element, hasPlayed: 0, animation: animation, finishedLoading: true  });
  } else {
    // if we got images, then let's load them
    elementImages.imagesLoaded = 0;

    elementImages.forEach( img => {
      
      // if images are already preloaded by cache...
      if (img.el.complete && img.el.naturalHeight !== 0) {
        // add image loaded
        elementImages.imagesLoaded++;
      }
      // check if all the images were preloaded
      if (elementImages.imagesLoaded == elementImages.length ) {

        // Add a new animation trigger as finished
        $triggers.push({ trigger: element, hasPlayed: 0, animation: animation, finishedLoading: true  });  

      } else {

        // As there are images left, I'll check when they finish loading
        img.el.addEventListener("load", () => {
          // When image is loaded, add to the count
          elementImages.imagesLoaded++;
          
          // re-check if all the images are loaded
          if (elementImages.imagesLoaded == elementImages.length ) {       
            $triggers.push({ trigger: element, hasPlayed: 0, animation: animation, finishedLoading: true });
            imagesLoaded = 0;

            // The observer doesn't fires the animation if target is already on viewport,
            // so I fire it here...
            if (isInViewport($triggers[$triggers.length - 1].trigger)) {
              playTarget($triggers[$triggers.length - 1].trigger);
            }
          };
        });
      }
    });
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

function playTarget(el) {
  
  $triggers.forEach( $trig => {

    if ( el == $trig.trigger && $trig.finishedLoading == true && $trig.hasPlayed == 0 ) {
      
      $trig.animation.play();
      $trig.hasPlayed = 1;
      el.style.willChange = null;
    }
  });
}



// 

let resizerWrappers = [];

document.querySelectorAll('.resizer')
  .forEach( (wrapper) => {
    resizerWrappers.push({
      el: wrapper,
      reference: wrapper.offsetParent
    })
});


function doResize() {
  
  resizerWrappers.forEach( (wrapper) => {
    let wrapperWidth = wrapper.reference.getBoundingClientRect().width;
    let wrapperMaxWidth = getComputedStyle(wrapper.el).maxWidth.replace('px', '');
    let scale;

    console.log(wrapperMaxWidth)

    if (wrapperWidth <= wrapperMaxWidth) {
      scale = wrapperWidth / wrapperMaxWidth
      wrapper.el.style.transform =  "scale(" + scale + ")";
    }
  })
}

window.addEventListener('resize', (ev ) => {
  doResize()
})

doResize();