import { region_table } from "../../../inc/region_table";

export function addListeners() {
  // Escuchamos el evento que indica que el form de Hubspot fue cargado
  window.addEventListener("message", (event) => {
    /*
     *  FUNCTION: AUTOLLENAR COUNTRY
     */

    if (
      event.data.type === "hsFormCallback" &&
      event.data.eventName === "onFormReady"
    ) {
      const iframe = document.querySelector(".hs-form-iframe");
      const countryInput = iframe.contentWindow.document.querySelector(
        'input[name="country"]'
      );

      let countryCode = window.location.pathname.split("/")[1];
      var countryName;

      region_table.forEach((language) => {
        if (language.code === countryCode) {
          countryName = language.es_name;
        }
      });

      if (countryInput) {
        countryInput.value = countryName;
      }
    }

    /*
     *  FUNCTION: Enviar valores de campos en la URL de la pagina de redireccion.
     *  Mediante Query String. Conviene filtrar por form para mayor control.
     */

    if (
      event.data.type === "hsFormCallback" &&
      event.data.eventName === "onFormSubmitted"
    ) {
      const iframe = document.querySelector(".hs-form-iframe");
      // event.data.id es el ID del form.

      const firstnameInput = iframe.contentWindow.document.querySelector(
        'input[name="firstname"]'
      );

      const emailInput = iframe.contentWindow.document.querySelector(
        'input[name="email"]'
      );

      const countryInput = iframe.contentWindow.document.querySelector(
        'input[name="country"]'
      );

      let temasDeInteresInput = Array.from(
        iframe.contentWindow.document.querySelectorAll(
          'input[name="temas_de_interes_de_newsletter"]'
        )
      );

      temasDeInteresInput = temasDeInteresInput.filter((tema) => tema.checked);

      const context = iframe.contentWindow.document.querySelector(
        'input[name="hs_context"]'
      );

      const contextObject = JSON.parse(context.value);

      const redirectUrl = new URL(contextObject.redirectUrl); // Retrieve the redirectUrl from the form settings

      const params = new URLSearchParams(redirectUrl.search);

      const fieldValues = [
        {
          name: "firstname",
          value: firstnameInput ? firstnameInput.value : "",
        },
        {
          name: "email",
          value: emailInput ? emailInput.value : "",
        },
        {
          name: "country",
          value: countryInput ? countryInput.value : "",
        },
        {
          name: "temas_de_interes_de_newsletter",
          value: temasDeInteresInput
            ? temasDeInteresInput.map((tema) => tema.value).join("+")
            : "",
        },
      ];

      fieldValues.forEach((field) => {
        if (field.value != "") {
          params.append(field.name, field.value);
        }
      });

      window.location.href =
        redirectUrl.toString().split("?")[0] + "?" + params;
    }
  });
}
