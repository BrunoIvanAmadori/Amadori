// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
var header = document.getElementById("masthead");

var headerHeight = header.offsetHeight;

// get the topheader

var topheader = document.getElementById("tophead");

var topheaderHeight = topheader.offsetHeight;

// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset > sticky) {

    header.classList.add("stickyHeader");
   // anime.()
  //  topheader.offsetHeight =
    document.body.style.paddingTop = headerHeight + "px";
  } else {
    header.classList.remove("stickyHeader");
   document.body.style.paddingTop = 0;
  }
}

// stickyheader class should be part of this plugin