import anime from "animejs";
import { throttle } from "./throttle.js";

class Sticky {
  constructor(el, scrObj = null) {
    this.element = el;
    this.scrObj = scrObj;
    this.yOffset = window.scrollY;
    //this.yOffset = window.scrollY;
    this.viewportWidth = window.innerWidth;
    this.isFull;

    this.update();

    window.addEventListener("resize", (ev) => {
      this.viewportWidth = window.innerWidth;
      throttle(this.update(), 50);
    });

    if (this.scrObj) {
      this.scrObj.addListener((status) => {
        this.yOffset = status.offset.y;
        throttle(this.update(), 50);
      });
    } else {
      window.addEventListener("scroll", () => {
        this.yOffset = window.scrollY;
        throttle(this.update(), 50);
      });
    }
  }

  update() {
    if (this.scrObj) {
      this.element.style.transform = "translateY(" + this.yOffset + "px)";
    } else {
      // console.log(this.yOffset);
      // this.element.style.top = this.yOffset + "px";
    }

    if (this.viewportWidth > 992) {
      if (this.yOffset < 200 && !this.isFull) {
        anime({
          targets: "#sticky-menu-offset",
          translateY: 0,
          easing: "easeInOutSine",
          duration: 200,
        });

        this.isFull = true;
      } else if (this.yOffset > 200 && this.isFull) {
        anime({
          targets: "#sticky-menu-offset",
          translateY: -40,
          easing: "easeInOutSine",
          duration: 200,
        });

        this.isFull = false;
      }
    } else {
      anime({
        targets: "#sticky-menu-offset",
        translateY: 0,
        easing: "easeInOutSine",
        duration: 1,
      });

      this.isFull = true;
    }
  }
}

export { Sticky };
