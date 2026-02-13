// Array para guardar todos los cartones generados
let cartonesGenerados = [];

// Función para generar un cartón de bingo válido
function generarCarton() {
    let intentosMaximos = 1000;
    let cartonValido = false;
    let carton = [];

    // Intentar generar un cartón válido
    while (!cartonValido && intentosMaximos > 0) {
        carton = generarCartonIntento();

        // Verificar que no haya 3 números consecutivos horizontalmente
        if (validarNoTresConsecutivosHorizontales(carton)) {
            cartonValido = true;
        }

        intentosMaximos--;
    }

    return carton;
}

// Función auxiliar para generar un intento de cartón
function generarCartonIntento() {
    // Matriz del cartón de bingo (3 filas x 9 columnas)
    let carton = [];

    // Inicializar matriz 3x9 con ceros
    for (let i = 0; i < 3; i++) {
        carton[i] = [];
        for (let j = 0; j < 9; j++) {
            carton[i][j] = 0;
        }
    }

    // Paso 1: Decidir cuántos números tendrá cada columna (1 o 2, nunca 3 ni 0)
    let numerosEnColumna = [];
    let totalNumeros = 0;

    // Primero asignar 1 número a cada columna (9 números)
    for (let i = 0; i < 9; i++) {
        numerosEnColumna[i] = 1;
        totalNumeros++;
    }

    // Ahora añadir 6 números más aleatoriamente (para llegar a 15)
    while (totalNumeros < 15) {
        let colAleatoria = Math.floor(Math.random() * 9);

        // Solo añadir si la columna tiene menos de 2 números
        if (numerosEnColumna[colAleatoria] < 2) {
            numerosEnColumna[colAleatoria]++;
            totalNumeros++;
        }
    }

    // Paso 2: Colocar los números en las columnas
    for (let columna = 0; columna < 9; columna++) {
        let cantidadNumeros = numerosEnColumna[columna];

        // Si la columna tiene 1 número, elegir una fila aleatoria
        if (cantidadNumeros === 1) {
            let filaAleatoria = Math.floor(Math.random() * 3);
            let numero = generarNumeroParaColumna(columna);
            carton[filaAleatoria][columna] = numero;
        }
        // Si la columna tiene 2 números, elegir 2 filas diferentes
        else if (cantidadNumeros === 2) {
            let fila1 = Math.floor(Math.random() * 3);
            let fila2 = Math.floor(Math.random() * 3);

            // Asegurar que sean filas diferentes
            while (fila2 === fila1) {
                fila2 = Math.floor(Math.random() * 3);
            }

            // Generar y colocar el primer número
            let numero1 = generarNumeroParaColumna(columna);
            carton[fila1][columna] = numero1;

            // Generar y colocar el segundo número (diferente al primero)
            let numero2 = generarNumeroParaColumna(columna);
            while (numero2 === numero1) {
                numero2 = generarNumeroParaColumna(columna);
            }
            carton[fila2][columna] = numero2;
        }
    }

    // Paso 3: Ajustar para que cada fila tenga exactamente 5 números
    for (let intentos = 0; intentos < 100; intentos++) {
        let todasFilasCorrectas = true;

        for (let fila = 0; fila < 3; fila++) {
            let contador = contarNumerosEnFila(carton, fila);

            if (contador !== 5) {
                todasFilasCorrectas = false;

                if (contador > 5) {
                    // Quitar un número de esta fila
                    let colAleatoria = Math.floor(Math.random() * 9);

                    if (carton[fila][colAleatoria] !== 0 && contarNumerosEnColumna(carton, colAleatoria) > 1) {
                        carton[fila][colAleatoria] = 0;
                    }
                } else if (contador < 5) {
                    // Añadir un número a esta fila
                    let colAleatoria = Math.floor(Math.random() * 9);

                    if (carton[fila][colAleatoria] === 0 && contarNumerosEnColumna(carton, colAleatoria) < 2) {
                        let numero = generarNumeroParaColumna(colAleatoria);

                        while (existeEnColumna(carton, colAleatoria, numero)) {
                            numero = generarNumeroParaColumna(colAleatoria);
                        }

                        carton[fila][colAleatoria] = numero;
                    }
                }
            }
        }

        if (todasFilasCorrectas) {
            break;
        }
    }

    // Paso 4: Ordenar números en cada columna de arriba a abajo
    for (let columna = 0; columna < 9; columna++) {
        let numeros = [];

        // Recoger los números de esta columna
        for (let fila = 0; fila < 3; fila++) {
            if (carton[fila][columna] !== 0) {
                numeros.push(carton[fila][columna]);
            }
        }

        // Ordenar de menor a mayor
        numeros.sort(function (a, b) {
            return a - b;
        });

        // Volver a colocar los números ordenados
        let indiceNumero = 0;
        for (let fila = 0; fila < 3; fila++) {
            if (carton[fila][columna] !== 0) {
                carton[fila][columna] = numeros[indiceNumero];
                indiceNumero++;
            }
        }
    }

    return carton;
}

// Función para validar que no haya 3 números consecutivos horizontalmente
function validarNoTresConsecutivosHorizontales(carton) {
    for (let fila = 0; fila < 3; fila++) {
        let consecutivos = 0;

        for (let col = 0; col < 9; col++) {
            if (carton[fila][col] !== 0) {
                consecutivos++;

                // Si hay 3 consecutivos, el cartón no es válido
                if (consecutivos >= 3) {
                    return false;
                }
            } else {
                // Resetear el contador cuando encuentra un espacio vacío
                consecutivos = 0;
            }
        }
    }

    return true;
}

// Función para generar un número aleatorio según la columna
function generarNumeroParaColumna(columna) {
    let numero;

    if (columna === 0) {
        // Columna 0: números del 1 al 9
        numero = Math.floor(Math.random() * 9) + 1;
    } else if (columna === 8) {
        // Columna 8: números del 80 al 90
        numero = Math.floor(Math.random() * 11) + 80;
    } else {
        // Resto de columnas: generar 0-9 y sumar columna*10
        numero = Math.floor(Math.random() * 10) + (columna * 10);
    }

    return numero;
}

// Función auxiliar para verificar si un número existe en una columna
function existeEnColumna(carton, columna, numero) {
    for (let fila = 0; fila < 3; fila++) {
        if (carton[fila][columna] === numero) {
            return true;
        }
    }
    return false;
}

// Función auxiliar para contar cuántos números hay en una columna
function contarNumerosEnColumna(carton, columna) {
    let contador = 0;
    for (let fila = 0; fila < 3; fila++) {
        if (carton[fila][columna] !== 0) {
            contador++;
        }
    }
    return contador;
}

// Función auxiliar para contar cuántos números hay en una fila
function contarNumerosEnFila(carton, fila) {
    let contador = 0;
    for (let col = 0; col < 9; col++) {
        if (carton[fila][col] !== 0) {
            contador++;
        }
    }
    return contador;
}

// Función para crear y mostrar un cartón en el DOM
function crearTablaCarton(carton) {
    let tabla = document.createElement('table');

    for (let fila = 0; fila < 3; fila++) {
        let tr = document.createElement('tr');

        for (let col = 0; col < 9; col++) {
            let td = document.createElement('td');

            if (carton[fila][col] === 0) {
                td.className = 'vacio';
                td.innerHTML = '';
            } else {
                td.innerHTML = carton[fila][col];
            }

            tr.appendChild(td);
        }

        tabla.appendChild(tr);
    }

    return tabla;
}

// Función para generar un nuevo cartón y añadirlo a la página
function generarNuevoCarton() {
    let nuevoCarton = generarCarton();
    cartonesGenerados.push(nuevoCarton);

    let contenedor = document.getElementById('contenedorCartones');

    let titulo = document.createElement('h1');
    titulo.innerHTML = 'Cartón ' + cartonesGenerados.length;
    contenedor.appendChild(titulo);

    let tabla = crearTablaCarton(nuevoCarton);
    contenedor.appendChild(tabla);
}