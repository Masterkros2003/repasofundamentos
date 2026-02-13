let turno = 0; 
let ganadasX = 0;
let ganadasO = 0;

let tablero = [
    [0, 0, 0],
    [0, 0, 0],
    [0, 0, 0]
];

function iniciarTresEnRaya() {
    const divTablero = document.querySelector('#divTablero');
    divTablero.innerHTML = ""; // Nos aseguramos de que esté vacío
    const tabla = document.createElement("table");

    for (let i = 0; i < 3; i++) {
        let fila = document.createElement("tr");
        for (let j = 0; j < 3; j++) {
            let celda = document.createElement("td");

            // Estilos básicos
            celda.style.width = "80px";
            celda.style.height = "80px";
            celda.style.border = "2px solid black";
            celda.style.fontSize = "2rem";
            celda.style.textAlign = "center";
            celda.style.cursor = "pointer";

            celda.addEventListener("click", () => {
                // Solo permitimos click si la celda está vacía y el juego no ha terminado
                if (celda.innerText == "") { 
                    if (turno % 2 == 0) {
                        celda.innerText = "X";
                        tablero[i][j] = "X";
                    } else {
                        celda.innerText = "O";
                        tablero[i][j] = "O";
                    }
                    
                    turno++; 
                    validarGanador(); 
                }
            });

            fila.appendChild(celda);
        }
        tabla.appendChild(fila);
    }
    divTablero.appendChild(tabla);
}

const validarGanador = () => {
    let ganador = null;

    // 1. Comprobar Filas
    for (let i = 0; i < 3; i++) {
        if (tablero[i][0] !== 0 && tablero[i][0] == tablero[i][1] && tablero[i][0] == tablero[i][2]) {
            ganador = tablero[i][0];
        }
    }

    // 2. Comprobar Columnas
    for (let j = 0; j < 3; j++) {
        if (tablero[0][j] !== 0 && tablero[0][j] == tablero[1][j] && tablero[0][j] == tablero[2][j]) {
            ganador = tablero[0][j];
        }
    }

    if (ganador) {
            alert("ha ganado")
            actMarcador(ganador);
    }

    if (turno == 9) {
        alert("¡Empate!");
    }
}

const actMarcador = (ganador) => {
    if (ganador == "X") {
        ganadasX++;
        document.querySelector("#puntosX").innerText = ganadasX;
    } else {
        ganadasO++;
        document.querySelector("#puntosO").innerText = ganadasO;
    }
};


const botonBorrar = document.querySelector("#btn-borrar");
botonBorrar.addEventListener("click",  () => {
    tablero = [
        [0, 0, 0],
        [0, 0, 0],
        [0, 0, 0]
    ];
    turno = 0;
    iniciarTresEnRaya();
});

iniciarTresEnRaya();