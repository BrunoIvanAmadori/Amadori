import { Sticky } from "../sticky.js";
import { enableAnimeSelectors } from "../timelines/general";
import { initResizer } from "../resizer";
import Webfontloader from "../../../node_modules/webfontloader/webfontloader";
import { init as hsFormsInit } from "../hubspot-forms/init";

Webfontloader.load({
  google: {
    families: ["Nunito"],
  },
  custom: {
    families: ["Brsonoma"],
    urls: ["/wp-content/themes/geovictoria-2021/dist/fonts/fonts.css"],
  },
  // active: function () {
  //   sessionStorage.fonts = true;
  // },
  timeout: 8000,
});

let stickyMenu = document.querySelector("#sticky-menu");

history.scrollRestoration = "manual";

console.log("Shared carga, history.scrollRestoration");

new Sticky(stickyMenu);

enableAnimeSelectors();
initResizer();
hsFormsInit();
