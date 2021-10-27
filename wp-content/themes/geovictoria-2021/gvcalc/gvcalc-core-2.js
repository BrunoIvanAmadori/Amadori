var site = 'cl', ind = 'ot', descuent = false;
const cotizauf = 30000;
const gv = { //CHILE
		Asistencia_1a4:       0.51,
		Asistencia_5a10:      0.102,
		Asistencia_11a20:     0.09129,
		Asistencia_21a50:     0.08170,
		Asistencia_51a100:    0.07313,
		Asistencia_101a200:   0.06545,
		Asistencia_201a500:   0.05858,
		Asistencia_501a1000:  0.05242,
		Asistencia_1001a3000: 0.04692,
		Asistencia_3001a5000: 0.04199,
		Asistencia_5001a8000: 0.03758,
		Asistencia_masde8000: 0.03364,
		
		Acceso_1a4:       0.51,
		Acceso_5a10:      0.10200,
		Acceso_11a20:     0.06800,
		Acceso_21a50:     0.03268,
		Acceso_51a100:    0.02925,
		Acceso_101a200:   0.02618,
		Acceso_201a500:   0.02343,
		Acceso_501a1000:  0.02097,
		Acceso_1001a3000: 0.01877,
		Acceso_3001a5000: 0.01680,
		Acceso_5001a8000: 0.01503,
		Acceso_masde8000: 0.01343,
		
		Comedor_1a4:       0.51,
		Comedor_5a10:      0.10200,
		Comedor_11a20:     0.06800,
		Comedor_21a50:     0.03268,
		Comedor_51a100:    0.02925,
		Comedor_101a200:   0.02618,
		Comedor_201a500:   0.02343,
		Comedor_501a1000:  0.02097,
		Comedor_1001a3000: 0.01877,
		Comedor_3001a5000: 0.01680,
		Comedor_5001a8000: 0.01503,
		Comedor_masde8000: 0.01346,

		Externos_1a4:       0.51,
		Externos_5a10:      0.10200,
		Externos_11a20:     0.06800,
		Externos_21a50:     0.05719,
		Externos_51a100:    0.05119,
		Externos_101a200:   0.04581,
		Externos_201a500:   0.04100,
		Externos_501a1000:  0.03670,
		Externos_1001a3000: 0.03284,
		Externos_3001a5000: 0.02940,
		Externos_5001a8000: 0.02631,
		Externos_masde8000: 0.02355,		

		Powerbi_mes:       7.65,
		Powerbi_1a4:       0,
		Powerbi_5a10:      0.0204,
		Powerbi_11a20:     0.0183,
		Powerbi_21a50:     0.0163,
		Powerbi_51a100:    0.0146,
		Powerbi_101a200:   0.0131,
		Powerbi_201a500:   0.0117,
		Powerbi_501a1000:  0.0105,
		Powerbi_1001a3000: 0.0094,
		Powerbi_3001a5000: 0.0084,
		Powerbi_5001a8000: 0.0075,
		Powerbi_masde8000: 0.0067,	

		Reporte_mes:       1.02,
		Reporte_1a4:       0,
		Reporte_5a10:      0,
		Reporte_11a20:     0,
		Reporte_21a50:     0,
		Reporte_51a100:    0,
		Reporte_101a200:   0,
		Reporte_201a500:   0,
		Reporte_501a1000:  0,
		Reporte_1001a3000: 0,
		Reporte_3001a5000: 0,
		Reporte_5001a8000: 0,
		Reporte_masde8000: 0,

		Formapp_mes:       1.02,
		Formapp_1a4:       0,
		Formapp_5a10:      0,
		Formapp_11a20:     0,
		Formapp_21a50:     0,
		Formapp_51a100:    0,
		Formapp_101a200:   0,
		Formapp_201a500:   0,
		Formapp_501a1000:  0,
		Formapp_1001a3000: 0,
		Formapp_3001a5000: 0,
		Formapp_5001a8000: 0,
		Formapp_masde8000: 0,

		Optimizador_mes:       10.20,
		Optimizador_1a4:       0,
		Optimizador_5a10:      0.1020,
		Optimizador_11a20:     0.0913,
		Optimizador_21a50:     0.0817,
		Optimizador_51a100:    0.0731,
		Optimizador_101a200:   0.0654,
		Optimizador_201a500:   0.0586,
		Optimizador_501a1000:  0.0524,
		Optimizador_1001a3000: 0.0469,
		Optimizador_3001a5000: 0.0420,
		Optimizador_5001a8000: 0.0376,
		Optimizador_masde8000: 0.0336,

		Integraerp_mes:       1.02,
		Integraerp_1a4:       0,
		Integraerp_5a10:      0,
		Integraerp_11a20:     0,
		Integraerp_21a50:     0,
		Integraerp_51a100:    0,
		Integraerp_101a200:   0,
		Integraerp_201a500:   0,
		Integraerp_501a1000:  0,
		Integraerp_1001a3000: 0,
		Integraerp_3001a5000: 0,
		Integraerp_5001a8000: 0,
		Integraerp_masde8000: 0,

		Soporte_mes:       2.55,
		Soporte_1a4:       0,
		Soporte_5a10:      0.0087,
		Soporte_11a20:     0.0078,
		Soporte_21a50:     0.0069,
		Soporte_51a100:    0.0062,
		Soporte_101a200:   0.0056,
		Soporte_201a500:   0.0050,
		Soporte_501a1000:  0.0045,
		Soporte_1001a3000: 0.0040,
		Soporte_3001a5000: 0.0036,
		Soporte_5001a8000: 0.0032,
		Soporte_masde8000: 0.0029,	
	};

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
        CtrlAsistencia: !0,
		Acceso: !1,
		Comedor: !1,
        Externos: !1,
        Powerbi: !1,
        Reporte: !1,
        Formapp: !1,
        Optimizador: !1,
        Integraerp: !1,
        Soporte: !1,
    },
    totalEmpleados = 0,
    totalEmpleadosAsistencia = 0,
    totalEmpleadosAcceso = 0,
    totalEmpleadosComedor = 0,
    totalEmpleadosExternos = 0,
    totalGeneral = 0,
    totalAsistencia = 0,
    totalAcceso = 0,
    totalComedor = 0,
    totalExternos = 0,	
    totalPowerbi = 0,	
    totalReporte = 0,	
    totalFormapp = 0,	
    totalOptimizador = 0,	
    totalIntegraerp = 0,	
    totalSoporte = 0,	
    xusrAsistencia = 0,
    xusrAcceso = 0,
    xusrComedor = 0,
    xusrExternos = 0;
const calcTarifaXPersona = (a, c, b) => {
        let d = `${c/a+b}`.split(".");
        return parseFloat(`${d[0]}.${d[1].slice(0,3)}`) * a
    },
    initCalculator = () => {
		document.getElementById('industria-select').value = ind;
        totalEmpleados = 200, 
		document.getElementById("total-empleados-input").value = `${totalEmpleados}`, 
		totalEmpleadosAsistencia = 200, 
		document.getElementById("total-empleados-asistencia-input").value = `${totalEmpleados}`, 
		nonLinearSlider.noUiSlider.set(200), 
		triggerChanges()
    },

    updateTemplate = (d = null) => {
		if(d===true) descuent = d;
		else if(d===false) descuent = d;
		
		subprodBoxlHTML.innerText = "", subprodBox = "";
		gvProds.Powerbi && (subprodBox += " Dashboard BI,"),
		gvProds.Reporte && (subprodBox += " Reportes personalizados,"),
		gvProds.Formapp && (subprodBox += " Formulario App,"),
		gvProds.Optimizador && (subprodBox += " Optimizador de turnos,"),
		gvProds.Integraerp && (subprodBox += " Integración con otros sistemas,"),
		gvProds.Soporte && (subprodBox += " Soporte 24/7,");
		subprodBoxlHTML.innerText = subprodBox.slice(0, -1) + '.';
		
		if(descuent){
			desc = totalGeneral*20/100;
			total = totalGeneral-desc;
			
			desc = xusrAsistencia*20/100;
			montoas = Math.floor(xusrAsistencia-desc);

			desc = xusrAcceso*20/100;
			montoac = Math.floor(xusrAcceso-desc);
			
			desc = xusrComedor*20/100;
			montoco = Math.floor(xusrComedor-desc);
			
			desc = xusrExternos*20/100;
			montoex = Math.floor(xusrExternos-desc);

			desc = totalAsistencia*20/100;
			totalAsistencia = totalAsistencia-desc;
			
			desc = totalAcceso*20/100;
			totalAcceso = totalAcceso-desc;
			
			desc = totalComedor*20/100;
			totalComedor = totalComedor-desc;
			
			desc = totalExternos*20/100;
			totalExternos = totalExternos-desc;
			
			desc = totalPowerbi*20/100;
			totalPowerbi = totalPowerbi-desc;
			
			desc = totalReporte*20/100;
			totalReporte = totalReporte-desc;
			
			desc = totalFormapp*20/100;
			totalFormapp = totalFormapp-desc;
			
			desc = totalOptimizador*20/100;
			totalOptimizador = totalOptimizador-desc;
			
			desc = totalIntegraerp*20/100;
			totalIntegraerp = totalIntegraerp-desc;
			
			desc = totalSoporte*20/100;
			totalSoporte = totalSoporte-desc;

		}
		else{
			total = totalGeneral;
			montoas = xusrAsistencia;
			montoac = xusrAcceso;
			montoco = xusrComedor;
			montoex = xusrExternos;
		}
		
        totalGeneralHTML.innerText = `${total.toFixed(2)}`.replace(".", ","), 
        document.getElementById("total-general-box").innerText = `${total.toFixed(2)}`.replace(".", ",");
		asistenciaBoxlHTML.innerText = montoas;
		accesoBoxlHTML.innerText = montoac;
		comedorBoxlHTML.innerText = montoco;
		externosBoxlHTML.innerText = montoex;
		//totalxAsistenciaHTML.innerText = `${xusrAsistencia.toFixed(2)}`.replace(".", ",");
		
		1e3 <= totalEmpleados 
			? (
				document.getElementById("resumen-text").classList.remove("active"), 
				document.getElementById("resumen-btn").classList.add("active"), 
				document.getElementById("banner-side").style.display = 'block', 
				document.getElementById("calc-side").style.display = 'none'
			) 
			: (
				document.getElementById("resumen-text").classList.add("active"), 
				document.getElementById("resumen-btn").classList.remove("active"), 
				document.getElementById("banner-side").style.display = 'none', 
				document.getElementById("calc-side").style.display = 'block'
			)
    };

const totalCalc = () => {
        totalGeneral = 0, totalAsistencia = 0, totalAcceso = 0, totalComedor = 0, totalExternos = 0, totalPowerbi = 0, totalReporte = 0, totalFormapp = 0, totalOptimizador = 0, totalIntegraerp = 0, totalSoporte = 0;

		totalEmpleadosAsistencia >= 1 && totalEmpleadosAsistencia <= 4
		? (
			gvProds.CtrlAsistencia && (totalAsistencia = gv.Asistencia_1a4*totalEmpleadosAsistencia, totalGeneral += totalAsistencia, xusrAsistencia = Math.floor(gv.Asistencia_1a4*cotizauf))
		) : 
		totalEmpleadosAsistencia >= 5 && totalEmpleadosAsistencia <= 10
		? (
			gvProds.CtrlAsistencia && (totalAsistencia = gv.Asistencia_5a10*totalEmpleadosAsistencia, totalGeneral += totalAsistencia, xusrAsistencia = Math.floor(gv.Asistencia_5a10*cotizauf))
		) : 
		totalEmpleadosAsistencia >= 11 && totalEmpleadosAsistencia <= 20
		? (
			gvProds.CtrlAsistencia && (totalAsistencia = gv.Asistencia_11a20*totalEmpleadosAsistencia, totalGeneral += totalAsistencia, xusrAsistencia = Math.floor(gv.Asistencia_11a20*cotizauf))
		) : 
		totalEmpleadosAsistencia >= 21 && totalEmpleadosAsistencia <= 50
		? (
			gvProds.CtrlAsistencia && (totalAsistencia = gv.Asistencia_21a50*totalEmpleadosAsistencia, totalGeneral += totalAsistencia, xusrAsistencia = Math.floor(gv.Asistencia_21a50*cotizauf))
		) : 
		totalEmpleadosAsistencia >= 51 && totalEmpleadosAsistencia <= 100
		? (
			gvProds.CtrlAsistencia && (totalAsistencia = gv.Asistencia_51a100*totalEmpleadosAsistencia, totalGeneral += totalAsistencia, xusrAsistencia = Math.floor(gv.Asistencia_51a100*cotizauf))
		) : 
		totalEmpleadosAsistencia >= 101 && totalEmpleadosAsistencia <= 200
		? (
			gvProds.CtrlAsistencia && (totalAsistencia = gv.Asistencia_101a200*totalEmpleadosAsistencia, totalGeneral += totalAsistencia, xusrAsistencia = Math.floor(gv.Asistencia_101a200*cotizauf))
		) : 
		totalEmpleadosAsistencia >= 201 && totalEmpleadosAsistencia <= 500
		? (
			gvProds.CtrlAsistencia && (totalAsistencia = gv.Asistencia_201a500*totalEmpleadosAsistencia, totalGeneral += totalAsistencia, xusrAsistencia = Math.floor(gv.Asistencia_201a500*cotizauf))
		) : 
		totalEmpleadosAsistencia >= 501 && totalEmpleadosAsistencia <= 1000
		? (
			gvProds.CtrlAsistencia && (totalAsistencia = gv.Asistencia_501a1000*totalEmpleadosAsistencia, totalGeneral += totalAsistencia, xusrAsistencia = Math.floor(gv.Asistencia_501a1000*cotizauf))
		) : 
		totalEmpleadosAsistencia >= 1001 && totalEmpleadosAsistencia <= 3000
		? (
			gvProds.CtrlAsistencia && (totalAsistencia = gv.Asistencia_1001a3000*totalEmpleadosAsistencia, totalGeneral += totalAsistencia, xusrAsistencia = Math.floor(gv.Asistencia_1001a3000*cotizauf))
		) : 
		totalEmpleadosAsistencia >= 3001 && totalEmpleadosAsistencia <= 5000
		? (
			gvProds.CtrlAsistencia && (totalAsistencia = gv.Asistencia_3001a5000*totalEmpleadosAsistencia, totalGeneral += totalAsistencia, xusrAsistencia = Math.floor(gv.Asistencia_3001a5000*cotizauf))
		) : 
		totalEmpleadosAsistencia >= 5001 && totalEmpleadosAsistencia <= 8000
		? (
			gvProds.CtrlAsistencia && (totalAsistencia = gv.Asistencia_5001a8000*totalEmpleadosAsistencia, totalGeneral += totalAsistencia, xusrAsistencia = Math.floor(gv.Asistencia_5001a8000*cotizauf))
		) : 
		totalEmpleadosAsistencia > 8000
		? (
			gvProds.CtrlAsistencia && (totalAsistencia = gv.Asistencia_masde8000*totalEmpleadosAsistencia, totalGeneral += totalAsistencia, xusrAsistencia = Math.floor(gv.Asistencia_masde8000*cotizauf))
		) : null
		
		//Acceso
		totalEmpleadosAcceso >= 1 && totalEmpleadosAcceso <= 4
		? (
			gvProds.Acceso && (totalAcceso = gv.Acceso_1a4*totalEmpleadosAcceso, totalGeneral += totalAcceso, xusrAcceso = Math.floor(gv.Acceso_1a4*cotizauf))
		) : 
		totalEmpleadosAcceso >= 5 && totalEmpleadosAcceso <= 10
		? (
			gvProds.Acceso && (totalAcceso = gv.Acceso_5a10*totalEmpleadosAcceso, totalGeneral += totalAcceso, xusrAcceso = Math.floor(gv.Acceso_5a10*cotizauf))
		) : 
		totalEmpleadosAcceso >= 11 && totalEmpleadosAcceso <= 20
		? (
			gvProds.Acceso && (totalAcceso = gv.Acceso_11a20*totalEmpleadosAcceso, totalGeneral += totalAcceso, xusrAcceso = Math.floor(gv.Acceso_11a20*cotizauf))
		) : 
		totalEmpleadosAcceso >= 21 && totalEmpleadosAcceso <= 50
		? (
			gvProds.Acceso && (totalAcceso = gv.Acceso_21a50*totalEmpleadosAcceso, totalGeneral += totalAcceso, xusrAcceso = Math.floor(gv.Acceso_21a50*cotizauf))
		) : 
		totalEmpleadosAcceso >= 51 && totalEmpleadosAcceso <= 100
		? (
			gvProds.Acceso && (totalAcceso = gv.Acceso_51a100*totalEmpleadosAcceso, totalGeneral += totalAcceso, xusrAcceso = Math.floor(gv.Acceso_51a100*cotizauf))
		) : 
		totalEmpleadosAcceso >= 101 && totalEmpleadosAcceso <= 200
		? (
			gvProds.Acceso && (totalAcceso = gv.Acceso_101a200*totalEmpleadosAcceso, totalGeneral += totalAcceso, xusrAcceso = Math.floor(gv.Acceso_101a200*cotizauf))
		) : 
		totalEmpleadosAcceso >= 201 && totalEmpleadosAcceso <= 500
		? (
			gvProds.Acceso && (totalAcceso = gv.Acceso_201a500*totalEmpleadosAcceso, totalGeneral += totalAcceso, xusrAcceso = Math.floor(gv.Acceso_201a500*cotizauf))
		) : 
		totalEmpleadosAcceso >= 501 && totalEmpleadosAcceso <= 1000
		? (
			gvProds.Acceso && (totalAcceso = gv.Acceso_501a1000*totalEmpleadosAcceso, totalGeneral += totalAcceso, xusrAcceso = Math.floor(gv.Acceso_501a1000*cotizauf))
		) : 
		totalEmpleadosAcceso >= 1001 && totalEmpleadosAcceso <= 3000
		? (
			gvProds.Acceso && (totalAcceso = gv.Acceso_1001a3000*totalEmpleadosAcceso, totalGeneral += totalAcceso, xusrAcceso = Math.floor(gv.Acceso_1001a3000*cotizauf))
		) : 
		totalEmpleadosAcceso >= 3001 && totalEmpleadosAcceso <= 5000
		? (
			gvProds.Acceso && (totalAcceso = gv.Acceso_3001a5000*totalEmpleadosAcceso, totalGeneral += totalAcceso, xusrAcceso = Math.floor(gv.Acceso_3001a5000*cotizauf))
		) : 
		totalEmpleadosAcceso >= 5001 && totalEmpleadosAcceso <= 8000
		? (
			gvProds.Acceso && (totalAcceso = gv.Acceso_5001a8000*totalEmpleadosAcceso, totalGeneral += totalAcceso, xusrAcceso = Math.floor(gv.Acceso_5001a8000*cotizauf))
		) : 
		totalEmpleadosAcceso > 8000
		? (
			gvProds.Acceso && (totalAcceso = gv.Acceso_masde8000*totalEmpleadosAcceso, totalGeneral += totalAcceso, xusrAcceso = Math.floor(gv.Acceso_masde8000*cotizauf))
		) : null

		//Comedor
		totalEmpleadosComedor >= 1 && totalEmpleadosComedor <= 4
		? (
			gvProds.Comedor && (totalComedor = gv.Comedor_1a4*totalEmpleadosComedor, totalGeneral += totalComedor, xusrComedor = Math.floor(gv.Comedor_1a4*cotizauf))
		) : 
		totalEmpleadosComedor >= 5 && totalEmpleadosComedor <= 10
		? (
			gvProds.Comedor && (totalComedor = gv.Comedor_5a10*totalEmpleadosComedor, totalGeneral += totalComedor, xusrComedor = Math.floor(gv.Comedor_5a10*cotizauf))
		) : 
		totalEmpleadosComedor >= 11 && totalEmpleadosComedor <= 20
		? (
			gvProds.Comedor && (totalComedor = gv.Comedor_11a20*totalEmpleadosComedor, totalGeneral += totalComedor, xusrComedor = Math.floor(gv.Comedor_11a20*cotizauf))
		) : 
		totalEmpleadosComedor >= 21 && totalEmpleadosComedor <= 50
		? (
			gvProds.Comedor && (totalComedor = gv.Comedor_21a50*totalEmpleadosComedor, totalGeneral += totalComedor, xusrComedor = Math.floor(gv.Comedor_21a50*cotizauf))
		) : 
		totalEmpleadosComedor >= 51 && totalEmpleadosComedor <= 100
		? (
			gvProds.Comedor && (totalComedor = gv.Comedor_51a100*totalEmpleadosComedor, totalGeneral += totalComedor, xusrComedor = Math.floor(gv.Comedor_51a100*cotizauf))
		) : 
		totalEmpleadosComedor >= 101 && totalEmpleadosComedor <= 200
		? (
			gvProds.Comedor && (totalComedor = gv.Comedor_101a200*totalEmpleadosComedor, totalGeneral += totalComedor, xusrComedor = Math.floor(gv.Comedor_101a200*cotizauf))
		) : 
		totalEmpleadosComedor >= 201 && totalEmpleadosComedor <= 500
		? (
			gvProds.Comedor && (totalComedor = gv.Comedor_201a500*totalEmpleadosComedor, totalGeneral += totalComedor, xusrComedor = Math.floor(gv.Comedor_201a500*cotizauf))
		) : 
		totalEmpleadosComedor >= 501 && totalEmpleadosComedor <= 1000
		? (
			gvProds.Comedor && (totalComedor = gv.Comedor_501a1000*totalEmpleadosComedor, totalGeneral += totalComedor, xusrComedor = Math.floor(gv.Comedor_501a1000*cotizauf))
		) : 
		totalEmpleadosComedor >= 1001 && totalEmpleadosComedor <= 3000
		? (
			gvProds.Comedor && (totalComedor = gv.Comedor_1001a3000*totalEmpleadosComedor, totalGeneral += totalComedor, xusrComedor = Math.floor(gv.Comedor_1001a3000*cotizauf))
		) : 
		totalEmpleadosComedor >= 3001 && totalEmpleadosComedor <= 5000
		? (
			gvProds.Comedor && (totalComedor = gv.Comedor_3001a5000*totalEmpleadosComedor, totalGeneral += totalComedor, xusrComedor = Math.floor(gv.Comedor_3001a5000*cotizauf))
		) : 
		totalEmpleadosComedor >= 5001 && totalEmpleadosComedor <= 8000
		? (
			gvProds.Comedor && (totalComedor = gv.Comedor_5001a8000*totalEmpleadosComedor, totalGeneral += totalComedor, xusrComedor = Math.floor(gv.Comedor_5001a8000*cotizauf))
		) : 
		totalEmpleadosComedor > 8000
		? (
			gvProds.Comedor && (totalComedor = gv.Comedor_masde8000*totalEmpleadosComedor, totalGeneral += totalComedor, xusrComedor = Math.floor(gv.Comedor_masde8000*cotizauf))
		) : null
		
		//Externos
		totalEmpleadosExternos >= 1 && totalEmpleadosExternos <= 4
		? (
			gvProds.Externos && (totalExternos = gv.Externos_1a4*totalEmpleadosExternos, totalGeneral += totalExternos, xusrExternos = Math.floor(gv.Externos_1a4*cotizauf))
		) : 
		totalEmpleadosExternos >= 5 && totalEmpleadosExternos <= 10
		? (
			gvProds.Externos && (totalExternos = gv.Externos_5a10*totalEmpleadosExternos, totalGeneral += totalExternos, xusrExternos = Math.floor(gv.Externos_5a10*cotizauf))
		) : 
		totalEmpleadosExternos >= 11 && totalEmpleadosExternos <= 20
		? (
			gvProds.Externos && (totalExternos = gv.Externos_11a20*totalEmpleadosExternos, totalGeneral += totalExternos, xusrExternos = Math.floor(gv.Externos_11a20*cotizauf))
		) : 
		totalEmpleadosExternos >= 21 && totalEmpleadosExternos <= 50
		? (
			gvProds.Externos && (totalExternos = gv.Externos_21a50*totalEmpleadosExternos, totalGeneral += totalExternos, xusrExternos = Math.floor(gv.Externos_21a50*cotizauf))
		) : 
		totalEmpleadosExternos >= 51 && totalEmpleadosExternos <= 100
		? (
			gvProds.Externos && (totalExternos = gv.Externos_51a100*totalEmpleadosExternos, totalGeneral += totalExternos, xusrExternos = Math.floor(gv.Externos_51a100*cotizauf))
		) : 
		totalEmpleadosExternos >= 101 && totalEmpleadosExternos <= 200
		? (
			gvProds.Externos && (totalExternos = gv.Externos_101a200*totalEmpleadosExternos, totalGeneral += totalExternos, xusrExternos = Math.floor(gv.Externos_101a200*cotizauf))
		) : 
		totalEmpleadosExternos >= 201 && totalEmpleadosExternos <= 500
		? (
			gvProds.Externos && (totalExternos = gv.Externos_201a500*totalEmpleadosExternos, totalGeneral += totalExternos, xusrExternos = Math.floor(gv.Externos_201a500*cotizauf))
		) : 
		totalEmpleadosExternos >= 501 && totalEmpleadosExternos <= 1000
		? (
			gvProds.Externos && (totalExternos = gv.Externos_501a1000*totalEmpleadosExternos, totalGeneral += totalExternos, xusrExternos = Math.floor(gv.Externos_501a1000*cotizauf))
		) : 
		totalEmpleadosExternos >= 1001 && totalEmpleadosExternos <= 3000
		? (
			gvProds.Externos && (totalExternos = gv.Externos_1001a3000*totalEmpleadosExternos, totalGeneral += totalExternos, xusrExternos = Math.floor(gv.Externos_1001a3000*cotizauf))
		) : 
		totalEmpleadosExternos >= 3001 && totalEmpleadosExternos <= 5000
		? (
			gvProds.Externos && (totalExternos = gv.Externos_3001a5000*totalEmpleadosExternos, totalGeneral += totalExternos, xusrExternos = Math.floor(gv.Externos_3001a5000*cotizauf))
		) : 
		totalEmpleadosExternos >= 5001 && totalEmpleadosExternos <= 8000
		? (
			gvProds.Externos && (totalExternos = gv.Externos_5001a8000*totalEmpleadosExternos, totalGeneral += totalExternos, xusrExternos = Math.floor(gv.Externos_5001a8000*cotizauf))
		) : 
		totalEmpleadosExternos > 8000
		? (
			gvProds.Externos && (totalExternos = gv.Externos_masde8000*totalEmpleadosExternos, totalGeneral += totalExternos, xusrExternos = Math.floor(gv.Externos_masde8000*cotizauf))
		) : null
		
		//Subprods
		totalEmpleados >= 1 && totalEmpleados <= 4
		? (
			gvProds.Powerbi && (totalPowerbi = gv.Powerbi_1a4*totalEmpleados+gv.Powerbi_mes, totalGeneral += totalPowerbi),
			gvProds.Reporte && (totalReporte = gv.Reporte_1a4*totalEmpleados+gv.Reporte_mes, totalGeneral += totalReporte),
			gvProds.Formapp && (totalFormapp = gv.Formapp_1a4*totalEmpleados+gv.Formapp_mes, totalGeneral += totalFormapp),
			gvProds.Optimizador && (totalOptimizador = gv.Optimizador_1a4*totalEmpleados+gv.Optimizador_mes, totalGeneral += totalOptimizador),
			gvProds.Integraerp && (totalIntegraerp = gv.Integraerp_1a4*totalEmpleados+gv.Integraerp_mes, totalGeneral += totalIntegraerp),
			gvProds.Soporte && (totalSoporte = gv.Soporte_1a4*totalEmpleados+gv.Soporte_mes, totalGeneral += totalSoporte)
		) : 
		totalEmpleados >= 5 && totalEmpleados <= 10
		? (
			gvProds.Powerbi && (totalPowerbi = gv.Powerbi_5a10*totalEmpleados+gv.Powerbi_mes, totalGeneral += totalPowerbi),
			gvProds.Reporte && (totalReporte = gv.Reporte_5a10*totalEmpleados+gv.Reporte_mes, totalGeneral += totalReporte),
			gvProds.Formapp && (totalFormapp = gv.Formapp_5a10*totalEmpleados+gv.Formapp_mes, totalGeneral += totalFormapp),
			gvProds.Optimizador && (totalOptimizador = gv.Optimizador_5a10*totalEmpleados+gv.Optimizador_mes, totalGeneral += totalOptimizador),
			gvProds.Integraerp && (totalIntegraerp = gv.Integraerp_5a10*totalEmpleados+gv.Integraerp_mes, totalGeneral += totalIntegraerp),
			gvProds.Soporte && (totalSoporte = gv.Soporte_5a10*totalEmpleados+gv.Soporte_mes, totalGeneral += totalSoporte)
		) : 
		totalEmpleados >= 11 && totalEmpleados <= 20
		? (
			gvProds.Powerbi && (totalPowerbi = gv.Powerbi_11a20*totalEmpleados+gv.Powerbi_mes, totalGeneral += totalPowerbi),
			gvProds.Reporte && (totalReporte = gv.Reporte_11a20*totalEmpleados+gv.Reporte_mes, totalGeneral += totalReporte),
			gvProds.Formapp && (totalFormapp = gv.Formapp_11a20*totalEmpleados+gv.Formapp_mes, totalGeneral += totalFormapp),
			gvProds.Optimizador && (totalOptimizador = gv.Optimizador_11a20*totalEmpleados+gv.Optimizador_mes, totalGeneral += totalOptimizador),
			gvProds.Integraerp && (totalIntegraerp = gv.Integraerp_11a20*totalEmpleados+gv.Integraerp_mes, totalGeneral += totalIntegraerp),
			gvProds.Soporte && (totalSoporte = gv.Soporte_11a20*totalEmpleados+gv.Soporte_mes, totalGeneral += totalSoporte)
		) : 
		totalEmpleados >= 21 && totalEmpleados <= 50
		? (
			gvProds.Powerbi && (totalPowerbi = gv.Powerbi_21a50*totalEmpleados+gv.Powerbi_mes, totalGeneral += totalPowerbi),
			gvProds.Reporte && (totalReporte = gv.Reporte_21a50*totalEmpleados+gv.Reporte_mes, totalGeneral += totalReporte),
			gvProds.Formapp && (totalFormapp = gv.Formapp_21a50*totalEmpleados+gv.Formapp_mes, totalGeneral += totalFormapp),
			gvProds.Optimizador && (totalOptimizador = gv.Optimizador_21a50*totalEmpleados+gv.Optimizador_mes, totalGeneral += totalOptimizador),
			gvProds.Integraerp && (totalIntegraerp = gv.Integraerp_21a50*totalEmpleados+gv.Integraerp_mes, totalGeneral += totalIntegraerp),
			gvProds.Soporte && (totalSoporte = gv.Soporte_21a50*totalEmpleados+gv.Soporte_mes, totalGeneral += totalSoporte)
		) : 
		totalEmpleados >= 51 && totalEmpleados <= 100
		? (
			gvProds.Powerbi && (totalPowerbi = gv.Powerbi_51a100*totalEmpleados+gv.Powerbi_mes, totalGeneral += totalPowerbi),
			gvProds.Reporte && (totalReporte = gv.Reporte_51a100*totalEmpleados+gv.Reporte_mes, totalGeneral += totalReporte),
			gvProds.Formapp && (totalFormapp = gv.Formapp_51a100*totalEmpleados+gv.Formapp_mes, totalGeneral += totalFormapp),
			gvProds.Optimizador && (totalOptimizador = gv.Optimizador_51a100*totalEmpleados+gv.Optimizador_mes, totalGeneral += totalOptimizador),
			gvProds.Integraerp && (totalIntegraerp = gv.Integraerp_51a100*totalEmpleados+gv.Integraerp_mes, totalGeneral += totalIntegraerp),
			gvProds.Soporte && (totalSoporte = gv.Soporte_51a100*totalEmpleados+gv.Soporte_mes, totalGeneral += totalSoporte)
		) : 
		totalEmpleados >= 101 && totalEmpleados <= 200
		? (
			gvProds.Powerbi && (totalPowerbi = gv.Powerbi_101a200*totalEmpleados+gv.Powerbi_mes, totalGeneral += totalPowerbi),
			gvProds.Reporte && (totalReporte = gv.Reporte_101a200*totalEmpleados+gv.Reporte_mes, totalGeneral += totalReporte),
			gvProds.Formapp && (totalFormapp = gv.Formapp_101a200*totalEmpleados+gv.Formapp_mes, totalGeneral += totalFormapp),
			gvProds.Optimizador && (totalOptimizador = gv.Optimizador_101a200*totalEmpleados+gv.Optimizador_mes, totalGeneral += totalOptimizador),
			gvProds.Integraerp && (totalIntegraerp = gv.Integraerp_101a200*totalEmpleados+gv.Integraerp_mes, totalGeneral += totalIntegraerp),
			gvProds.Soporte && (totalSoporte = gv.Soporte_101a200*totalEmpleados+gv.Soporte_mes, totalGeneral += totalSoporte)
		) : 
		totalEmpleados >= 201 && totalEmpleados <= 500
		? (
			gvProds.Powerbi && (totalPowerbi = gv.Powerbi_201a500*totalEmpleados+gv.Powerbi_mes, totalGeneral += totalPowerbi),
			gvProds.Reporte && (totalReporte = gv.Reporte_201a500*totalEmpleados+gv.Reporte_mes, totalGeneral += totalReporte),
			gvProds.Formapp && (totalFormapp = gv.Formapp_201a500*totalEmpleados+gv.Formapp_mes, totalGeneral += totalFormapp),
			gvProds.Optimizador && (totalOptimizador = gv.Optimizador_201a500*totalEmpleados+gv.Optimizador_mes, totalGeneral += totalOptimizador),
			gvProds.Integraerp && (totalIntegraerp = gv.Integraerp_201a500*totalEmpleados+gv.Integraerp_mes, totalGeneral += totalIntegraerp),
			gvProds.Soporte && (totalSoporte = gv.Soporte_201a500*totalEmpleados+gv.Soporte_mes, totalGeneral += totalSoporte)
		) : 
		totalEmpleados >= 501 && totalEmpleados <= 1000
		? (
			gvProds.Powerbi && (totalPowerbi = gv.Powerbi_501a1000*totalEmpleados+gv.Powerbi_mes, totalGeneral += totalPowerbi),
			gvProds.Reporte && (totalReporte = gv.Reporte_501a1000*totalEmpleados+gv.Reporte_mes, totalGeneral += totalReporte),
			gvProds.Formapp && (totalFormapp = gv.Formapp_501a1000*totalEmpleados+gv.Formapp_mes, totalGeneral += totalFormapp),
			gvProds.Optimizador && (totalOptimizador = gv.Optimizador_501a1000*totalEmpleados+gv.Optimizador_mes, totalGeneral += totalOptimizador),
			gvProds.Integraerp && (totalIntegraerp = gv.Integraerp_501a1000*totalEmpleados+gv.Integraerp_mes, totalGeneral += totalIntegraerp),
			gvProds.Soporte && (totalSoporte = gv.Soporte_501a1000*totalEmpleados+gv.Soporte_mes, totalGeneral += totalSoporte)
		) : 
		totalEmpleados >= 1001 && totalEmpleados <= 3000
		? (
			gvProds.Powerbi && (totalPowerbi = gv.Powerbi_1001a3000*totalEmpleados+gv.Powerbi_mes, totalGeneral += totalPowerbi),
			gvProds.Reporte && (totalReporte = gv.Reporte_1001a3000*totalEmpleados+gv.Reporte_mes, totalGeneral += totalReporte),
			gvProds.Formapp && (totalFormapp = gv.Formapp_1001a3000*totalEmpleados+gv.Formapp_mes, totalGeneral += totalFormapp),
			gvProds.Optimizador && (totalOptimizador = gv.Optimizador_1001a3000*totalEmpleados+gv.Optimizador_mes, totalGeneral += totalOptimizador),
			gvProds.Integraerp && (totalIntegraerp = gv.Integraerp_1001a3000*totalEmpleados+gv.Integraerp_mes, totalGeneral += totalIntegraerp),
			gvProds.Soporte && (totalSoporte = gv.Soporte_1001a3000*totalEmpleados+gv.Soporte_mes, totalGeneral += totalSoporte)
		) : 
		totalEmpleados >= 3001 && totalEmpleados <= 5000
		? (
			gvProds.Powerbi && (totalPowerbi = gv.Powerbi_3001a5000*totalEmpleados+gv.Powerbi_mes, totalGeneral += totalPowerbi),
			gvProds.Reporte && (totalReporte = gv.Reporte_3001a5000*totalEmpleados+gv.Reporte_mes, totalGeneral += totalReporte),
			gvProds.Formapp && (totalFormapp = gv.Formapp_3001a5000*totalEmpleados+gv.Formapp_mes, totalGeneral += totalFormapp),
			gvProds.Optimizador && (totalOptimizador = gv.Optimizador_3001a5000*totalEmpleados+gv.Optimizador_mes, totalGeneral += totalOptimizador),
			gvProds.Integraerp && (totalIntegraerp = gv.Integraerp_3001a5000*totalEmpleados+gv.Integraerp_mes, totalGeneral += totalIntegraerp),
			gvProds.Soporte && (totalSoporte = gv.Soporte_3001a5000*totalEmpleados+gv.Soporte_mes, totalGeneral += totalSoporte)
		) : 
		totalEmpleados >= 5001 && totalEmpleados <= 8000
		? (
			gvProds.Powerbi && (totalPowerbi = gv.Powerbi_5001a8000*totalEmpleados+gv.Powerbi_mes, totalGeneral += totalPowerbi),
			gvProds.Reporte && (totalReporte = gv.Reporte_5001a8000*totalEmpleados+gv.Reporte_mes, totalGeneral += totalReporte),
			gvProds.Formapp && (totalFormapp = gv.Formapp_5001a8000*totalEmpleados+gv.Formapp_mes, totalGeneral += totalFormapp),
			gvProds.Optimizador && (totalOptimizador = gv.Optimizador_5001a8000*totalEmpleados+gv.Optimizador_mes, totalGeneral += totalOptimizador),
			gvProds.Integraerp && (totalIntegraerp = gv.Integraerp_5001a8000*totalEmpleados+gv.Integraerp_mes, totalGeneral += totalIntegraerp),
			gvProds.Soporte && (totalSoporte = gv.Soporte_5001a8000*totalEmpleados+gv.Soporte_mes, totalGeneral += totalSoporte)
		) : 
		totalEmpleados > 8000
		? (
			gvProds.Powerbi && (totalPowerbi = gv.Powerbi_masde8000*totalEmpleados+gv.Powerbi_mes, totalGeneral += totalPowerbi),
			gvProds.Reporte && (totalReporte = gv.Reporte_masde8000*totalEmpleados+gv.Reporte_mes, totalGeneral += totalReporte),
			gvProds.Formapp && (totalFormapp = gv.Formapp_masde8000*totalEmpleados+gv.Formapp_mes, totalGeneral += totalFormapp),
			gvProds.Optimizador && (totalOptimizador = gv.Optimizador_masde8000*totalEmpleados+gv.Optimizador_mes, totalGeneral += totalOptimizador),
			gvProds.Integraerp && (totalIntegraerp = gv.Integraerp_masde8000*totalEmpleados+gv.Integraerp_mes, totalGeneral += totalIntegraerp),
			gvProds.Soporte && (totalSoporte = gv.Soporte_masde8000*totalEmpleados+gv.Soporte_mes, totalGeneral += totalSoporte)
		) : null		
    },
    triggerChanges = () => {
        totalCalc(), 
		updateTemplate()
    },
    totalEmpleadosAction = () => {
        totalEmpleados = parseInt(document.getElementById("total-empleados-input").value), 
		//document.getElementById("total-empleados-asistencia-input").value = document.getElementById("total-empleados-input").value, 
		//totalEmpleadosAsistencia = parseInt(document.getElementById("total-empleados-asistencia-input").value), 
		updateInputProds(totalEmpleados), 
		nonLinearSlider.noUiSlider.set([document.getElementById("total-empleados-input").value || 0]), 
		triggerChanges()
    },
    totalEmpleadosProductoAction = (p) => {
		p=="asist"
		? (
			totalEmpleadosAsistencia = parseInt(document.getElementById("total-empleados-asistencia-input").value),
			totalEmpleadosAsistencia > totalEmpleados
			? (
				totalEmpleados = totalEmpleadosAsistencia,
				setTotalEmpleados()
			) : checkTotalEmpleados()
		) :		
		p=="acces"
		? (
			totalEmpleadosAcceso = parseInt(document.getElementById("total-empleados-acceso-input").value),
			totalEmpleadosAcceso > totalEmpleados
			? (
				totalEmpleados = totalEmpleadosAcceso,
				setTotalEmpleados()
			) : checkTotalEmpleados()
		) :
		p=="comed"
		? (
			totalEmpleadosComedor = parseInt(document.getElementById("total-empleados-comedor-input").value),
			totalEmpleadosComedor > totalEmpleados
			? (
				totalEmpleados = totalEmpleadosComedor,
				setTotalEmpleados()
			) : checkTotalEmpleados()
		) :
		p=="exter"
		? (
			totalEmpleadosExternos = parseInt(document.getElementById("total-empleados-externos-input").value),
			totalEmpleadosExternos > totalEmpleados
			? (
				totalEmpleados = totalEmpleadosExternos,
				setTotalEmpleados()
			) : checkTotalEmpleados()
		) : null;
		
        //totalEmpleadosAsistencia = parseInt(document.getElementById("total-empleados-asistencia-input").value), 
		triggerChanges()
    },
	setTotalEmpleados = () => {
		document.getElementById("total-empleados-input").value = totalEmpleados, 
		nonLinearSlider.noUiSlider.set([document.getElementById("total-empleados-input").value || 0])
    },
	checkTotalEmpleados = () => {
		pmayor = 0;
		gvProds.CtrlAsistencia
		? (
			totalEmpleadosAsistencia > pmayor
			? (
				pmayor = totalEmpleadosAsistencia
			) : null
		) :	null;
		gvProds.Acceso
		? (
			totalEmpleadosAcceso > pmayor
			? (
				pmayor = totalEmpleadosAcceso
			) : null
		) :	null;
		gvProds.Comedor
		? (
			totalEmpleadosComedor > pmayor
			? (
				pmayor = totalEmpleadosComedor
			) : null
		) :	null;
		gvProds.Externos
		? (
			totalEmpleadosExternos > pmayor
			? (
				pmayor = totalEmpleadosExternos
			) : null
		) :	null;
		
		totalEmpleados > pmayor
		? (
			totalEmpleados = pmayor
		) :	null;
		
		setTotalEmpleados();
    },
    actionPeriodo = (p) => {
		if(p=='A'){
			if(!document.getElementById("anual-bt").classList.contains("is-selected")){
				document.getElementById("mensual-bt").classList.remove("is-selected");
				document.getElementById("mensual-bt").classList.remove("is-info");
				document.getElementById("anual-bt").classList.add("is-selected");
				document.getElementById("anual-bt").classList.add("is-info");
				updateTemplate(true);
			}
		}
		else{
			if(!document.getElementById("mensual-bt").classList.contains("is-selected")){
				document.getElementById("anual-bt").classList.remove("is-selected");
				document.getElementById("anual-bt").classList.remove("is-info");
				document.getElementById("mensual-bt").classList.add("is-selected");				
				document.getElementById("mensual-bt").classList.add("is-info");
				updateTemplate(false);
			}
		}
    },
    actionProducts = (a = null, b = null) => {
		
		if( !((!gvProds.CtrlAsistencia && !gvProds.Acceso && !gvProds.Comedor && !gvProds.Externos) && (b.indexOf("powerbi") != -1 || b.indexOf("reporte") != -1 || b.indexOf("formapp") != -1 || b.indexOf("optimizador") != -1 || b.indexOf("integraerp") != -1 || b.indexOf("soporte") != -1)) ){
			const c = document.getElementById(b);
			c.parentElement.parentElement.classList.contains("active") 
				? (
					c.parentElement.parentElement.classList.remove("active"), 
					c.classList.replace("mdi-check-circle-outline", "mdi-checkbox-blank-circle-outline"),
					(
						b.indexOf("asist") != -1
						? (
							document.getElementById("total-empleados-asistencia-input").value = 0,
							document.getElementById("total-empleados-asistencia-input").readOnly = true,
							totalAsistencia = 0,
							xusrAsistencia = 0,
							totalEmpleadosProductoAction('asist')
						) :
						b.indexOf("acces") != -1
						? (
							document.getElementById("total-empleados-acceso-input").value = 0,
							document.getElementById("total-empleados-acceso-input").readOnly = true,
							totalAcceso = 0,
							xusrAcceso = 0,
							totalEmpleadosProductoAction('acces')
						) :
						b.indexOf("comed") != -1
						? (
							document.getElementById("total-empleados-comedor-input").value = 0,
							document.getElementById("total-empleados-comedor-input").readOnly = true,
							totalComedor = 0,
							xusrComedor = 0,
							totalEmpleadosProductoAction('comed')
						) :
						b.indexOf("exter") != -1
						? (
							document.getElementById("total-empleados-externos-input").value = 0,
							document.getElementById("total-empleados-externos-input").readOnly = true,
							totalExternos = 0,
							xusrExternos = 0,
							totalEmpleadosProductoAction('exter')
						) : null
					)
				) 
				: (
					c.parentElement.parentElement.classList.add("active"), 
					c.classList.replace("mdi-checkbox-blank-circle-outline", "mdi-check-circle-outline"),
					(
						b.indexOf("asist") != -1
						? (
							document.getElementById("total-empleados-asistencia-input").value = document.getElementById("total-empleados-input").value,
							totalEmpleadosAsistencia = parseInt(document.getElementById("total-empleados-asistencia-input").value),
							document.getElementById("total-empleados-asistencia-input").readOnly = false
						) :				
						b.indexOf("acces") != -1
						? (
							document.getElementById("total-empleados-acceso-input").value = document.getElementById("total-empleados-input").value,
							totalEmpleadosAcceso = parseInt(document.getElementById("total-empleados-acceso-input").value),
							document.getElementById("total-empleados-acceso-input").readOnly = false
						) :
						b.indexOf("comed") != -1
						? (
							document.getElementById("total-empleados-comedor-input").value = document.getElementById("total-empleados-input").value,
							totalEmpleadosComedor = parseInt(document.getElementById("total-empleados-comedor-input").value),
							document.getElementById("total-empleados-comedor-input").readOnly = false
						) :
						b.indexOf("exter") != -1
						? (
							document.getElementById("total-empleados-externos-input").value = document.getElementById("total-empleados-input").value,
							totalEmpleadosExternos = parseInt(document.getElementById("total-empleados-externos-input").value),
							document.getElementById("total-empleados-externos-input").readOnly = false
						) : null
					)
				), 
			gvProds[a] = !gvProds[a];
			
			if(!gvProds.CtrlAsistencia && !gvProds.Acceso && !gvProds.Comedor && !gvProds.Externos){
				d = document.getElementById('check-powerbi');
				d.parentElement.parentElement.classList.contains("active") 
					? (
						d.parentElement.parentElement.classList.remove("active"), 
						d.classList.replace("mdi-check-circle-outline", "mdi-checkbox-blank-circle-outline"), 
						totalPowerbi = 0,
						gvProds.Powerbi = !1
					) : null;

				d = document.getElementById('check-reporte');
				d.parentElement.parentElement.classList.contains("active") 
					? (
						d.parentElement.parentElement.classList.remove("active"), 
						d.classList.replace("mdi-check-circle-outline", "mdi-checkbox-blank-circle-outline"), 
						totalReporte = 0,
						gvProds.Reporte = !1
					) : null;

				d = document.getElementById('check-formapp');
				d.parentElement.parentElement.classList.contains("active") 
					? (
						d.parentElement.parentElement.classList.remove("active"), 
						d.classList.replace("mdi-check-circle-outline", "mdi-checkbox-blank-circle-outline"), 
						totalFormapp = 0,
						gvProds.Formapp = !1
					) : null;

				d = document.getElementById('check-optimizador');
				d.parentElement.parentElement.classList.contains("active") 
					? (
						d.parentElement.parentElement.classList.remove("active"), 
						d.classList.replace("mdi-check-circle-outline", "mdi-checkbox-blank-circle-outline"), 
						totalOptimizador = 0,
						gvProds.Optimizador = !1
					) : null;

				d = document.getElementById('check-integraerp');
				d.parentElement.parentElement.classList.contains("active") 
					? (
						d.parentElement.parentElement.classList.remove("active"), 
						d.classList.replace("mdi-check-circle-outline", "mdi-checkbox-blank-circle-outline"), 
						totalIntegraerp = 0,
						gvProds.Integraerp = !1
					) : null;

				d = document.getElementById('check-soporte');
				d.parentElement.parentElement.classList.contains("active") 
					? (
						d.parentElement.parentElement.classList.remove("active"), 
						d.classList.replace("mdi-check-circle-outline", "mdi-checkbox-blank-circle-outline"), 
						totalSoporte = 0,
						gvProds.Soporte = !1
					) : null;	
			};			
			//const d = document.getElementById("total-asistencia-container");
			//gvProds.GestionAcceso ? d.classList.add("active") : d.classList.remove("active"), 
			triggerChanges()
		};

    },
    industryAction = () => {
		var selectBox = document.getElementById("industria-select");
		ind = selectBox.options[selectBox.selectedIndex].value;
		//alert(selectedValue);
		document.getElementById('industria-img').src="/wp-content/themes/geovictoriacom/gvcalc/img/ind_"+ind+".png";
    },
	updateInputProds = (e) => {
		gvProds.CtrlAsistencia
		? (
			document.getElementById("total-empleados-asistencia-input").value = e, 
			totalEmpleadosAsistencia = e
		) :	null;
		gvProds.Acceso
		? (
			document.getElementById("total-empleados-acceso-input").value = e, 
			totalEmpleadosAcceso = e
		) :	null;
		gvProds.Comedor
		? (
			document.getElementById("total-empleados-comedor-input").value = e, 
			totalEmpleadosComedor = e
		) :	null;
		gvProds.Externos
		? (
			document.getElementById("total-empleados-externos-input").value = e, 
			totalEmpleadosExternos = e
		) :	null;
    };
var nonLinearSlider = document.getElementById("myRange");
noUiSlider.create(nonLinearSlider, {
    start: [1],
    range: {
        min: [1],
        "50%": [500],
        max: [1e3]
    }
}), nonLinearSlider.noUiSlider.on("slide", a => {
    totalEmpleados = parseInt(a[0]), 
	document.getElementById("total-empleados-input").value = `${parseInt(a[0])}`, 
	updateInputProds(totalEmpleados), 
	/*
	document.getElementById("total-empleados-asistencia-input").value = `${parseInt(a[0])}`, 
	totalEmpleadosAsistencia = parseInt(document.getElementById("total-empleados-asistencia-input").value), */
	triggerChanges()
}), initCalculator();

const containList = document.querySelectorAll(".tabs-contain"),
    tabsContainer = document.getElementById("tabs-list"),
    activeTab = (a = null, b = null) => {
        const c = document.getElementById(b),
            d = c.parentNode.childNodes;
        d.forEach(a => {
            a.classList.remove("is-active")
        }), c.classList.add("is-active"), containList.forEach(a => {
            a.classList.remove("active")
        }), document.getElementById(a).classList.add("active");
        for (let c = 0; c < d.length; c++) {
            if (d[c].classList.contains("is-active") && 0 === c) {
                document.getElementById("prev-tab").classList.add("hidden");
                break
            } else document.getElementById("prev-tab").classList.remove("hidden"), document.getElementById("next-tab").classList.remove("hidden");
            if (d[c].classList.contains("is-active") && c === d.length - 1) {
                document.getElementById("next-tab").classList.add("hidden");
                break
            } else document.getElementById("next-tab").classList.remove("hidden"), document.getElementById("prev-tab").classList.remove("hidden")
        }
    },
    nextTab = () => {
        const a = document.querySelectorAll(".tab");
        for (let b = 0; b < a.length; b++)
            if (a[b].classList.contains("is-active")) {
                a[b].classList.remove("is-active"), a[b + 1].classList.add("is-active"), containList.forEach(a => {
                    a.classList.remove("active")
                }), document.getElementById(a[b + 1].classList[1]).classList.add("active"), b + 2 === a.length ? document.getElementById("next-tab").classList.add("hidden") : document.getElementById("next-tab").classList.remove("hidden"), document.getElementById("prev-tab").classList.remove("hidden");
                break
            }
    },
    prevTab = () => {
        const a = document.querySelectorAll(".tab");
        for (let b = 0; b < a.length; b++)
            if (a[b].classList.contains("is-active")) {
                a[b].classList.remove("is-active"), a[b - 1].classList.add("is-active"), containList.forEach(a => {
                    a.classList.remove("active")
                }), document.getElementById(a[b - 1].classList[1]).classList.add("active"), 0 == b - 1 ? document.getElementById("prev-tab").classList.add("hidden") : document.getElementById("prev-tab").classList.remove("hidden"), document.getElementById("next-tab").classList.remove("hidden");
                break
            }
    },
   cotizationtoPdf = () => {
	    const form = document.getElementById("cotizacion-form");
		periodo = "Mensual";
		if(descuent===true) periodo = "Anual";
		
		query = "?s="+site+"&i="+ind+"&p="+periodo+"&t="+(totalGeneral).toFixed(2)+"&tas="+(totalAsistencia).toFixed(2)+"&tac="+(totalAcceso).toFixed(2)+"&tco="+(totalComedor).toFixed(2)+"&tex="+(totalExternos).toFixed(2)+"&tpo="+(totalPowerbi).toFixed(2)+"&tre="+(totalReporte).toFixed(2)+"&tfo="+(totalFormapp).toFixed(2)+"&top="+(totalOptimizador).toFixed(2)+"&tin="+(totalIntegraerp).toFixed(2)+"&tso="+(totalSoporte).toFixed(2)+"&uto="+totalEmpleados+"&uas="+totalEmpleadosAsistencia+"&uac="+totalEmpleadosAcceso+"&uco="+totalEmpleadosComedor+"&uex="+totalEmpleadosExternos+"&pas="+asistenciaBoxlHTML.innerText+"&pac="+accesoBoxlHTML.innerText+"&pco="+comedorBoxlHTML.innerText+"&pex="+externosBoxlHTML.innerText+"&fn="+form.name.value;

		var link=document.createElement("a");
		link.href="/wp-content/themes/geovictoriacom/calculator-pdf-download.php"+query;
		link.click();
		
    },
   cotizationtoMail = () => {
		const form = document.getElementById("cotizacion-form");
		periodo = "Mensual";
		if(descuent===true) periodo = "Anual";

		query = "?s="+site+"&i="+ind+"&p="+periodo+"&t="+(totalGeneral).toFixed(2)+"&tas="+(totalAsistencia).toFixed(2)+"&tac="+(totalAcceso).toFixed(2)+"&tco="+(totalComedor).toFixed(2)+"&tex="+(totalExternos).toFixed(2)+"&tpo="+(totalPowerbi).toFixed(2)+"&tre="+(totalReporte).toFixed(2)+"&tfo="+(totalFormapp).toFixed(2)+"&top="+(totalOptimizador).toFixed(2)+"&tin="+(totalIntegraerp).toFixed(2)+"&tso="+(totalSoporte).toFixed(2)+"&uto="+totalEmpleados+"&uas="+totalEmpleadosAsistencia+"&uac="+totalEmpleadosAcceso+"&uco="+totalEmpleadosComedor+"&uex="+totalEmpleadosExternos+"&pas="+asistenciaBoxlHTML.innerText+"&pac="+accesoBoxlHTML.innerText+"&pco="+comedorBoxlHTML.innerText+"&pex="+externosBoxlHTML.innerText+"&fn="+form.name.value+"&fm="+form.email.value+"&fe="+form.company.value+"&ft="+form.phone.value;

		var xhr = new XMLHttpRequest();
		xhr.open("GET", '/wp-content/themes/geovictoriacom/calculator-sendmail.php'+query, true);
		xhr.send(query);		
    };
	
function modalAction(a, b = "navbar") {
	document.getElementById("step1-title").style.display = 'block';
	document.getElementById("step1-content").style.display = 'block';	
	document.getElementById("step2-title").style.display = 'none';
	document.getElementById("step2-content").style.display = 'none';	
	
    cotizacionModal = b;
    let c = document.getElementById(a),
        d = c.getElementsByClassName("modal-content")[0];
    const e = document.getElementsByTagName("html")[0];
    c.classList.toggle("is-active"), e.classList.toggle("is-clipped"), setTimeout(() => {
        d.classList.toggle("modal-is-active")
    }, 20)
}

function cotizacionStep1() {
	const form = document.getElementById("cotizacion-form");
	//const form = document.getElementById("cotizacion-form").name.value;
    //document.getElementById("cotizacion-form").name.value.trim()==""
	//if(document.getElementById("cotizacion-form").name.value.trim()==""){
		//document.getElementById("cotizacion-form").name.focus();
	//}

	
	/*var contactForm = document.getElementById('contact-form');
	if (contactForm.checkValidity() == false) {
		var list = contactForm.querySelectorAll(':invalid');
		//console.log(list.length);
		for (var item of list) {
			item.setAttribute("style", "background-color: red;")
		}
	}	*/
	if (form.checkValidity()) {
		document.getElementById("step1-title").style.display = 'none';
		document.getElementById("step1-content").style.display = 'none';	
		document.getElementById("step2-title").style.display = 'block';
		document.getElementById("step2-content").style.display = 'block';
		cotizationtoMail();
	}		
}
function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
function getFormInputs(a) {
    let b, c = document.forms;
    for (let d = 0; d < c.length; d++)
        if (c[d].id === a) {
            b = c[d];
            break
        } let d = {};
    for (let c = 0; c < b.length; c++) d[b[c].name] = "file" === b[c].type ? b[c].files : b[c].value;
    return d
}
async function submitEstimate(a) {
    let b = getFormInputs("cotizacion-form"),
        c = {
            ...b,
            origin: cotizacionModal
        },
        d = document.getElementById(a).getElementsByClassName("gv-modal-form-interaction-answer")[0];
    createModalInteraction("loading", d);
    try {
        let c = {
            ...b,
            origin: cotizacionModal
        };
        await axios.post("/api/v2/public/estimate/", c, {
            headers: HEADERS
        });
        setTimeout(() => {
            createModalInteraction("success", d)
        }, 1500), setTimeout(() => {
            a && modalAction(a), createModalInteraction("destroy", d)
        }, 5e3), document.getElementById("cotizacion-form").reset(), dataLayer.push({
            event: "sales_form",
            category: "click",
            label: "label"
        })
    } catch (a) {
        setTimeout(() => {
            createModalInteraction("error", d)
        }, 1500)
    }
}