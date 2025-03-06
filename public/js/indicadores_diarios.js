'use strict';

var fecha = new Date();
var day = fecha.getDay(); //Domingo es 0, Lunes es 1 y así en adelante.
var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
var dia =fecha.getDate();
var month = fecha.getMonth();
var year = fecha.getFullYear();

switch (month){
    case 0:
        month = "enero";
        break;

    case 1:
        month = "febrero";
        break;

    case 2:
        month = "marzo";
        break;

    case 3:
        month = "abril";
        break;

    case 4:
        month = "mayo";
        break;

    case 5:
        month = "junio";
        break;

    case 6:
        month = "julio";
        break;

    case 7:
        month = "agosto";
        break;

    case 8:
        month = "septiembre";
        break;

    case 9:
        month = "octubre";
        break;

    case 10:
        month = "noviembre";
        break;

    case 11:
        month = "diciembre";
        break;
}

var fecha_hoy = document.querySelector('#fecha_actual');

fecha_hoy.innerHTML = "<span id=\"dia\">"+diasSemana[day]+" "+dia+" de "+month+" de "+ year+"</span>";

var dolar = document.querySelector('#dolar');
var euro = document.querySelector('#euro');
var uf = document.querySelector('#uf');
var utm = document.querySelector('#utm');
var bitcoin = document.querySelector('#bitcoin');
var desempleo = document.querySelector('#desempleo');

fetch('https://mindicador.cl/api')
    .then(data => data.json())
    .then(data => {
        dolar.innerHTML = ' $'+Intl.NumberFormat("cl-CL").format(data.dolar.valor);
        euro.innerHTML = ' $'+Intl.NumberFormat("cl-CL").format(data.euro.valor);
        uf.innerHTML = ' $'+Intl.NumberFormat("cl-CL").format(data.uf.valor);
        utm.innerHTML = ' $'+Intl.NumberFormat("cl-CL").format(data.utm.valor);
        bitcoin.innerHTML = ' USD '+Intl.NumberFormat("en-US").format(data.bitcoin.valor);
        desempleo.innerHTML = ' '+data.tasa_desempleo.valor+'%';
    });