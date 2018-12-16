@extends('app')

@section('content')
  <div class="contenedor">
    <div class="cuerpo">
      <h1 class="parrafochallenge1">Reglas del Juego</h1>
     <div class="columnastexto">
       <h2 class="titulo2" >Objetivo del Juego</h2>
       <p class="parrafochallenge">El Juego se termina cuando se hayan respondido todas las preguntas
       o en el momento que el jugador se canse y deje de jugar. <br> Cada jugador tiene la posibilidad de agregar preguntas que al azar puede jugar con ellas o no.</p>
     </div>
     <div class="columnastexto">
       <h2 class="titulo2" >Cómo se juega</h2>
       <p class="parrafochallenge">En la primer pantalla el jugador encuentra un botón de Jugar. Al precionarlo salta a una página donde aparecen preguntas al azar. Al clickear el botón de la pregunta correcta el jugador contesta y puede ser verdadera o falsa.</p>
     </div>
     <div class="columnastexto">
       <h2 class="titulo2" >Fin de la partida</h2>
       <p class="parrafochallenge">El jugador puede finalizar el juego en el momento que desee. Las preguntas tienen un timer que da 10 segundos, <br> en el caso que no se conteste en ese tiempo la pregunta se considera incorrecta. </p>
     </div>
     <div class="columnastexto">
       <h2 class="titulo2" >Puntaje</h2>
       <p class="parrafochallenge"> El puntaje del jugador es una proporción de las partidas ganadas en la cantidad de veces que el jugador quisiera jugar en su sesión, por ejemplo si el jugador jugó 11 veces y acertó 10 va a tener un 91/100 de aciertos como puntaje.</p>
     </div>

    <div class="pie">
    © 2018 Challenge
    </div>
  </div>


@endsection
