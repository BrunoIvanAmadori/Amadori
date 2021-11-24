let resizerWrappers = [];

function getResizerWrappers() {
  document.querySelectorAll(".resizer").forEach((wrapper) => {
    const wrapperParent = () => {
      if (wrapper.offsetParent.classList.contains("resizer-reference")) {
        return wrapper.offsetParent;
      } else if (
        wrapper.offsetParent.offsetParent.classList.contains(
          "resizer-reference"
        )
      ) {
        return wrapper.offsetParent.offsetParent;
      }
    };

    resizerWrappers.push({
      el: wrapper,
      reference: wrapperParent(),
    });
  });
}

function scaleResizerWrappers() {
  resizerWrappers.forEach((resizer) => {
    let wrapperWidth = resizer.reference.getBoundingClientRect().width;
    let wrapperMaxWidth = getComputedStyle(resizer.el).maxWidth.replace(
      "px",
      ""
    );
    let scale;

    if (wrapperWidth != 0 && wrapperWidth <= wrapperMaxWidth) {
      scale = wrapperWidth / wrapperMaxWidth;

      resizer.el.style.transform = "scale(" + scale + ")";
    }
  });
}

function initResizer() {
  getResizerWrappers();
  scaleResizerWrappers();
  window.addEventListener("resize", (ev) => {
    scaleResizerWrappers();
  });
}

export { initResizer };
