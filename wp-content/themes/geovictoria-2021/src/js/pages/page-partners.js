import Shared from "./_shared.js";
import { fslightbox } from "fslightbox";
import "../../scss/page-partners.scss";
import Splide from "@splidejs/splide";
import { initResizer } from "./_shared-mobile.js";
import "@splidejs/splide/dist/css/splide.min.css";

new Splide(".splide", {
  perPage: 3,
  breakpoints: {
    1100: {
      perPage: 3,
    },
    767: {
      perPage: 2,
    },
    564: {
      perPage: 1,
    },
  },
  lazyLoad: true,
  perMove: 1,
  pagination: false,
  gap: 30,
  height: 245,
}).mount();
