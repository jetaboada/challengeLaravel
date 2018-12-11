@extends('app')
@section('presentarPregunta')


 <h3>{{$pregunta}}</h3>

  <form action="/presentarResultado" method="post">
    @csrf

      <ul>
        @for ($i=0; $i <4 ; $i++)
          {{--<li><a class="btnjugar" href="">{{$respuestas[$i]}}</a></li>--}}
          <li style="list-style:none">
            <input class="btncrear btn-opciones" type="submit" name="opcionElegida" value="{{$respuestas[$i]}}">
          </li>
        @endfor
      </ul>

      <a class="btnjugar" href="/">Salir</a>
      {{--}}<input type="submit" name="opcionElegida" value="Salir">--}}
      <input type="hidden" name="idPregunta" value="{{$idPregunta}}">
  </form>
  @endsection
