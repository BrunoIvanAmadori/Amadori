// init.js: Revisa forms, agrega listeners que llaman a submit de Hubspot.
// submit.js: Se comunica con Hubspot Forms.
// addListener: settea atributo y agrega listener

import { submitToHubspot } from "./submit";

function init() {
  console.log("hsforms init...");

  // Defining form list
  const forms = [];

  // Defining selectors

  // GDPR

  let potencialesClientesGdprSelector = ".potenciales-clientes.gdpr";
  let newsletterGdprSelector = ".newsletter.gdpr";
  let partnersGdprSelector = ".partners.gdpr";

  // NO-GDPR

  let potencialesClientesNoGdprSelector = ".potenciales-clientes.no-gdpr";
  let newsletterNoGdprSelector = ".newsletter.no-gdpr";
  let partnersNoGdprSelector = ".partners.no-gdpr";

  // Pushing form elements

  forms.push(
    {
      selector: potencialesClientesGdprSelector,
      el: document.querySelector(potencialesClientesGdprSelector),
      hs_id: "b6ec2c6a-f5c8-417c-9702-38b247a94b00",
    },
    {
      selector: newsletterGdprSelector,
      el: document.querySelector(newsletterGdprSelector),
      hs_id: "beb8d350-7dda-40cb-899e-fc52623c9147",
    },
    {
      selector: partnersGdprSelector,
      el: document.querySelector(partnersGdprSelector),
      hs_id: "be21e697-1790-4931-bf5e-5168d2464ca5",
    },
    {
      selector: potencialesClientesNoGdprSelector,
      el: document.querySelector(potencialesClientesNoGdprSelector),
      hs_id: "b645c41f-6dba-46e0-8812-7a59897a28e4",
    },
    {
      selector: newsletterNoGdprSelector,
      el: document.querySelector(newsletterNoGdprSelector),
      hs_id: "72f9ef58-1674-47c4-bdee-30ff960a1836",
    },
    {
      selector: partnersNoGdprSelector,
      el: document.querySelector(partnersNoGdprSelector),
      hs_id: "f4c0a656-0438-46df-899f-65d427f2f035",
    }
  );

  const addListener = (form) => {
    console.log(form);
    if (form.el && form.hs_id) {
      form.el.setAttribute("submitToHubspot", "true");

      form.el.addEventListener("submit", (ev) => {
        submitToHubspot(ev, form.hs_id);
        ev.preventDefault();
      });

      // console.log(form.el);
      // console.log(form.selector);
      // console.log(form.hs_id);
    }
  };

  forms.forEach((form) => {
    addListener(form);
  });
}

export { init };
