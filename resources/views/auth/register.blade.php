@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrate') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Subí tu foto') }}</label>
                        <form class="registro" action="/register.blade.php" method="post"enctype="multipart/form-data">
                        <input type="file" name="file" value="">
                        </div>

                        <div class="form-group row">
                            <label for="fecha_de_Nacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de Nacimiento') }}</label>
                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" placeholder="Fecha" required>
                            </div>
                        </div>
                        <br>
                    <div class="genero1">

                        <?php if (isset($_POST["genero"]) && $_POST["genero"] == "masculino") : ?>
                        <input id="genero" type="radio" name="genero" value="masculino" checked>
                        <?php else : ?>
                        <input id="genero" type="radio" name="genero" value="masculino">
                        <?php endif; ?>
                        <span class="genero">Masculino</span>

                        <?php if (isset($_POST["genero"]) && $_POST["genero"] == "femenino") : ?>
                        <input id="genero" type="radio" name="genero" value="femenino" checked>
                        <?php else : ?>
                        <input id="genero" type="radio" name="genero" value="femenino">
                        <?php endif; ?>
                        <span class="genero">Femenino</span>

                        <?php if (isset($_POST["genero"]) && $_POST["genero"] == "otro") : ?>
                        <input id="genero" type="radio" name="genero" value="otro" checked>
                        <?php else : ?>
                        <input id="genero" type="radio" name="genero" value="otro">
                        <?php endif; ?>
                        <span class="genero">Prefiero no decirlo</span>

                        <?php if (isset($errores["genero"])) : ?>
                         <p class="mensaje-error">
                         <?=$errores["genero"]?>
                        </p>
                         <?php endif; ?>
                    </div>
                    <br><br>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            <div>
                   <p class="fin">Al hacer clic en Registrarse, acepta los <strong><a class="fin" href="#">Términos y Condiciones</a></strong> de Uso de Challenge.
                   <br>
                   Para obtener más información sobre cómo Challenge recopila, utiliza, comparte y protege sus datos personales, <br> lee la <strong><a class="fin" href="#">Política de Privacidad</a></strong> de Challenge.</p>

              </form>

            </div>
            <div class="fin">
              <h5>¿Ya tenes una cuenta? <strong><a class="fin" href="/login.blade.html">Iniciar sesión</a></strong></h5>
            </div>
          </div>
            </div>
        </div>
    </div>
</div>
@endsection