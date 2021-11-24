
let firstTime = true;

// Function to check if page is on top

let isOnTop = 0;
let lastScrollTop = 0;
let isScrollingDown = false;
// Setting header positions

function setHeaderPosition (scrollOffset) {
    let isFullMenu;
    let actualPosition;

    if (scrollOffset > lastScrollTop) {
      isScrollingDown = true;
        } else {
      isScrollingDown = false;
    }
    lastScrollTop = scrollOffset <= 0 ? 0 : scrollOffset; // For Mobile or negative scrolling

    function isPageOnTop() {
      if ( scrollOffset == 0 ) {
        return true
      } else {
        return false  
      }
     }
    
    
    // Get the header
    let header = document.getElementById("masthead");
    let headerHeight = header.offsetHeight;

    // get the topheader
    let topheader = document.getElementById("tophead");
    let topheaderHeight = topheader.offsetHeight;

    function getViewport() {
        if(  window.innerWidth <= 991 ) {
            return 'md';
        } else {
            return 'lg';
        }
    }

  if (firstTime) {
    if (getViewport() == "md") {
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
  
    if (getViewport() == "lg" ) {

      // if resizing with page on Top
      if ( isPageOnTop() ) {
        topheader.style.transform= 'translateY(0px)';
        header.style.transform= 'translateY(0px)';
        actualPosition = 0;
        isFullMenu = true;
      } else {

        // If resizing with header invisible
        // if (isScrollingDown) {
        //   topheader.style.transform= 'translateY(-120px)';
        //   header.style.transform= 'translateY(-120px)';
        //   actualPosition = -120;
        // } else {

        // If resizing with header visible
        //   topheader.style.transform= 'translateY(-40px)';
        //   header.style.transform= 'translateY(-40px)';
        //   actualPosition = -40;
        // }
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

export { setHeaderPosition };