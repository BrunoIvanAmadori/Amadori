let lastScrollTop = 0;

function getViewport() {
  if(  window.innerWidth <= 991 ) {
      return 'md';
  } else {
      return 'lg';
  }
}

let isFullMenu;


function setStickyMenuPosition(scrollOffset = 0) {

  const stickyMenu = document.querySelector('#sticky-menu');

  if (scrollOffset < 50) {
    stickyMenu.style.transform = "translateY(" + scrollOffset + "px)";
  } else {
    stickyMenu.style.transform = "translateY(" + scrollOffset + 70 + "px)";
  }
  

  


  //console.log(st);

 // let st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
   
  if (scrollOffset > lastScrollTop) {
    onScrollDown(scrollOffset);
      } else {
    onScrollUp(scrollOffset);
  }
 lastScrollTop = scrollOffset <= 0 ? 0 : scrollOffset; // For Mobile or negative scrolling
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

function onScrollDown(scrollOffset) {
 
  if( isScrollingDown != true ){

    if (getViewport() == "lg" ) {
      if (isFullMenu) {
        animateMenu (actualPosition, actualPosition - 120);
      } else {
        animateMenu (actualPosition, actualPosition - 80);
      }
    };

    if (getViewport() == "md" ) {
      actualPosition = -40;
      animateMenu (actualPosition, actualPosition - 80);
    };
  }

  isScrollingDown = true;
  isFullMenu = false;
}

function onScrollUp(scrollOffset) {
//  let st = window.pageYOffset;

  if( isScrollingDown ){
    if (getViewport() == "md" ) {
      actualPosition = -120;
      animateMenu (actualPosition, actualPosition + 80);
    };
    
    if (getViewport() == "lg" ) {
      animateMenu (actualPosition, actualPosition + 80);
    };
  }

  if( scrollOffset < 150 && isScrollingDown === false && !isFullMenu){
    if (getViewport() == "lg" ) {
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

// getViewport();
// setHeaderPosition();

export { setStickyMenuPosition };