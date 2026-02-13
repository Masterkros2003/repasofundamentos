// --- 1. GENERAR EL CARTÓN ALEATORIO ---
let miCarton = [];

// Queremos 5 números en el cartón
while (miCarton.length < 5) {
    let numeroAleatorio = Math.floor(Math.random() * 90) + 1;
    
    // Comprobamos si el número ya está en el cartón para no repetirlo
    let yaExiste = false;
    for (let i = 0; i < miCarton.length; i++) {
        if (miCarton[i] === numeroAleatorio) {
            yaExiste = true;
        }
    }

    // Si no existe, lo guardamos
    if (yaExiste === false) {
        miCarton.push(numeroAleatorio);
    }
}

console.log("Tu cartón es: " + miCarton);

// --- 2. JUGAR HASTA QUE SALGA BINGO ---
let aciertos = 0;
let bolasSacadas = 0;
let historialDeBolas = [];

console.log("¡Empieza el sorteo!");

// El bucle seguirá sacando bolas hasta que aciertos sea 5
while (aciertos < 5) {
    let bola = Math.floor(Math.random() * 90) + 1;
    
    // Evitamos que salga la misma bola dos veces del bombo
    let bolaRepetida = false;
    for (let k = 0; k < historialDeBolas.length; k++) {
        if (historialDeBolas[k] === bola) {
            bolaRepetida = true;
        }
    }

    if (bolaRepetida === false) {
        historialDeBolas.push(bola);
        bolasSacadas++;
        console.log("Ha salido la bola: " + bola);

        // Comprobamos si la bola está en nuestro cartón
        for (let j = 0; j < miCarton.length; j++) {
            if (bola === miCarton[j]) {
                aciertos++;
                console.log("¡LO TENGO! Llevas " + aciertos + " aciertos.");
            }
        }
    }
}

console.log("----------------------------");
console.log("¡BINGO! Ganaste en " + bolasSacadas + " rondas.");
console.log("----------------------------");