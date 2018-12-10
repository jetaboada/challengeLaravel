  {{--dd ("formulario para crear preguntas")--}}
  <!DOCTYPE html>
  <html lang="es" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/css/formPreguntas.css">
      <title>CrearPreguntas</title>
    </head>
@extends('app')
@if ($errors->any())
   <div class="alert alert-danger">
       <ul>
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
@endif
@section('content')
<div class="centro">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Crear nueva pregunta') }}</div>

                <div class="card-body">
                    <form method="POST" action="/crear-pregunta">
                        @csrf

                        <div class="form-group row">
                            <label for="pregunta" class="col-md-4 col-form-label text-md-right">{{ __('Pregunta') }}</label>

                            <div class="col-md-6">
                                <input id="pregunta" type="text" class="form-control{{ $errors->has('pregunta') ? ' is-invalid' : '' }}" name="pregunta" value="{{ old('pregunta') }}" required autofocus>

                                @if ($errors->has('pregunta'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('pregunta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Categoria" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

                            <div class="col-md-6">
                                <input id="Categoria" type="text" class="form-control{{ $errors->has('Categoria') ? ' is-invalid' : '' }}" name="Categoria" value="{{ old('Categoria') }}" required>

                                @if ($errors->has('Categoria'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Categoria') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="respuestaCorrecta" class="col-md-4 col-form-label text-md-right">{{ __('Respuesta Correcta') }}</label>

                            <div class="col-md-6">
                                <input id="respuestaCorrecta" type="text" class="form-control{{ $errors->has('respuestaCorrecta') ? ' is-invalid' : '' }}" name="respuestaCorrecta" value="{{ old('respuestaCorrecta') }}" required>

                                @if ($errors->has('respuestaCorrecta'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('respuestaCorrecta') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="respuestaIncorrecta01" class="col-md-4 col-form-label text-md-right">{{ __('Respuesta Incorrecta 1') }}</label>

                            <div class="col-md-6">
                                <input id="respuestaIncorrecta01" type="text" class="form-control{{ $errors->has('respuestaIncorrecta01') ? ' is-invalid' : '' }}" name="respuestaIncorrecta01" value="{{ old('respuestaIncorrecta01') }}" required>

                                @if ($errors->has('respuestaIncorrecta01'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('respuestaIncorrecta01') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="respuestaIncorrecta02" class="col-md-4 col-form-label text-md-right">{{ __('Respuesta Incorrecta 2') }}</label>

                            <div class="col-md-6">
                                <input id="respuestaIncorrecta02" type="text" class="form-control" name="respuestaIncorrecta02" value="{{ old('respuestaIncorrecta02') }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="respuestaIncorrecta03" class="col-md-4 col-form-label text-md-right">{{ __('Respuesta Incorrecta 3') }}</label>

                            <div class="col-md-6">
                                <input id="respuestaIncorrecta03" type="text" class="form-control" name="respuestaIncorrecta03" value="{{ old('respuestaIncorrecta03') }}" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                              {{--  <button type="submit" class="btn btn-primary">
                                    {{ __('Crear Pregunta') }}
                                </button>  --}}

                                <input class="btncrear" type="submit" name="" value="Agregar pregunta">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
</html>
