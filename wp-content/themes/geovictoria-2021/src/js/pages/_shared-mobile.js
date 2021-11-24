import { enableAnimeSelectors } from "../timelines/general";
import { initResizer } from "../resizer";
import Webfontloader from "../../../node_modules/webfontloader/webfontloader";
import setWpcf7Redirection from "../wpcf7-thankyou-redirection";

Webfontloader.load({
  google: {
    families: ["Nunito"],
  },
  custom: {
    families: ["Brsonoma"],
    urls: ["/wp-content/themes/geovictoria-2021/dist/fonts/fonts.css"],
  },
  active: function () {
    sessionStorage.fonts = true;
  },
  timeout: 8000,
});

console.log("shared-mobile-carga");

initResizer();
enableAnimeSelectors();
setWpcf7Redirection();

const progressBar = document.querySelector(".readingProgressbar");
if (progressBar) {
  progressBar.setAttribute("value", 0);
}

export { enableAnimeSelectors, initResizer };
