//Arreglos / Arrays
let frutas = ["manzana", "plátano", "naranja", "frutilla"];
for (let fruta of frutas) {
    console.log(fruta);
}

//Matrices / Arrays de Arrays
let numeros = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
]
for(let fila of numeros){
    for(let elemento of fila){
        console.log(elemento);
    }
}

//RECORRER FILAS
for (let i = 0; i < numeros.length; i++) {
    //RECORRER COLUMNAS
    for (let j = 0; j < numeros[i].length; j++) {
    console.log("Elemento "+numeros[i][j]);
    }
}

/*
    OBJETOS
    Son estructuras de datos que almacenan datos en pares
    CLAVE - VALOR.
*/
let persona = {
    nombre: "Luis Díaz",
    edad: 40,
    ciudad: "La Serena"
};
console.log(persona.nombre); // "Luis Díaz"
console.log(persona.edad);   // 40

for(let propiedad in persona){
    console.log(propiedad +": "+persona[propiedad]);
}