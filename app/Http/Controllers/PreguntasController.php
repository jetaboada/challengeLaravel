<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Historial;
use Auth;


class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::user() == null) {
            return redirect("/login");
          }
      return view('crearPregunta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        public function store (Request $request) {

        if (Auth::user() == null) {
              return redirect("/login");
            }

          $pregunta = new Question();

          $this->validate($request, [
            "pregunta" => "required|string|min:5|max:256",
            "respuestaCorrecta" => "required|string|min:1|max:256",
            "respuestaIncorrecta01" => "required|string|min:1|max:256",
            "respuestaIncorrecta02" => "required|string|min:1|max:256",
            "respuestaIncorrecta03" => "required|string|min:1|max:256"
          ], [
            "required" => "El campo :attribute debe ser completado",
            "max" => "El campo :attribute tiene un máximo de :max"
          ]);

          $pregunta->pregunta = $request["pregunta"];
          $pregunta->categoria = "sin categoria";
          $pregunta->respuesta_correcta = $request["respuestaCorrecta"];
          $pregunta->respuesta_incorrecta_01 = $request["respuestaIncorrecta01"];
          $pregunta->respuesta_incorrecta_02 = $request["respuestaIncorrecta02"];
          $pregunta->respuesta_incorrecta_03 = $request["respuestaIncorrecta03"];
          $pregunta->dificultad = 1 ;

          $pregunta->save();

          return redirect("/index");
        }  //


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


     public function selectQuestion()
     {

       if (Auth::user() == null) {
             return redirect("/login");
           }

           $cantPreg = Question::count();
           $randomId = rand(1,$cantPreg);
           $arraypregunta=Question::find($randomId);
           $idPregunta=$arraypregunta['id'];
           $pregunta=$arraypregunta['pregunta'];
           $respuestas[]=$arraypregunta['respuesta_correcta'];
           $respuestas[]=$arraypregunta['respuesta_incorrecta_01'];
           $respuestas[]=$arraypregunta['respuesta_incorrecta_02'];
           $respuestas[]=$arraypregunta['respuesta_incorrecta_03'];
           shuffle($respuestas);
           $fondos = ["fondo1", "fondo2", "fondo3", "fondo4"];
           shuffle($fondos);
           $fondo = $fondos[0];

           return view('presentarPregunta',compact ('idPregunta','pregunta','respuestas', 'fondo'));


     }

    public function evaluarResultado(Request $request)
    {
      $arraypregunta=Question::find($request['idPregunta']);
      if ($request['opcionElegida']==$arraypregunta['respuesta_correcta']) {
             $resultado='acierto';
      }else  $resultado='desacierto';

       $historial = new Historial();

       $historial->pregunta_id = $arraypregunta["id"];
       $historial->user_id = Auth::id();
       $historial->resultado = $resultado;

       $historial->save();

       $totalRespuestas=Historial::where('user_id','=',$historial->user_id)->count();
       $totalAciertos=Historial::where('user_id','=',$historial->user_id)->where('resultado','=','acierto')->count();


     return view('presentarResultado',compact ('resultado','totalAciertos','totalRespuestas'));
    }


    public function calcularPuntaje()
    {
       $user_id = Auth::id();

       $totalRespuestas=Historial::where('user_id','=',$user_id)->count();
       $totalAciertos=Historial::where('user_id','=',$user_id)->where('resultado','=','acierto')->count();


     return view('presentarResultado',compact ('resultado','totalAciertos','totalRespuestas'));
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



}
