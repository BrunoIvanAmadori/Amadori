window.onload = () => {
  window.addEventListener('resize', throttle(getViewport, 10));
  window.addEventListener('resize', throttle(setHeaderPosition, 10));
  window.addEventListener("scroll", throttle(controlScroller, 30));

}

var Scrollbar = window.Scrollbar;
// document.documentElement.id = 'butter';

const ScrollbarElement = Scrollbar.init(document.querySelector('#scroll-content'), { damping: 0.04});

var scrollOffset;
let stickyMenu = document.querySelector('#sticky-menu');

ScrollbarElement.addListener( status => {
  scrollOffset = status.offset.y;
  stickyMenu.style.transform = "translateY(" + scrollOffset + "px)";
  controlScroller();
 // console.log(status.offset.y)
}
);





// Get the header
let header = document.getElementById("masthead");
let headerHeight = header.offsetHeight;

// get the topheader
let topheader = document.getElementById("tophead");
let topheaderHeight = topheader.offsetHeight;

// throttle function

function throttle (callback, limit) {
  var wait = false;                  // Initially, we're not waiting
  return function () {               // We return a throttled function
      if (!wait) {                   // If we're not waiting
          callback.call();           // Execute users function
          wait = true;               // Prevent future invocations
          setTimeout(function () {   // After a period of time
              wait = false;          // And allow future invocations
          }, limit);
      }
  }
}

// Obtain viewport for setting header positions

let viewport;
  
function getViewport() {
  if(  window.innerWidth <= 991 ) {
    viewport = 'md';
  } else {
    viewport = 'lg';
  }
}

let isFullMenu;
let firstTime = true;

// Setting header positions

function setHeaderPosition () {
  
  if (firstTime) {
    if (viewport == "md") {
      header.style.transform= 'translateY(-40px)';
    } else {
      header.style.transform= 'translateY(0px)';
      topheader.style.transform= 'translateY(0px)';
      actualPosition = 0;
      isFullMenu = true;
    }
    firstTime = false;
  } else {
    // Corrects header position when resizing
  
    if (viewport == "lg" ) {

      // if resizing with page on Top
      if ( isPageOnTop() ) {
        topheader.style.transform= 'translateY(0px)';
        header.style.transform= 'translateY(0px)';
        actualPosition = 0;
        isFullMenu = true;
      } else {

        // If resizing with header invisible
        if (isScrollingDown) {
          topheader.style.transform= 'translateY(-120px)';
          header.style.transform= 'translateY(-120px)';
          actualPosition = -120;
        } else {

        // If resizing with header visible
          topheader.style.transform= 'translateY(-40px)';
          header.style.transform= 'translateY(-40px)';
          actualPosition = -40;
        }
      }
    } else {
      if (isScrollingDown) {
        header.style.transform= 'translateY(-120px)';
      } else {
        header.style.transform= 'translateY(-40px)';
      }
      
    }
  }
}

// Set conditional invoking of functions depending on scroll direction.

let lastScrollTop = 0;

function controlScroller() {
  //console.log(st);

 // let st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
   
  if (scrollOffset > lastScrollTop){
    onScrollDown();
 } else {
    onScrollUp();
 }
 lastScrollTop = scrollOffset <= 0 ? 0 : scrollOffset; // For Mobile or negative scrolling
}

// Function to check if page is on top

let isOnTop = 0;

function isPageOnTop() {
  if ( scrollOffset == 0 ) {
    return true
  } else {
    return false  
  }
 }

// Function to animate

let actualPosition = 0;

function animateMenu(s, e) {
  anime({
    duration: 300,
    targets: ['#tophead', '#masthead'],
    translateY: [s, e],
    easing: 'easeInOutSine'
    });
    actualPosition = e;
}

// Scroll actions

let isScrollingDown = 0;

function onScrollDown() {
 
  if( isScrollingDown != true ){

    if (viewport == "lg" ) {
      if (isFullMenu) {
        animateMenu (actualPosition, actualPosition - 120);
      } else {
        animateMenu (actualPosition, actualPosition - 80);
      }
    };

    if (viewport == "md" ) {
      actualPosition = -40;
      animateMenu (actualPosition, actualPosition - 80);
    };
  }

  isScrollingDown = true;
  isFullMenu = false;
}

function onScrollUp() {
//  let st = window.pageYOffset;

  if( isScrollingDown ){
    if (viewport == "md" ) {
      actualPosition = -120;
      animateMenu (actualPosition, actualPosition + 80);
    };
    
    if (viewport == "lg" ) {
      animateMenu (actualPosition, actualPosition + 80);
    };
  }

  if( scrollOffset < 150 && isScrollingDown === false && !isFullMenu){
    if (viewport == "lg" ) {
      animateMenu (actualPosition, actualPosition + 40);
      isFullMenu = true;
    };
  } else if ( scrollOffset < 150 && isScrollingDown === true && !isFullMenu ) {
    actualPosition= -120;
    animateMenu (actualPosition, actualPosition + 120);
      isFullMenu = true;
  }

  isScrollingDown = false;

}

// Set initial values at start

getViewport();
setHeaderPosition();