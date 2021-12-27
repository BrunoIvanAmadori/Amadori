// init.js: Revisa forms, agrega listeners que llaman a submit de Hubspot.
// submit.js: Se comunica con Hubspot Forms.
// addListener: settea atributo y agrega listener

import { doSubmitToHubspot } from "./submit";

var forms = [];

function init() {
  console.log("hsforms init...");

  // Defining form list

  // Defining selectors

  // GDPR

  let potencialesClientesGdprSelector = ".potenciales-clientes.gdpr";
  let newsletterGdprSelector = ".newsletter.gdpr";
  let partnersGdprSelector = ".partners.gdpr";
  let calculadoraGdprSelector = ".calculadora.gdpr";

  // NO-GDPR

  let potencialesClientesNoGdprSelector = ".potenciales-clientes.no-gdpr";
  let newsletterNoGdprSelector = ".newsletter.no-gdpr";
  let partnersNoGdprSelector = ".partners.no-gdpr";
  let calculadoraNoGdprSelector = ".calculadora.no-gdpr";

  // Pushing form elements

  forms.push(
    {
      selector: potencialesClientesGdprSelector,
      el: document.querySelector(potencialesClientesGdprSelector),
      hs_id: "b645c41f-6dba-46e0-8812-7a59897a28e4",
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
      selector: calculadoraGdprSelector,
      el: document.querySelector(calculadoraGdprSelector),
      hs_id: "d4b1bef3-1679-4c79-9de4-da471d705e4c",
    },
    {
      selector: potencialesClientesNoGdprSelector,
      el: document.querySelector(potencialesClientesNoGdprSelector),
      hs_id: "b6ec2c6a-f5c8-417c-9702-38b247a94b00",
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
    },
    {
      selector: calculadoraNoGdprSelector,
      el: document.querySelector(calculadoraNoGdprSelector),
      hs_id: "ef67be8a-fc07-4b71-9fb7-f4a542d2ae3a",
    }
  );

  // escuchamos envios de Contact Form 7
  document.addEventListener("wpcf7submit", function (event) {
    console.log("wpcf7submit");
    if (event.target.classList.contains("sent")) {
      console.log("Si, tiene sent.");
      forms.forEach((form) => {
        console.log(form);
        if (form.el && form.hs_id) {
          console.log("paso form.el && form.hs_id");
          console.log(form.el, form.hs_id);
          if (form.el == event.target) {
            console.log("form.el == event.target");
            doSubmitToHubspot(event.target, form.hs_id);
            form.el.setAttribute("submittedToHubspot", "true");
            console.log("Contact Form 7 Submitted to Hubspot.");
          }
        }
      });
    }
  });

  // escuchamos envios de Calculadora
  document.addEventListener("calculator-submit", function (event) {
    console.log("calculator-submit");
    // console.log(event.target);
    forms.forEach((form) => {
      if (form.el && form.hs_id) {
        if (form.el == event.target) {
          doSubmitToHubspot(event.target, form.hs_id);
          form.el.setAttribute("submittedToHubspot", "true");
          console.log("Calculator form submitted to Hubspot.");
        }
      }
    });
  });

  // const addListener = (form) => {
  //   console.log(form);
  //   if (form.el && form.hs_id) {
  //     form.el.setAttribute("doSubmitToHubspot", "true");

  //     form.el.addEventListener("submit", (ev) => {
  //       doSubmitToHubspot(ev, form.hs_id);
  //       ev.preventDefault();
  //     });
  //   }
  // };

  // forms.forEach((form) => {
  //   addListener(form);
  // });
}

// funcion accesible desde HTML que permite enviar form a Hubspot - la uso para la calculadora
// function sendToHubspot(senderEl) {
//   forms.forEach((form) => {
//     if (form.el == senderEl) {
//       doSubmitToHubspot(form.el, form.hs_id);
//     }
//   });
// }

export { init };
