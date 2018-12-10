<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/challenge.css">
    <title>Challenge</title>
  </head>
  <body>
    <div class="">

      @include("header")



      <div class="centro">
        <div class="container">
        @isset ($resultado)
          <h1>
              @if ($resultado==='acierto')
                  CORRECTO!!!
              @else
                  RESPUESTA EQUIVOCADA...
              @endif
          </h1>
        @endisset

          <p>
            TOTAL RESPUESTAS: {{$totalRespuestas}};
            TOTAL ACIERTOS: {{$totalAciertos }};
            PUNTAJE DEL USUARIO: {{ROUND($totalAciertos/$totalRespuestas*100)}} /100;

          </p>
          {{--<form class="" action="/presentarPregunta" method="post">--}}
            <a class="btnjugar" href="/presentarPregunta">jugar</a>
            {{--input type="submit" name="" value="jugar">--}}
          </form>
          <div class="" align='center'>
            <a class=""  href="/crear-pregunta"> <p></p> <p color='white'>Crear preguntas</p></a>
          </div>
          </div>
      </div>
      <!--footer class="mobile">
        <div class="footer-menu">
          <a class="footer-item-menu" href="#">Trabajo</a>
          <a class="footer-item-menu" href="#">Desarrolladores</a>
          <a class="footer-item-menu" href="#">Inversiones</a>
          <a class="footer-item-menu" href="#">Publicidades</a>
          <a class="footer-item-menu" href="#">Proveedores</a>
        </div>
        <div class="footer-menu">
          <a class="footer-item-menu" href="#">Enlaces útiles</a>
          <a class="footer-item-menu" href="#">Ayuda</a>
          <a class="footer-item-menu" href="#">App movil</a>
        </div>
        <ul class="social-media">
						<li><a href="#"><img src="IMG/facebook.png" alt=""></a></li>
            <li><a href="#"><img src="IMG/twitter.png" alt=""></a></li>
            <li><a href="#"><img src="IMG/instagram.png" alt=""></a></li>
        </ul>
        <div class="arg">
            <img src="img/arg.png" alt="">
        </div>
        <p>ARGENTINA</p>
        <p>(C) Challenge. Todos los derecgos reservados.</p>
      </footer-->
      <footer class="desktop">
        <div class="container">
          <div class="footer-menu">
            <a href="#">
              <img class="logo" src="img/logo.png" alt="logotipo">
            </a>
            <div class="">
              <a class="footer-item-menu" href="#">Sobre Nosotros</a>
              <a class="footer-item-menu" href="#">Compañía</a>
            </div>
            <div class="">
              <a class="footer-item-menu" href="#">Prensa</a>
              <a class="footer-item-menu" href="#">Inversiones</a>
              <a class="footer-item-menu" href="#">Trabajar con Nosotros</a>
            </div>
            <div class="">
              <a class="footer-item-menu" href="#">Términos y Condiciones</a>
              <a class="footer-item-menu" href="#">Política de Privacidad</a>
            </div>
            <ul class="social-media">
                <li><a href="#"><img src="img/facebook.png" alt=""></a></li>
                <li><a href="#"><img src="img/twitter.png" alt=""></a></li>
                <li><a href="#"><img src="img/instagram.png" alt=""></a></li>
            </ul>
          </div>
          <div class="footer-copyright">
            <div class="copyright-left">
              <p id="desktop2">(C) Challenge. Todos los derechos reservados.</p>
            </div>
            <div class="copyright-right">
              <p>ARGENTINA</p>
              <img src="img/ARG.png" alt="">
            </div>
            <div class="social-media-mobile">
                <a href="#"><img src="img/facebook.png" alt=""></a>
                <a href="#"><img src="img/twitter.png" alt=""></a>
                <a href="#"><img src="img/instagram.png" alt=""></a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>
