// When the user scrolls the page, execute myFunction
// window.onscroll = function() {myFunction()};

// element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.

var lastScrollTop = 0;

window.addEventListener("scroll", function(){ // or window.addEventListener("scroll"....
  var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
  if (st > lastScrollTop){
     onScrollDown();
  } else {
     onScrollUp();
  }
  lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
}, false);



// stickyheader class should be part of this plugin

// Get the header
var header = document.getElementById("masthead");

var headerHeight = header.offsetHeight;

// get the topheader

var topheader = document.getElementById("tophead");

var topheaderHeight = topheader.offsetHeight;

// Get the offset position of the navbar
var sticky = header.offsetTop;

const width = Math.max(
  document.documentElement.clientWidth,
  window.innerWidth || 0
)


// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position

let isOnTop = 0;
let scrollingDown = 0;
let scrollingUp = 0;

if(  window.innerWidth  < 990 ) {
  anime({
    duration: 0,
    targets: ['#masthead'],
    top: 0,
    easing: 'easeInOutSine',
    })
} else {
  anime({
    duration: 0,
    targets: ['#masthead'],
    top: 40,
    easing: 'easeInOutSine',
    })
}

window.addEventListener('resize', ( () => {
  
  if( window.innerWidth < 990 ) {

    
    anime({
      duration: 100,
      targets: ['#masthead'],
      top: 0,
      easing: 'easeInOutSine',
      })
      
  } else {

    anime({
      duration: 100,
      targets: ['#masthead'],
      top: 40,
      easing: 'easeInOutSine',
    });
   
  }
}

));



function onScrollDown() {
  if (window.pageYOffset == 0) {
    isOnTop = 1;
    document.body.paddingTop = '120px';

    anime({
      duration: 200,
      targets: ['#tophead', '#masthead'],
      translateY: [0, 40],
      easing: 'easeInOutSine',
      })
  }

  if (window.pageYOffset > 0 && scrollingDown == 0) {
    
    document.body.paddingTop = '80px';

    anime({
    duration: 200,
    targets: ['#tophead', '#masthead'],
    translateY: [-40, -120],
    easing: 'easeInOutSine',
    })

    scrollingDown = 1;
    scrollingUp = 0;
    isOnTop = 0;
  }
}

function onScrollUp() {
  if (window.pageYOffset == 0) {
  
    document.body.paddingTop = '120px';

    if(  window.innerWidth  > 990 ) {

      anime({
        duration: 200,
        targets: ['#tophead', '#masthead'],
        translateY: [-40, -0],
        easing: 'easeInOutSine',
        })
    } else {


    }



  }

  if (window.pageYOffset > 0 && scrollingUp == 0) {
    
    document.body.paddingTop = '80px';


    if(  window.innerWidth  < 990 ) {

      anime({
        duration: 200,
        targets: ['#tophead', '#masthead'],
        translateY: [-40, -0],
        easing: 'easeInOutSine',
        })
    } else {

      anime({
        duration: 200,
        targets: ['#tophead', '#masthead'],
        translateY: [-120, -40],
        easing: 'easeInOutSine',
        })
    }

    scrollingDown = 0;
    scrollingUp = 1;
    isOnTop = 0;
  }
}


