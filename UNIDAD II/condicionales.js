/*
    ESTRUCTURA IF AND ELSE
*/

let age = 18;
if(age >= 18){
    console.log("Eres MAYOR de edad");
} else {
    console.log("Eres MENOR de edad");
}

let nota = 6.8;
if(nota >= 6.0){
    console.log("Aprobado con DISTINCIÓN MÁXIMA");
}else if (nota >=4.0){
    console.log("APROBADO");
}else{
    console.log("REPROBADO");
}

/*
    OPERADOR TERNARIO ?

    Se utiliza para asignar un valor a una variable en función de una condición
    let resultado = condicion ? valorSiVerdadero : valorSiFalso;
*/

let mensaje = age >= 18 ? "Eres MAYOR de edad" : "Eres MENOR de edad";
console.log(mensaje);

/*
    ESTRUCTURA SWITCH
*/
let dia = 1;
let nombreDia;

switch(dia){
    case 1:
        nombreDia = "Lunes";
        break;
    case 2:
        nombreDia = "Martes";
        break;
    case 3:
        nombreDia = "Miercoles";
        break;
    case 4:
        nombreDia = "Jueves";
        break;
    case 5:
        nombreDia = "Viernes";
        break;
    case 6:
    case 7:
        nombreDia = "Es fin de semana";
        break;
    default:
        nombreDia = "Día inválido";
}
console.log(nombreDia);