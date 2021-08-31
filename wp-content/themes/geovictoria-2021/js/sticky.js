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
let isFullMenu;
let viewport;
let size;

let throttled = false;
let translated = false;
function setHeaderPosition () {



  if (viewport == "lg" && !translated) {
    //    header.style.top = "0px";
    if (isPageOnTop()) {
      topheader.style.transform= 'translateY(0px)';
      header.style.transform= 'translateY(0px)';
      actualPosition = 0;
    } else {
      topheader.style.transform= 'translateY(-40px)';
      header.style.transform= 'translateY(-40px)';
      actualPosition = -40;
    }
    
    translated = true;
     //actualPosition= -120;
      }
    

  if (isPageOnTop() && viewport == "md" && isFullMenu) {
  //  topheader.style.transform= 'translateY(0px)';
  //  header.style.transform= 'translateY(0px)';
//   header.style.top = "40px";
//   topheader.style.top = "0px";
    
    // size= 120;
  }

  if (isPageOnTop() && viewport == "lg") {
    // console.log('isfullmenu desk')
    // header.style.transform= 'translateY(40px)';
//    header.style.top = "40px";
    // size= 80;
    isFullMenu = true;
  }

  if (viewport == "md" && translated) {
//    header.style.top = "0px";
    header.style.transform= 'translateY(-40px)';
    translated = false;
 //    actualPosition= -120;
  }

  

  if (!isPageOnTop() && viewport == "lg") {
 //   header.style.transform= 'translateY(-40px)';
 //   topheader.style.transform= 'translateY(-40px)';
//    header.style.top = "0px";
//    topheader.style.top = "-40px"
    // size = 80;
  }

  if (isPageOnTop() && viewport == "lg") {
 //   topheader.style.transform= 'translateY(0px)';
 //   header.style.transform= 'translateY(40px)';
 //   header.style.top = "40px";
 //   topheader.style.top = "0px";
  
    // size = 120;
   // show(value = "-40", 0 );
   // console.log(size);
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
let actualPosition = 0;
function show(s, e) {
  anime({
    duration: 300,
    targets: ['#tophead', '#masthead'],
    translateY: [s, e],
    easing: 'easeInOutSine'
    });
    actualPosition = e;
    console.log(actualPosition);
}

// function hide(s, e) {
//   anime({
//     duration: 150,
//     targets: ['#tophead', '#masthead'],
//     translateY: [s, e],
//     easing: 'easeInOutSine'
//     });

// }

function onScrollDown() {
  if(scrollingDown != true){
//    console.log(size);
    if (viewport == "lg" ) {
      if (isFullMenu) {
        show (actualPosition, actualPosition - 120);
      }

      if (!isFullMenu) {
        show (actualPosition, actualPosition - 80);
      }
      
    };

    if (viewport == "md" ) {
      actualPosition = -40;
      show (actualPosition, actualPosition - 80);
    };

    // if (viewport == "lg" && !isFullMenu ) {
    //   show (0, -80);
    // };


    // if (viewport == "md") {
    //   show (0, -80);
    // };
    
    
  }
  scrollingDown = true;
  scrollingUp = false;
  isFullMenu = false;

}

function onScrollUp() {
  let st = window.pageYOffset;
  

  if(scrollingUp == false){
    if (viewport == "md" ) {
      actualPosition = -120;
      show (actualPosition, actualPosition + 80);
    };

    if (viewport == "lg" ) {
      show (actualPosition, actualPosition + 80);
    };
    scrollingUp = true;
  }

  if(st < 100 && scrollingUp === true && !isFullMenu){
    if (viewport == "lg" ) {
      show (actualPosition, actualPosition + 40);
      isFullMenu = true;
    };
    // scrollingUp = false;
  }

  
  scrollingUp = true;
  scrollingDown = false;
  
}



getViewport();
setHeaderPosition();