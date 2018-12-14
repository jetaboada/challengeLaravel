<header>
  <div class="container">
    <nav>
      <a href="#">
        <img class="logo" src="img/logo.png" alt="logotipo">
      </a>
      <a href="#">
        <img class="menu" src="img/barrita.png" alt="barrita">
      </a>
      <nav class="desktop">
        <a href="index.php">Home</a>
        <a href="/acerca">Acerca</a>
        <a href="/challenge">Challenge</a>

        @if (Auth::check())
          <a href="#">Hola {{Auth::user()["user"]}} </a>
          <form class="" action="logout" method="post">
            {{csrf_field()}}
              <input type="submit" value="cerrar sesion"/>
          </form>

        @else
          <a href="/register">Registrate</a>
          <p>  |  </p>
          <a href="/login">Iniciar sesión</a>
        @endif

      </nav>
    </nav>
  </div>
</header>
