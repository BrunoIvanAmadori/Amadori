// When the user scrolls the page, execute myFunction
// window.onscroll = function() {myFunction()};

// element should be replaced with the actual target element on which you have applied scroll, use window in case of no target element.

let lastScrollTop = 0;

window.onload = () => {
  window.addEventListener('resize', () => {
    if (!throttled) {
      getViewport();
      setHeaderPosition();
  
      throttled = true;
  
      setTimeout( function() {
        throttled = false
      }, 100);
    }
    // start timing for event "completion"
    } 
  );

  window.addEventListener("scroll", function(){ // or window.addEventListener("scroll"....
    let st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
    getViewport();
    setHeaderPosition();

    if (st > lastScrollTop){
       onScrollDown();
    } else {
       onScrollUp();
    }
    lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
  }, false);
  
}



// stickyheader class should be part of this plugin

// Get the header
let header = document.getElementById("masthead");
let headerHeight = header.offsetHeight;

// get the topheader

let topheader = document.getElementById("tophead");
let topheaderHeight = topheader.offsetHeight;

// Get the offset position of the navbar
let sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position

let isOnTop = 0;
let scrollingDown = 0;
let scrollingUp = 0;
let viewport;
let size;

let throttled = false;

function setHeaderPosition () {

  if (isPageOnTop() && viewport == "md") {
    header.style.top = "0px";
    size = 0;
  } else {
    header.style.top = "0px";
    size = 0;
  }

  if (!isPageOnTop() && viewport != "md") {
    header.style.top = "0px";
    topheader.style.top = "-40px"
    size = 80;
  }

  if (isPageOnTop() && viewport != "md") {
    header.style.top = "40px";
    topheader.style.top = "0px";
    size = 120;
    show(value = "-40", 0 );
    console.log(size);
  }
}

function getViewport() {
  if(  window.innerWidth  < 990 ) {
    viewport = 'md';
  } else {
    viewport = 'lg';
  }
}

function isPageOnTop() {
  if (window.pageYOffset == 0) {
    return true;
  } else {
    return false;
  }
 }

const tl = anime.timeline({   });

function show(s, e) {

  anime({
    duration: 150,
    targets: ['#tophead', '#masthead'],
    translateY: [s, e],
    easing: 'easeInOutSine'

    });

}

function hide(s, e) {
  anime({
    duration: 150,
    targets: ['#tophead', '#masthead'],
    translateY: [s, e],
    easing: 'easeInOutSine'
    });

}

function onScrollDown() {
  if(scrollingDown != true){
    hide (0, -size);
    
  }
  scrollingDown = true;
  scrollingUp = false;

}

function onScrollUp() {
  if(scrollingUp != true){
    show(-size, 0);
  }
  scrollingUp = true;
  scrollingDown = false;

  
}


getViewport();
setHeaderPosition();