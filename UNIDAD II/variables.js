// En JS se puede declarar variables usando:
var name = "María Rojas"; //Solo están disponibles dentro de la función donde se declararon. Si no, tienen un ámbito global
let edad = 20; //Son accesibles dentro del bloque donde se declaran, ya sea una función, condicional, bucle, etc.
const pi = 3.1416; //No se puede reasignar un valor después de su inicialización.

// Declarar una variables
var username = "Root";
var pin = 4321;

// Mostrar el valor de la variable en la consola
console.log("Usuario: " + username);
console.log("Pin: " + pin);

//Descomentar
//exampleVar();
//exampleLet();
//exampleConst();

function exampleVar(){
    var a = 5;
    if (true) {
        var b = 10;
    }
    console.log(a); // 5
    console.log(b); // 10
}

function exampleLet() {
    let x = 15;
    if (true) {
      let y = 30;
      console.log(x); // 15
      console.log(y); // 30
    }
    console.log(x); // 15
    //console.log(y); // Error: y no está definido
}

function exampleConst() {
    const PI = 3.1416;
    if (true) {
        const maximoIntentos = 3;
        console.log(PI); // 3.1416
        console.log(maximoIntentos); // 3
    }
    // PI = 5; // Error: Asignación a variable constante
}