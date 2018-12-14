@extends('app')
@section('presentarPregunta')

<div class="fondo">
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


{{--Cambio JT 13/12: TIMER--}}
    <div class="timer" style="text-align:center;font-size:300%;color:red;font-weight:bold">
      {{10}}
    </div>

{{--Cambio JT 13/12: SOLO href="/calcularPuntaje":--}}
    {{--}}    <a class="btnjugar" href="/calcularPuntaje">Salir</a>--}}
      <input type="hidden" name="idPregunta" value="{{$idPregunta}}">
  </form>

  <form action="/presentarResultado" method="post" class="este">
    @csrf

      <input class="btnjugar btndejardejugar" type="submit" name="opcionElegida" value="Dejar de jugar">

    {{--  <input class="btncrear btn-opciones" type="submit" name="opcionElegida" value="salir">
      <a class="btnjugar btndejardejugar" href="/">Dejar de Jugar</a>--}}
      <input type="hidden" name="idPregunta" value="{{$idPregunta}}">
  </form>

{{--Cambio JT 13/12: BLOQUE JS:--}}

<script type="text/javascript">
  // window.addEventListener('DOMContentLoaded')
    window.onload=function(){
      var tiempoRestante=10;
      var timer = document.querySelector('.timer');
      var contador=setInterval(function(){
        console.log('Bajamos de segundos');
        timer.innerText = tiempoRestante;
        tiempoRestante--;

        if (timer.innerText==0){
          clearInterval(contador);
          {{--location.href ="/calcularPuntaje";--}}
          document.querySelector('.este').submit();
        }
      }, 1000);
    }
</script>

      {{--<a class="btnjugar btndejardejugar" href="/">Dejar de Jugar</a>
      <input type="submit" name="opcionElegida" value="Salir">
      <input type="hidden" name="idPregunta" value="{{$idPregunta}}">--}}

  </form>
  </div>
@endsection
@section("fondo")
   {{$fondo}}
@endsection
