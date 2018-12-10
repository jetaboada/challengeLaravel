


  @php

    echo $pregunta;

  @endphp

  <form class="" action="/presentarResultado" method="post">
    @csrf

      <ul>
        @for ($i=0; $i <4 ; $i++)
          {{--<li><a class="btnjugar" href="">{{$respuestas[$i]}}</a></li>--}}
          <li style="list-style:none">
            <input type="submit" name="opcionElegida" value="{{$respuestas[$i]}}">
          </li>
        @endfor
      </ul>

      <a class="btnjugar" href="/">Salir</a>
      {{--}}<input type="submit" name="opcionElegida" value="Salir">--}}
      <input type="hidden" name="idPregunta" value="{{$idPregunta}}">
  </form>
