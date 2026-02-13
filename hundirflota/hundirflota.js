document.addEventListener('DOMContentLoaded', () => {

  let tamayo = Number(prompt('Dime el tamaño del tablero'));

  let tableroSolucionJ1 = crearMatriz(tamayo);
  let tableroSolucionJ2 = crearMatriz(tamayo);

  let tableroJ1 = crearMatriz(tamayo);
  let tableroJ2 = crearMatriz(tamayo);

  function crearMatriz(tam) {
    let m = [];
    for (let i = 0; i < tam; i++) {
      m[i] = [];
      for (let j = 0; j < tam; j++) {
        m[i][j] = 0;
      }
    }
    return m;
  }

  const crearTablaJugada = (jugador, tableroJ1, tableroJ2) => {

  let table = document.createElement('table');
  let tablero = null;

  if (jugador == 1) tablero = tableroJ1;
  else tablero = tableroJ2;

  for (let i = 0; i < tablero.length; i++) {
    let fila = document.createElement('tr');

    for (let j = 0; j < tablero[i].length; j++) {
      let columna = document.createElement('td');
      columna.id = ${i},${j};
      columna.style.width = "32px";
      columna.style.height = "32px";

      if (tablero[i][j] == 1) {
        columna.style.backgroundColor = "red";
      } else if (tablero[i][j] == 2) {
        columna.style.backgroundColor = "blue";
      }
      columna.style.border = "2px solid black";

      columna.addEventListener('click', (e) => {

        // ✅ SOLO PUEDE JUGAR EL QUE TIENE EL TURNO
        if (jugador != turno) return;

        let acertado = true;

        const [c1, c2] = e.target.id.split(',');
        const coordenada1 = Number(c1);
        const coordenada2 = Number(c2);

        if (jugador == 1) {
          if (tableroSolucionJ2[coordenada1][coordenada2] != 1) {
            acertado = false;
            tableroJ1[coordenada1][coordenada2] = 2;
          } else {
            tableroJ1[coordenada1][coordenada2] = 1;
          }
        } else {
          if (tableroSolucionJ1[coordenada1][coordenada2] != 1) {
            acertado = false;
            tableroJ2[coordenada1][coordenada2] = 2;
          } else {
            tableroJ2[coordenada1][coordenada2] = 1;
          }
        }

        let divtableroJ1 = document.querySelector('#tableroJ1');
        let divtableroJ2 = document.querySelector('#tableroJ2');

        if (jugador == 1) {
          const tablaJ1 = crearTablaJugada(1, tableroJ1, tableroJ2);
          divtableroJ1.innerHTML = "";
          divtableroJ1.appendChild(tablaJ1);
        } else {
          const tablaJ2 = crearTablaJugada(2, tableroJ1, tableroJ2);
          divtableroJ2.innerHTML = "";
          divtableroJ2.appendChild(tablaJ2);
        }

        if (!acertado) {

          if (jugador == 1) {
            turno = 2;
            alert("Le toca al jugador 2");

            divtableroJ1.style.display = "none";
            divtableroJ2.style.display = "block";

            const tablaJ2 = crearTablaJugada(2, tableroJ1, tableroJ2);
            divtableroJ2.innerHTML = "";
            divtableroJ2.appendChild(tablaJ2);

          } else {
            turno = 1;
            alert("Le toca al jugador 1");

            divtableroJ2.style.display = "none";
            divtableroJ1.style.display = "block";

            const tablaJ1 = crearTablaJugada(1, tableroJ1, tableroJ2);
            divtableroJ1.innerHTML = "";
            divtableroJ1.appendChild(tablaJ1);
          }
        }

      });

      fila.appendChild(columna);
    }
    table.appendChild(fila);
  }

  return table;
};



    let turno = 1;
    document.querySelector('#tableroJ2').style.display = "none";


  if (turno == 1) {
    const tablaJ1 = crearTablaJugada(1, tableroJ1, tableroJ2);
    let divtableroJ1 = document.querySelector('#tableroJ1');
    divtableroJ1.innerHTML = "";
    divtableroJ1.appendChild(tablaJ1);
  } else {
    const tablaJ2 = crearTablaJugada(2, tableroJ1, tableroJ2);
    let divtableroJ2 = document.querySelector('#tableroJ2');
    divtableroJ2.innerHTML = "";
    divtableroJ2.appendChild(tablaJ2);
  }

  const crearTablaSolucion = (jugador, tablero) => {
    let table = document.createElement('table');

    for (let i = 0; i < tablero.length; i++) {
      let fila = document.createElement('tr');

      for (let j = 0; j < tablero[i].length; j++) {
        let columna = document.createElement('td');
        columna.id = ${i},${j};
        columna.style.width = "32px";
        columna.style.height = "32px";

        if (tablero[i][j] == 1) {
          columna.style.backgroundColor = "red";
        } else if (tablero[i][j] == 2) {
          columna.style.backgroundColor = "blue";
        }
        columna.style.border = "2px solid black";

        fila.appendChild(columna);
      }
      table.appendChild(fila);
    }

    return table;

    
  };


  const crearTablero = (jugador) => {
    let tableroSolucion = (jugador === 1) ? tableroSolucionJ1 : tableroSolucionJ2;

    let barco3Posicion = prompt(JUGADOR ${jugador}: Posición Barco 3);
    let barco3Direccion = prompt(JUGADOR ${jugador}: Dirección izquierda/derecha/arriba/abajo);

    let [c1, c2] = barco3Posicion.split(',');
    let coordenada1 = Number(c1);
    let coordenada2 = Number(c2);

    tableroSolucion[coordenada1][coordenada2] = 1;

    switch (barco3Direccion) {
      case "izquierda":
        tableroSolucion[coordenada1][coordenada2 - 1] = 1;
        tableroSolucion[coordenada1][coordenada2 - 2] = 1;
        break;
      case "derecha":
        tableroSolucion[coordenada1][coordenada2 + 1] = 1;
        tableroSolucion[coordenada1][coordenada2 + 2] = 1;
        break;
      case "arriba":
        tableroSolucion[coordenada1 - 1][coordenada2] = 1;
        tableroSolucion[coordenada1 - 2][coordenada2] = 1;
        break;
      case "abajo":
        tableroSolucion[coordenada1 + 1][coordenada2] = 1;
        tableroSolucion[coordenada1 + 2][coordenada2] = 1;
        break;
      default:
        break;
    }

    
    console.table(tableroSolucion);
  };
  crearTablero(1);
  crearTablero(2);

  const tablaSolucionJ1 = crearTablaSolucion(1, tableroSolucionJ1, "solucion");
  let divTableroSolucionJ1 = document.querySelector('#tableroSolucionJ1');
  if (divTableroSolucionJ1) {
    divTableroSolucionJ1.innerHTML = "";
    divTableroSolucionJ1.appendChild(tablaSolucionJ1);
  }

  const tablaSolucionJ2 = crearTablaSolucion(2, tableroSolucionJ2, "solucion");
  let divTableroSolucionJ2 = document.querySelector('#tableroSolucionJ2');
  if (divTableroSolucionJ2) {
    divTableroSolucionJ2.innerHTML = "";
    divTableroSolucionJ2.appendChild(tablaSolucionJ2);
  }
});