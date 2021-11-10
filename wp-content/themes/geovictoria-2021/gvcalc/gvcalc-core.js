(ind = "ot"), (descuent = false);

let total = 0;

let pricer = "Cargando..."; // ejemplo: USD 20.23$
let gv_price = pricer;
let urlString = window.location.href;
let locationString = urlString.split("/"); // de aca necesitamos la posicion 3 del array
let userLocation = locationString[3];
var site = userLocation;
let pmayor = 200;
let pmayores = "asistencia";
// hay que tener en cuenta el entorno .es ya que ese no utiliza WPLM y por ende no devolvera
// una divisa valida.

let newInitialValue = document.getElementById("total-general-box"); //
let totalGeneralValue = document.getElementById("total-general"); //
let newCurrencybox = document.getElementById("currencyGV-box"); //este id no existe en prod
let newCurrencygeneral = document.getElementById("currencyGV-general"); //este id no existe en prod

//por el momento esto va hardcodeado para probar la funcionalidad, pero habria que crear
//un endpoint cona lgun plugin en donde el cliente pueda escribir los valores facilmente
//lo retomamos de ahi

var config = { method: "GET", mode: "no-cors", cache: "default" };

fetch("/gv_handler.php?getValues=" + userLocation, config)
  .then((response) => response.json())
  .then((jsonResponse) => {
    gv_price = jsonResponse;
    currency = gv_price.moneda;
    newCurrencybox.innerText = currency;
    newCurrencygeneral.innerText = currency;
    newInitialValue.innerText = pricer;
    totalGeneralValue.innerText = pricer;
  });

var preformat = 0;

const totalGeneralHTML = document.getElementById("total-general"),
  totalxAsistenciaHTML = document.getElementById("total-asistencia"),
  personasAsistencialHTML = document.getElementById("personas-asistencia"),
  asistenciaBoxlHTML = document.getElementById("asistencia-box"),
  accesoBoxlHTML = document.getElementById("acceso-box"),
  comedorBoxlHTML = document.getElementById("comedor-box"),
  externosBoxlHTML = document.getElementById("externos-box"),
  subprodBoxlHTML = document.getElementById("subproductos-box");
totalEmpleadosHTML = document.getElementById("total-empleados-input");

var gvProds = {
  Asistencia: !0,
  Acceso: !1,
  Comedor: !1,
  Externos: !1,
  Powerbi: !1,
  Reporte: !1,
  Formapp: !1,
  Optimizador: !1,
  Integraerp: !1,
  Soporte: !1,
};

var totalEmpleadosVar = {
  Empleados: 0,
  Asistencia: 0,
  Acceso: 0,
  Comedor: 0,
  Externos: 0,
};

var totalVar = {
  General: 0,
  Asistencia: 0,
  Acceso: 0,
  Comedor: 0,
  Externos: 0,
  Powerbi: 0,
  Reporte: 0,
  Formapp: 0,
  Optimizador: 0,
  Integraerp: 0,
  Soporte: 0,
};

var xusr = {
  Asistencia: 0,
  Acceso: 0,
  Comedor: 0,
  Externos: 0,
};

window.onload = function () {
  initCalculator();
};

const calcTarifaXPersona = (a, c, b) => {
    let d = `${c / a + b}`.split(".");
    return parseFloat(`${d[0]}.${d[1].slice(0, 3)}`) * a;
  },
  initCalculator = () => {
    document.getElementById("industria-select").value = ind;
    (totalEmpleados = 200),
      (document.getElementById(
        "total-empleados-input"
      ).value = `${totalEmpleados}`),
      (totalEmpleadosVar.Asistencia = 200),
      (document.getElementById(
        "total-empleados-asistencia-input"
      ).value = `${totalEmpleados}`),
      nonLinearSlider.noUiSlider.set(200),
      (totalVar.General = 0);
    gvProds.Asistencia = true; // se agrega esta linea para no creashear todo!! LAVILLA ALEJANDRO
    triggerChanges();
  },
  updateTemplate = (d = null) => {
    if (d === true) descuent = d;
    else if (d === false) descuent = d;

    (subprodBoxlHTML.innerText = ""), (subprodBox = "");
    gvProds.Powerbi && (subprodBox += " Dashboard BI,"),
      gvProds.Reporte && (subprodBox += " Reportes personalizados,"),
      gvProds.Formapp && (subprodBox += " Formulario App,"),
      gvProds.Optimizador && (subprodBox += " Optimizador de turnos,"),
      gvProds.Integraerp && (subprodBox += " Integración con otros sistemas,"),
      gvProds.Soporte && (subprodBox += " Soporte 24/7,");
    subprodBoxlHTML.innerText = subprodBox.slice(0, -1) + ".";

    if (descuent == true) {
      desc = (totalVar.General * 20) / 100;
      total = totalVar.General - desc;

      desc = (xusr.Asistencia * 20) / 100;
      montoas = Math.floor(xusr.Asistencia - desc);

      desc = (xusr.Acceso * 20) / 100;
      montoac = Math.floor(xusr.Acceso - desc);

      desc = (xusr.Comedor * 20) / 100;
      montoco = Math.floor(xusr.Comedor - desc);

      desc = (xusr.Externos * 20) / 100;
      montoex = Math.floor(xusr.Externos - desc);

      desc = (totalVar.Asistencia * 20) / 100;
      totalVar.Asistencia = totalVar.Asistencia - desc;

      desc = (totalVar.Acceso * 20) / 100;
      totalVar.Acceso = totalVar.Acceso - desc;

      desc = (totalVar.Comedor * 20) / 100;
      totalVar.Comedor = totalVar.Comedor - desc;

      desc = (totalVar.Externos * 20) / 100;
      totalVar.Externos = totalVar.Externos - desc;

      desc = (totalVar.Powerbi * 20) / 100;
      totalVar.Powerbi = totalVar.Powerbi - desc;

      desc = (totalVar.Reporte * 20) / 100;
      totalVar.Reporte = totalVar.Reporte - desc;

      desc = (totalVar.Formapp * 20) / 100;
      totalVar.Formapp = totalVar.Formapp - desc;

      desc = (totalVar.Optimizador * 20) / 100;
      totalVar.Optimizador = totalVar.Optimizador - desc;

      desc = (totalVar.Integraerp * 20) / 100;
      totalVar.Integraerp = totalVar.Integraerp - desc;

      desc = (totalVar.Soporte * 20) / 100;
      totalVar.Soporte = totalVar.Soporte - desc;
    } else {
      totalCalc();
      total = totalVar.General;
      totalVar.Asistencia = totalVar.Asistencia;
      totalVar.Acceso = totalVar.Acceso;
      totalVar.Comedor = totalVar.Comedor;
      totalVar.Externos = totalVar.Externos;

      montoas = xusr.Asistencia;
      montoac = xusr.Acceso;
      montoco = xusr.Comedor;
      montoex = xusr.Externos;
    }

    if (total < 1000) preformat = 2;
    else preformat = 0;

    totalGeneralHTML.innerText = numberWithCommas(
      parseFloat(total).toFixed(preformat)
    );
    document.getElementById("total-general-box").innerText = numberWithCommas(
      parseFloat(total).toFixed(preformat)
    );

    // Refactoring - LAVILLA ALEJANDRO - This values are setted withouth a condition and bug the whole process

    if (!gvProds.Asistencia) asistenciaBoxlHTML.innerText = 0;
    else {
      montoas > 1000 ? (temp_preformat = 0) : (temp_preformat = 2);
      asistenciaBoxlHTML.innerText = montoas.toFixed(temp_preformat);
    }

    if (!gvProds.Acceso) accesoBoxlHTML.innerText = 0;
    else {
      montoas > 1000 ? (temp_preformat = 0) : (temp_preformat = 2);
      accesoBoxlHTML.innerText = montoac.toFixed(temp_preformat);
    }

    if (!gvProds.Comedor) comedorBoxlHTML.innerText = 0;
    else {
      montoas > 1000 ? (temp_preformat = 0) : (temp_preformat = 2);
      comedorBoxlHTML.innerText = montoco.toFixed(temp_preformat);
    }

    if (!gvProds.Externos) externosBoxlHTML.innerText = 0;
    else {
      montoas > 1000 ? (temp_preformat = 0) : (temp_preformat = 2);
      externosBoxlHTML.innerText = montoex.toFixed(temp_preformat);
    }

    1e3 <= totalEmpleados
      ? (document.getElementById("resumen-text").classList.remove("active"),
        document.getElementById("resumen-btn").classList.add("active"),
        (document.getElementById("banner-side").style.display = "block"),
        (document.getElementById("calc-side").style.display = "none"))
      : (document.getElementById("resumen-text").classList.add("active"),
        document.getElementById("resumen-btn").classList.remove("active"),
        (document.getElementById("banner-side").style.display = "none"),
        (document.getElementById("calc-side").style.display = "block"));
  };

function error() {
  console.log("Error en el calculo");
}

const totalCalc = () => {
  let noValidate = 0;

  (valueUP = 0),
    (mensajeCotizacion = 0),
    (mappingCount_1 = 0),
    (totalVar.General = 0),
    (totalVar.Asistencia = 0),
    (totalVar.Acceso = 0),
    (totalVar.Comedor = 0),
    (totalVar.Externos = 0),
    (totalVar.Powerbi = 0),
    (totalVar.Reporte = 0),
    (totalVar.Formapp = 0),
    (totalVar.Optimizador = 0),
    (totalVar.Integraerp = 0),
    (totalVar.Soporte = 0);

  mapping_1 = [
    "Asistencia",
    "Acceso",
    "Comedor",
    "Externos",
    "Powerbi",
    "Reporte",
    "Formapp",
    "Optimizador",
    "Integraerp",
    "Soporte",
  ];
  mapping_2 = [
    "1a4",
    "5a10",
    "11a20",
    "21a50",
    "51a100",
    "101a200",
    "201a500",
    "501a1000",
    "mes",
  ];

  mapping_1.forEach((key1) => {
    mapping_2.forEach((key2) => {
      temp_range = key2.split("a");

      if (mappingCount_1 <= 3) {
        empleadosKey = totalEmpleadosVar[key1];

        if (empleadosKey < 5 && empleadosKey != 0) {
          empleadosKey = 1;
        }

        if (empleadosKey > 1000) {
          empleadosKey = 1000;
          totalEmpleados = 1000;
          totalEmpleadosVar[key1] = 1000;
        }

        (empleadosKey != 0 &&
          empleadosKey >= parseInt(temp_range[0]) &&
          empleadosKey <= parseInt(temp_range[1]) &&
          gvProds[key1]) ||
        noValidate
          ? gvProds[key1] &&
            ((totalVar[key1] =
              parseFloat(gv_price[key1 + "_" + key2]) * empleadosKey),
            (totalVar.General += totalVar[key1]),
            (xusr[key1] = gv_price[key1 + "_" + key2] * gv_price.unidad_cuenta))
          : //console.log("Calculated " + gvProds[key1] + " for range " + temp_range[0] + " to " + temp_range[1] + " = " + totalVar[key1])
            null;

        console.log(
          "Pass 1er from here and add " +
            gv_price[key1 + "_" + key2] * empleadosKey +
            " with " +
            key1 +
            key2
        );
      }
      if (mappingCount_1 >= 4) {
        empleadosKey = totalEmpleados;

        if (empleadosKey < 5) {
          empleadosKey = 1;

          if (key2 == "mes") noValidate = 1;

          //Con este else if seteamos cualquier diferencia mayor a 1000 a 1000 empleados y activamos el mensaje
        } else if (empleadosKey > 1000) {
          empleadosKey = 1000;
          totalEmpleados = 1000;
          totalEmpleadosVar[key1] = 1000;
          mensajeCotizacion = 1;
        }
        //devolvemos siempre 1 en este caso ya que los montos son fijos hasta 4 empleados
        if (
          (empleadosKey >= parseInt(temp_range[0]) &&
            empleadosKey <= parseInt(temp_range[1]) &&
            gvProds[key1]) ||
          (key2 == "mes" && gvProds[key1])
        ) {
          if (key2 != "mes") {
            console.log(
              "Pass from here and add " +
                gv_price[key1 + "_" + key2] * empleadosKey +
                " with " +
                key1 +
                key2
            );
            totalVar[key1] += parseFloat(
              gv_price[key1 + "_" + key2] * empleadosKey
            );
            totalVar.General += parseFloat(
              gv_price[key1 + "_" + key2] * empleadosKey
            );
          } else {
            console.log(
              "And the mensual is " +
                gv_price[key1 + "_" + key2] * empleadosKey +
                " with " +
                key1 +
                key2
            );
            totalVar[key1] += parseFloat(gv_price[key1 + "_" + key2]);
            totalVar.General += parseFloat(gv_price[key1 + "_" + key2]);
          }
        }
      }
    });

    mappingCount_1++;
  });
};

(triggerChanges = () => {
  totalCalc(), updateTemplate();
}),
  (totalEmpleadosAction = () => {
    (totalEmpleados = parseInt(
      document.getElementById("total-empleados-input").value
    )),
      updateInputProds(totalEmpleados),
      nonLinearSlider.noUiSlider.set([
        document.getElementById("total-empleados-input").value || 0,
      ]),
      triggerChanges();
  }),
  (totalEmpleadosProductoAction = (p) => {
    p == "asist"
      ? ((totalEmpleadosVar.Asistencia = parseInt(
          document.getElementById("total-empleados-asistencia-input").value
        )),
        totalEmpleadosVar.Asistencia > totalEmpleados
          ? ((totalEmpleados = totalEmpleadosVar.Asistencia),
            setTotalEmpleados())
          : checkTotalEmpleados())
      : p == "acces"
      ? ((totalEmpleadosVar.Acceso = parseInt(
          document.getElementById("total-empleados-acceso-input").value
        )),
        totalEmpleadosVar.Acceso > totalEmpleados
          ? ((totalEmpleados = totalEmpleadosVar.Acceso), setTotalEmpleados())
          : checkTotalEmpleados())
      : p == "comed"
      ? ((totalEmpleadosVar.Comedor = parseInt(
          document.getElementById("total-empleados-comedor-input").value
        )),
        totalEmpleadosVar.Comedor > totalEmpleados
          ? ((totalEmpleados = totalEmpleadosVar.Comedor), setTotalEmpleados())
          : checkTotalEmpleados())
      : p == "exter"
      ? ((totalEmpleadosVar.Externos = parseInt(
          document.getElementById("total-empleados-externos-input").value
        )),
        totalEmpleadosVar.Externos > totalEmpleados
          ? ((totalEmpleados = totalEmpleadosVar.Externos), setTotalEmpleados())
          : checkTotalEmpleados())
      : null;

    //totalEmpleadosAsistencia = (parseIntdocument.getElementById("total-empleados-asistencia-input").value),
    triggerChanges();
  }),
  (setTotalEmpleados = () => {
    if (empleadosKey == 1000)
      checkNewMayor(),
        console.log("UP -> " + pmayor),
        (document.getElementById("total-empleados-input").value = pmayor);
    else
      console.log("DOWN -> " + totalEmpleados),
        (document.getElementById(
          "total-empleados-input"
        ).value = totalEmpleados),
        nonLinearSlider.noUiSlider.set([
          document.getElementById("total-empleados-input").value || 0,
        ]);
  }),
  (checkNewMayor = () => {
    pmayor = 0;

    gvProds.Asistencia
      ? totalEmpleadosVar.Asistencia > pmayor
        ? ((pmayor = parseInt(
            document.getElementById("total-empleados-asistencia-input").value
          )),
          (document.getElementById("total-empleados-input").value = pmayor),
          console.log("P mayor ahora es Asistencia" + pmayor),
          (pmayores = "asistencia"))
        : null
      : null;
    gvProds.Acceso
      ? totalEmpleadosVar.Acceso > pmayor
        ? ((pmayor = parseInt(
            document.getElementById("total-empleados-acceso-input").value
          )),
          (document.getElementById("total-empleados-input").value = pmayor),
          console.log("P mayor ahora es Acceso" + pmayor),
          (pmayores = "acceso"))
        : null
      : null;
    gvProds.Comedor
      ? totalEmpleadosVar.Comedor > pmayor
        ? ((pmayor = parseInt(
            document.getElementById("total-empleados-comedor-input").value
          )),
          (document.getElementById("total-empleados-input").value = pmayor),
          console.log("P mayor ahora es Comedor" + pmayor),
          (pmayores = "comedor"))
        : null
      : null;
    gvProds.Externos
      ? totalEmpleadosVar.Externos > pmayor
        ? ((pmayor = parseInt(
            document.getElementById("total-empleados-externos-input").value
          )),
          (document.getElementById("total-empleados-input").value = pmayor),
          console.log("P mayor ahora es Externos" + pmayor),
          (pmayores = "externos"))
        : null
      : null;
  }),
  (checkTotalEmpleados = () => {
    gvProds.Asistencia
      ? totalEmpleadosVar.Asistencia > pmayor
        ? ((pmayor = parseInt(
            document.getElementById("total-empleados-asistencia-input").value
          )),
          (document.getElementById("total-empleados-input").value = pmayor),
          console.log("P mayor ahora es Asistencia" + pmayor),
          (pmayores = "asistencia"))
        : null
      : null;
    gvProds.Acceso
      ? totalEmpleadosVar.Acceso > pmayor
        ? ((pmayor = parseInt(
            document.getElementById("total-empleados-acceso-input").value
          )),
          (document.getElementById("total-empleados-input").value = pmayor),
          console.log("P mayor ahora es Acceso" + pmayor),
          (pmayores = "acceso"))
        : null
      : null;
    gvProds.Comedor
      ? totalEmpleadosVar.Comedor > pmayor
        ? ((pmayor = parseInt(
            document.getElementById("total-empleados-comedor-input").value
          )),
          (document.getElementById("total-empleados-input").value = pmayor),
          console.log("P mayor ahora es Comedor" + pmayor),
          (pmayores = "comedor"))
        : null
      : null;
    gvProds.Externos
      ? totalEmpleadosVar.Externos > pmayor
        ? ((pmayor = parseInt(
            document.getElementById("total-empleados-externos-input").value
          )),
          (document.getElementById("total-empleados-input").value = pmayor),
          console.log("P mayor ahora es Externos" + pmayor),
          (pmayores = "externos"))
        : null
      : null;

    totalEmpleados > pmayor
      ? ((totalEmpleados = pmayor), (pmayores = "totalemp"))
      : null;

    console.log(pmayores);
    setTotalEmpleados();
  }),
  (actionPeriodo = (p) => {
    if (p == "A") {
      if (
        !document.getElementById("anual-bt").classList.contains("is-selected")
      ) {
        document.getElementById("mensual-bt").classList.remove("is-selected");
        document.getElementById("mensual-bt").classList.remove("is-info");
        document.getElementById("anual-bt").classList.add("is-selected");
        document.getElementById("anual-bt").classList.add("is-info");
        updateTemplate(true);
      }
    } else {
      if (
        !document.getElementById("mensual-bt").classList.contains("is-selected")
      ) {
        document.getElementById("anual-bt").classList.remove("is-selected");
        document.getElementById("anual-bt").classList.remove("is-info");
        document.getElementById("mensual-bt").classList.add("is-selected");
        document.getElementById("mensual-bt").classList.add("is-info");
        updateTemplate(false);
      }
    }
  }),
  (actionProducts = (a = null, b = null) => {
    if (
      !(
        !gvProds.Asistencia &&
        !gvProds.Acceso &&
        !gvProds.Comedor &&
        !gvProds.Externos &&
        (b.indexOf("powerbi") != -1 ||
          b.indexOf("reporte") != -1 ||
          b.indexOf("formapp") != -1 ||
          b.indexOf("optimizador") != -1 ||
          b.indexOf("integraerp") != -1 ||
          b.indexOf("soporte") != -1)
      )
    ) {
      const c = document.getElementById(b);
      c.parentElement.parentElement.classList.contains("active")
        ? (c.parentElement.parentElement.classList.remove("active"),
          c.classList.replace(
            "mdi-check-circle-outline",
            "mdi-checkbox-blank-circle-outline"
          ),
          b.indexOf("asist") != -1
            ? ((document.getElementById(
                "total-empleados-asistencia-input"
              ).value = 0),
              (document.getElementById(
                "total-empleados-asistencia-input"
              ).readOnly = true),
              (asistenciaBoxlHTML.innerText = 0),
              console.log("Changing Asistencia to 0!!"),
              (xusr.Asistencia = 0),
              totalEmpleadosProductoAction("asist"),
              (totalVar.Asistencia = 0))
            : b.indexOf("acces") != -1
            ? ((document.getElementById(
                "total-empleados-acceso-input"
              ).value = 0),
              (document.getElementById(
                "total-empleados-acceso-input"
              ).readOnly = true),
              (accesoBoxlHTML.innerText = 0),
              (totalVar.Acceso = 0),
              (xusr.Acceso = 0),
              totalEmpleadosProductoAction("acces"))
            : b.indexOf("comed") != -1
            ? ((document.getElementById(
                "total-empleados-comedor-input"
              ).value = 0),
              (document.getElementById(
                "total-empleados-comedor-input"
              ).readOnly = true),
              (comedorBoxlHTML.innerText = 0),
              (totalVar.Comedor = 0),
              (xusr.Comedor = 0),
              totalEmpleadosProductoAction("comed"))
            : b.indexOf("exter") != -1
            ? ((document.getElementById(
                "total-empleados-externos-input"
              ).value = 0),
              (document.getElementById(
                "total-empleados-externos-input"
              ).readOnly = true),
              (externosBoxlHTML.innerText = 0),
              (totalVar.Externos = 0),
              (xusr.Externos = 0),
              totalEmpleadosProductoAction("exter"))
            : null)
        : (c.parentElement.parentElement.classList.add("active"),
          c.classList.replace(
            "mdi-checkbox-blank-circle-outline",
            "mdi-check-circle-outline"
          ),
          b.indexOf("asist") != -1
            ? ((document.getElementById(
                "total-empleados-asistencia-input"
              ).value = document.getElementById("total-empleados-input").value),
              (totalEmpleadosVar.Asistencia = parseInt(
                document.getElementById("total-empleados-asistencia-input")
                  .value
              )),
              (document.getElementById(
                "total-empleados-asistencia-input"
              ).readOnly = false))
            : b.indexOf("acces") != -1
            ? ((document.getElementById(
                "total-empleados-acceso-input"
              ).value = document.getElementById("total-empleados-input").value),
              (totalEmpleadosVar.Acceso = parseInt(
                document.getElementById("total-empleados-acceso-input").value
              )),
              (document.getElementById(
                "total-empleados-acceso-input"
              ).readOnly = false))
            : b.indexOf("comed") != -1
            ? ((document.getElementById(
                "total-empleados-comedor-input"
              ).value = document.getElementById("total-empleados-input").value),
              (totalEmpleadosVar.Comedor = parseInt(
                document.getElementById("total-empleados-comedor-input").value
              )),
              (document.getElementById(
                "total-empleados-comedor-input"
              ).readOnly = false))
            : b.indexOf("exter") != -1
            ? ((document.getElementById(
                "total-empleados-externos-input"
              ).value = document.getElementById("total-empleados-input").value),
              (totalEmpleadosVar.Externos = parseInt(
                document.getElementById("total-empleados-externos-input").value
              )),
              (document.getElementById(
                "total-empleados-externos-input"
              ).readOnly = false))
            : null),
        (gvProds[a] = !gvProds[a]);

      if (
        !gvProds.Asistencia &&
        !gvProds.Acceso &&
        !gvProds.Comedor &&
        !gvProds.Externos
      ) {
        d = document.getElementById("check-powerbi");
        d.parentElement.parentElement.classList.contains("active")
          ? (d.parentElement.parentElement.classList.remove("active"),
            d.classList.replace(
              "mdi-check-circle-outline",
              "mdi-checkbox-blank-circle-outline"
            ),
            (totalVar.Powerbi = 0),
            (gvProds.Powerbi = !1))
          : null;

        d = document.getElementById("check-reporte");
        d.parentElement.parentElement.classList.contains("active")
          ? (d.parentElement.parentElement.classList.remove("active"),
            d.classList.replace(
              "mdi-check-circle-outline",
              "mdi-checkbox-blank-circle-outline"
            ),
            (totalVar.Reporte = 0),
            (gvProds.Reporte = !1))
          : null;

        d = document.getElementById("check-formapp");
        d.parentElement.parentElement.classList.contains("active")
          ? (d.parentElement.parentElement.classList.remove("active"),
            d.classList.replace(
              "mdi-check-circle-outline",
              "mdi-checkbox-blank-circle-outline"
            ),
            (totalVar.Formapp = 0),
            (gvProds.Formapp = !1))
          : null;

        d = document.getElementById("check-optimizador");
        d.parentElement.parentElement.classList.contains("active")
          ? (d.parentElement.parentElement.classList.remove("active"),
            d.classList.replace(
              "mdi-check-circle-outline",
              "mdi-checkbox-blank-circle-outline"
            ),
            (totalVar.Optimizador = 0),
            (gvProds.Optimizador = !1))
          : null;

        d = document.getElementById("check-integraerp");
        d.parentElement.parentElement.classList.contains("active")
          ? (d.parentElement.parentElement.classList.remove("active"),
            d.classList.replace(
              "mdi-check-circle-outline",
              "mdi-checkbox-blank-circle-outline"
            ),
            (totalVar.Integraerp = 0),
            (gvProds.Integraerp = !1))
          : null;

        d = document.getElementById("check-soporte");
        d.parentElement.parentElement.classList.contains("active")
          ? (d.parentElement.parentElement.classList.remove("active"),
            d.classList.replace(
              "mdi-check-circle-outline",
              "mdi-checkbox-blank-circle-outline"
            ),
            (totalVar.Soporte = 0),
            (gvProds.Soporte = !1))
          : null;
      }
      //const d = document.getElementById("total-asistencia-container");
      //gvProds.GestionAcceso ? d.classList.add("active") : d.classList.remove("active"),
      triggerChanges();
    }
  }),
  (industryAction = () => {
    var selectBox = document.getElementById("industria-select");
    ind = selectBox.options[selectBox.selectedIndex].value;
    //alert(selectedValue);
    document.getElementById("industria-img").src =
      "./gvcalc/img/ind_" + ind + ".png";
  }),
  (updateInputProds = (e) => {
    gvProds.Asistencia
      ? ((document.getElementById(
          "total-empleados-asistencia-input"
        ).value = e),
        (totalEmpleadosVar.Asistencia = e))
      : null;
    gvProds.Acceso
      ? ((document.getElementById("total-empleados-acceso-input").value = e),
        (totalEmpleadosVar.Acceso = e))
      : null;
    gvProds.Comedor
      ? ((document.getElementById("total-empleados-comedor-input").value = e),
        (totalEmpleadosVar.Comedor = e))
      : null;
    gvProds.Externos
      ? ((document.getElementById("total-empleados-externos-input").value = e),
        (totalEmpleadosVar.Externos = e))
      : null;
  });
var nonLinearSlider = document.getElementById("myRange");
noUiSlider.create(nonLinearSlider, {
  start: [1],
  range: {
    min: [1],
    "50%": [500],
    max: [1e3],
  },
}),
  nonLinearSlider.noUiSlider.on("slide", (a) => {
    (totalEmpleados = parseInt(a[0])),
      (document.getElementById("total-empleados-input").value = `${parseInt(
        a[0]
      )}`),
      updateInputProds(totalEmpleados),
      /*
	document.getElementById("total-empleados-asistencia-input").value = `${parseInt(a[0])}`, 
	totalEmpleadosAsistencia = parseInt(document.getElementById("total-empleados-asistencia-input").value), */
      triggerChanges();
  }),
  initCalculator();

const containList = document.querySelectorAll(".tabs-contain"),
  tabsContainer = document.getElementById("tabs-list"),
  activeTab = (a = null, b = null) => {
    const c = document.getElementById(b),
      d = c.parentNode.childNodes;
    d.forEach((a) => {
      if (a.nodeName != "#text") {
        a.classList.remove("is-active");
      }
    }),
      c.classList.add("is-active"),
      containList.forEach((a) => {
        a.classList.remove("active");
      }),
      document.getElementById(a).classList.add("active");
    for (let c = 0; c < d.length; c++) {
      if (d[c].nodeName != "#text") {
        if (d[c].classList.contains("is-active") && 0 === c) {
          document.getElementById("prev-tab").classList.add("hidden");
          break;
        } else
          document.getElementById("prev-tab").classList.remove("hidden"),
            document.getElementById("next-tab").classList.remove("hidden");
        if (d[c].classList.contains("is-active") && c === d.length - 1) {
          document.getElementById("next-tab").classList.add("hidden");
          break;
        } else
          document.getElementById("next-tab").classList.remove("hidden"),
            document.getElementById("prev-tab").classList.remove("hidden");
      }
    }
  },
  nextTab = () => {
    const a = document.querySelectorAll(".tab");
    for (let b = 0; b < a.length; b++)
      if (a[b].classList.contains("is-active")) {
        a[b].classList.remove("is-active"),
          a[b + 1].classList.add("is-active"),
          containList.forEach((a) => {
            a.classList.remove("active");
          }),
          document
            .getElementById(a[b + 1].classList[1])
            .classList.add("active"),
          b + 2 === a.length
            ? document.getElementById("next-tab").classList.add("hidden")
            : document.getElementById("next-tab").classList.remove("hidden"),
          document.getElementById("prev-tab").classList.remove("hidden");
        break;
      }
  },
  prevTab = () => {
    const a = document.querySelectorAll(".tab");
    for (let b = 0; b < a.length; b++)
      if (a[b].classList.contains("is-active")) {
        a[b].classList.remove("is-active"),
          a[b - 1].classList.add("is-active"),
          containList.forEach((a) => {
            a.classList.remove("active");
          }),
          document
            .getElementById(a[b - 1].classList[1])
            .classList.add("active"),
          0 == b - 1
            ? document.getElementById("prev-tab").classList.add("hidden")
            : document.getElementById("prev-tab").classList.remove("hidden"),
          document.getElementById("next-tab").classList.remove("hidden");
        break;
      }
  },
  cotizationtoPdf = () => {
    const form = document.getElementById("cotizacion-form");
    periodo = "Mensual";
    if (descuent === true) periodo = "Anual";
    console.log("DOWN");

    queryer =
      "?s=" +
      site +
      "&url=" +
      theme_vars.theme_uri + // agrego la url del sitio para que la pueda recoger el calculator-pdf-download
      "&i=" +
      ind +
      "&div=" +
      gv_price.moneda +
      "&p=" +
      periodo +
      "&t=" +
      numberWithCommas(parseFloat(total).toFixed(preformat)) +
      "&tas=" +
      numberWithCommas(parseFloat(totalVar.Asistencia)).toFixed(preformat) +
      "&tac=" +
      numberWithCommas(parseFloat(totalVar.Acceso).toFixed(preformat)) +
      "&tco=" +
      numberWithCommas(parseFloat(totalVar.Comedor).toFixed(preformat)) +
      "&tex=" +
      numberWithCommas(parseFloat(totalVar.Externos).toFixed(preformat)) +
      "&tpo=" +
      parseFloat(totalVar.Powerbi).toFixed(preformat) +
      "&tre=" +
      parseFloat(totalVar.Reporte).toFixed(preformat) +
      "&tfo=" +
      parseFloat(totalVar.Formapp).toFixed(preformat) +
      "&top=" +
      parseFloat(totalVar.Optimizador).toFixed(preformat) +
      "&tin=" +
      parseFloat(totalVar.Integraerp).toFixed(preformat) +
      "&tso=" +
      parseFloat(totalVar.Soporte).toFixed(preformat) +
      "&uto=" +
      totalEmpleados +
      "&uas=" +
      totalEmpleadosVar.Asistencia +
      "&uac=" +
      totalEmpleadosVar.Acceso +
      "&uco=" +
      totalEmpleadosVar.Comedor +
      "&uex=" +
      totalEmpleadosVar.Externos +
      "&pas=" +
      asistenciaBoxlHTML.innerText +
      "&pac=" +
      accesoBoxlHTML.innerText +
      "&pco=" +
      comedorBoxlHTML.innerText +
      "&pex=" +
      externosBoxlHTML.innerText +
      "&fn=" +
      form.name.value +
      "&fap=" +
      form.lastname.value +
      "&fm=" +
      form.email.value +
      "&fe=" +
      form.company.value +
      "&ft=" +
      form.phone.value;
    var link = document.createElement("a");
    link.href = theme_vars.theme_uri + "/calculator-pdf-download.php" + queryer;
    link.click();
    console.log("LOADING");
  },
  cotizationtoMail = () => {
    const form = document.getElementById("cotizacion-form");
    periodo = "Mensual";
    if (descuent === true) periodo = "Anual";

    query =
      "?s=" +
      site +
      "&url=" +
      theme_vars.theme_uri + // agrego la url del sitio para que la pueda recoger el calculator-sendmail
      "&i=" +
      ind +
      "&p=" +
      periodo +
      "&t=" +
      parseFloat(total).toFixed(preformat) +
      "&tas=" +
      parseFloat(totalVar.Asistencia).toFixed(preformat) +
      "&tac=" +
      parseFloat(totalVar.Acceso).toFixed(preformat) +
      "&tco=" +
      parseFloat(totalVar.Comedor).toFixed(preformat) +
      "&tex=" +
      parseFloat(totalVar.Externos).toFixed(preformat) +
      "&tpo=" +
      parseFloat(totalVar.Powerbi).toFixed(preformat) +
      "&tre=" +
      parseFloat(totalVar.Reporte).toFixed(preformat) +
      "&tfo=" +
      parseFloat(totalVar.Formapp).toFixed(preformat) +
      "&top=" +
      parseFloat(totalVar.Optimizador).toFixed(preformat) +
      "&tin=" +
      parseFloat(totalVar.Integraerp).toFixed(preformat) +
      "&tso=" +
      parseFloat(totalVar.Soporte).toFixed(preformat) +
      "&uto=" +
      totalEmpleados +
      "&uas=" +
      totalEmpleadosVar.Asistencia +
      "&uac=" +
      totalEmpleadosVar.Acceso +
      "&uco=" +
      totalEmpleadosVar.Comedor +
      "&uex=" +
      totalEmpleadosVar.Externos +
      "&pas=" +
      asistenciaBoxlHTML.innerText +
      "&pac=" +
      accesoBoxlHTML.innerText +
      "&pco=" +
      comedorBoxlHTML.innerText +
      "&pex=" +
      externosBoxlHTML.innerText +
      "&fn=" +
      form.name.value +
      "&fap=" +
      form.lastname.value +
      "&fm=" +
      form.email.value +
      "&fe=" +
      form.company.value +
      "&ft=" +
      form.phone.value;
    queryer =
      "?s=" +
      site +
      "&url=" +
      theme_vars.theme_uri + // agrego la url del sitio para que la pueda recoger el calculator-pdf-download
      "&i=" +
      ind +
      "&div=" +
      gv_price.moneda +
      "&p=" +
      periodo +
      "&t=" +
      parseFloat(total).toFixed(preformat) +
      "&tas=" +
      parseFloat(totalVar.Asistencia).toFixed(preformat) +
      "&tac=" +
      parseFloat(totalVar.Acceso).toFixed(preformat) +
      "&tco=" +
      parseFloat(totalVar.Comedor).toFixed(preformat) +
      "&tex=" +
      parseFloat(totalVar.Externos).toFixed(preformat) +
      "&tpo=" +
      parseFloat(totalVar.Powerbi).toFixed(preformat) +
      "&tre=" +
      parseFloat(totalVar.Reporte).toFixed(preformat) +
      "&tfo=" +
      parseFloat(totalVar.Formapp).toFixed(preformat) +
      "&top=" +
      parseFloat(totalVar.Optimizador).toFixed(preformat) +
      "&tin=" +
      parseFloat(totalVar.Integraerp).toFixed(preformat) +
      "&tso=" +
      parseFloat(totalVar.Soporte).toFixed(preformat) +
      "&uto=" +
      totalEmpleados +
      "&uas=" +
      totalEmpleadosVar.Asistencia +
      "&uac=" +
      totalEmpleadosVar.Acceso +
      "&uco=" +
      totalEmpleadosVar.Comedor +
      "&uex=" +
      totalEmpleadosVar.Externos +
      "&pas=" +
      asistenciaBoxlHTML.innerText +
      "&pac=" +
      accesoBoxlHTML.innerText +
      "&pco=" +
      comedorBoxlHTML.innerText +
      "&pex=" +
      externosBoxlHTML.innerText +
      "&fn=" +
      form.name.value +
      "&fap=" +
      form.lastname.value +
      "&fm=" +
      form.email.value +
      "&fe=" +
      form.company.value +
      "&ft=" +
      form.phone.value;

    var xhr = new XMLHttpRequest();
    xhr.open(
      "GET",
      theme_vars.theme_uri + "/calculator-sendmail.php" + query,
      true
    );
    xhr.send(query);
    console.log("Sending email");
    var link = document.createElement("a");
    link.href = theme_vars.theme_uri + "/calculator-pdf-download.php" + queryer;
    link.click(function () {
      setTimeout(function () {
        window.location = "";
      }, 800);
    });
    setTimeout(function () {
      window.location.href = theme_vars.site_url + "/" + thanksite;
    }, 5000);
  };

function modalAction(a, b = "navbar") {
  document.getElementById("step1-title").style.display = "block";
  document.getElementById("step1-content").style.display = "block";
  document.getElementById("step2-title").style.display = "none";
  document.getElementById("step2-content").style.display = "none";

  cotizacionModal = b;
  let c = document.getElementById(a),
    d = c.getElementsByClassName("modal-content")[0];
  const e = document.getElementsByTagName("html")[0];
  c.classList.toggle("is-active"),
    e.classList.toggle("is-clipped"),
    setTimeout(() => {
      d.classList.toggle("modal-is-active");
    }, 20);
}

function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

function cotizacionStep1() {
  const form = document.getElementById("cotizacion-form");

  URLPDF = "";
  URLPDF += document.querySelector("#name").value;
  URLPDF += document.querySelector("#email").value;
  URLPDF += document.querySelector("#enterprise").value;
  URLPDF += document.querySelector("#phone").value;

  URLPDF = theme_vars.theme_uri + "/cotizaciones/" + btoa(URLPDF) + ".pdf";

  //HUBSPOT INTEGRATION VALUES - LAVILLA ALEJANDRO ASF 6-9-2021
  //setting up values to sent to HUBSPOT
  document.querySelector("#country").value = site;
  document.querySelector("#currency").value = currency;
  document.querySelector("#usersCount").value = totalEmpleados;
  document.querySelector("#totalCuest").value = total;
  descuent == false ? (descuent = "Mensual") : (descuent = "Anual");
  document.querySelector("#contracType").value = descuent;

  switch (ind) {
    case "ct":
      indName = "CONSTRUCCIÓN";
      break;

    case "rt":
      indName = "RETAIL";
      break;

    case "sg":
      indName = "SEGURIDAD";
      break;

    case "bc":
      indName = "BANCA";
      break;

    case "sl":
      indName = "SALUD";
      break;

    case "ag":
      indName = "AGROINDUSTRIA";
      break;

    default:
      indName = "OTRA";
      break;
  }

  switch (site) {
    case "pt-br":
      thanksite = "obrigado";
      break;

    case "en":
      thanksite = "thankyou";
      break;

    default:
      thanksite = "gracias";
      break;
  }

  document.querySelector("#industry").value = indName;

  console.log(currency);
  console.log(descuent);
  console.log(indName);

  document.querySelector("#totalEmpAs").value = totalEmpleadosVar.Asistencia;
  document.querySelector("#totalEmpGes").value = totalEmpleadosVar.Acceso;
  document.querySelector("#totalEmpCom").value = totalEmpleadosVar.Comedor;
  document.querySelector("#totalEmpExt").value = totalEmpleadosVar.Externos;
  document.querySelector("#URLPDF").value = URLPDF;
  document.querySelector("#booleanFormapp").value = gvProds.Formapp;
  document.querySelector("#booleanIntegraerp").value = gvProds.Integraerp;
  document.querySelector("#booleanReporte").value = gvProds.Reporte;
  document.querySelector("#booleanPowerbi").value = gvProds.Powerbi;
  document.querySelector("#booleanSoporte").value = gvProds.Soporte;
  document.querySelector("#booleanOptimizador").value = gvProds.Optimizador;

  var validFullname = 0;

  if (document.querySelector("#name").value) validFullname += 0.5;

  if (document.querySelector("#lastname").value) validFullname += 0.5;

  console.log(validFullname);

  if (form.checkValidity() && validEmail > 0 && validFullname == 1) {
    //document.getElementById("step1-title").style.display = 'none';
    //document.getElementById("step1-content").style.display = 'none';
    cotizationtoMail();
    cotizationtoPdf();

    // setTimeout(function () {
    //   window.location.href = theme_vars.site_url + "/" + thanksite;
    // }, 5000);

    //document.getElementById("step2-title").style.display = 'block';
    //document.getElementById("step2-content").style.display = 'block';
  } else {
    if (validEmail <= 0) alert("Ingresa un email valido. ");
  }
  if (validFullname != 1) {
    alert("Los campos Nombre y Apellido son obligatorios");
  }
}

function validateEmail() {
  // Refactorizada ya que no devuelve .com LAVILLA ALEJANDRO y estaba en desuso
  var emailField = document.getElementById("email").value;
  var regEXP = /\S+@\S+\.\S+/;
  return regEXP.test(String(emailField).toLowerCase()) == 1
    ? (validEmail = 1)
    : (validEmail = 0);
}

function getFormInputs(a) {
  let b,
    c = document.forms;
  for (let d = 0; d < c.length; d++)
    if (c[d].id === a) {
      b = c[d];
      break;
    }
  let d = {};
  for (let c = 0; c < b.length; c++)
    d[b[c].name] = "file" === b[c].type ? b[c].files : b[c].value;
  return d;
}
async function submitEstimate(a) {
  let b = getFormInputs("cotizacion-form"),
    c = {
      ...b,
      origin: cotizacionModal,
    },
    d = document
      .getElementById(a)
      .getElementsByClassName("gv-modal-form-interaction-answer")[0];
  createModalInteraction("loading", d);
  try {
    let c = {
      ...b,
      origin: cotizacionModal,
    };
    await axios.post("/api/v2/public/estimate/", c, {
      headers: HEADERS,
    });
    setTimeout(() => {
      createModalInteraction("success", d);
    }, 1500),
      setTimeout(() => {
        a && modalAction(a), createModalInteraction("destroy", d);
      }, 5e3),
      document.getElementById("cotizacion-form").reset(),
      dataLayer.push({
        event: "sales_form",
        category: "click",
        label: "label",
      });
  } catch (a) {
    setTimeout(() => {
      createModalInteraction("error", d);
    }, 1500);
  }
}

document
  .querySelector("#validationDefaultUsername")
  .addEventListener("keypress", function (evt) {
    if (evt.which < 48 || evt.which > 57) {
      evt.preventDefault();
    }
  });

function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}
