function setWpcf7Redirection() {
  console.log("query Contact MOdal");
  var wpcf7Elm = document.querySelector("#contactModal");

  console.log("init setWpcf7Redirection");
  console.log(wpcf7Elm);

  if (wpcf7Elm) {
    let thankYouPage;
    switch (window.location.pathname) {
      case "pt-br":
        thankYouPage = "obrigado";

      case "en-int":
        thankYouPage = "thank-you";

      default:
        thankYouPage = "gracias";
    }

    const redirectUrl =
      window.location.protocol +
      "//" +
      window.location.hostname +
      "/" +
      window.location.pathname +
      "/" +
      thankYouPage;

    console.log(redirectUrl);

    document.addEventListener(
      "wpcf7submit",
      function (event) {
        location = redirectUrl;
      },
      false
    );
  }
}

export default setWpcf7Redirection;
