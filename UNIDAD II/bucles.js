console.log("BUCLE WHILE");
let contador = 0;
while(contador < 5){
    console.log("Iteración "+contador);
    contador++;
}

console.log("BUCLE DO WHILE");
let counter = 0;
do {
    console.log("Iteración " + counter);
    counter++;
} while (counter < 10);

console.log("BUCLE FOR");
for (let i = 0; i < 6; i++) {
    console.log("Iteración " + i);
}

console.log("BUCLE FOR OF");
//Se utiliza para recorrer elementos de una colección, como arreglos o cadenas de texto
let dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];
for (let dia of dias) {
    console.log(dia);
}
let palabra = "Hola Mundo";
for(let letras of palabra){
    console.log(letras);
}
console.log("BUCLE FOR IN");
//Se utiliza para iterar sobre las propiedades de un objeto
let persona = {
    nombre: "Luis Díaz",
    edad: 40,
    ciudad: "La Serena"
};

for(let propiedad in persona){
    console.log(propiedad +": "+persona[propiedad]);
}