<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

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
        return view('crearPregunta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

                public function store (Request $request) {

          /*      if (Auth::user() == null) {
                      return redirect("/register");
                    }         */

//var_dump($request);exit;

                  $pregunta = new Question();

                  $this->validate($request, [
                    "pregunta" => "required|string|min:5|max:256",
                    "respuesta_correcta" => "required|string|min:1|max:256",
                    "respuesta_incorrecta_01" => "required|string|min:1|max:256",
                    "respuesta_incorrecta_02" => "required|string|min:1|max:256",
                    "respuesta_incorrecta_03" => "required|string|min:1|max:256"
                  ], [
                    "required" => "El campo :attribute debe ser completado",
                    "max" => "El campo :attribute tiene un máximo de :max"
                  ]);

                  $pregunta->pregunta = $request["pregunta"];
                  $pregunta->categoria = "sin categoria";
                  $pregunta->respuesta_correcta = $request["respuesta_correcta"];
                  $pregunta->respuesta_incorrecta_01 = $request["respuesta_incorrecta_01"];
                  $pregunta->respuesta_incorrecta_02 = $request["respuesta_incorrecta_02"];
                  $pregunta->respuesta_incorrecta_03 = $request["respuesta_incorrecta_03"];
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
