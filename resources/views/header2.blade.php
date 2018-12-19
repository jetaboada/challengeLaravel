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
        <a href="#">Home</a>
        <a href="#">Acerca</a>
        <a href="#">Challenge</a>

        @if (Auth::check())
          <a href="#">Hola {{Auth::user()["user"]}} </a>
          

        @else
          <a href="#">Registrate</a>
          <p>  |  </p>
          <a href="#">Iniciar sesión</a>
        @endif

      </nav>
    </nav>
  </div>
</header>
