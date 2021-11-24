(function () {
  if (sessionStorage.fonts) {
    console.log("Fonts installed.");
    document.documentElement.classList.add("wf-active");
  } else {
    console.log("No fonts installed.");
  }
})();
