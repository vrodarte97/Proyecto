<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $datos['alumnos']=Alumnos::paginate();

        return view('alumnos.index',$datos);
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumnos.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datosAlumno=request()->all();

        $campos =[
            'NoCtrl' => 'required|int|min:9',
            'Nombre' => 'required|string|max:100',
            'Apaterno' => 'required|string|max:100',
            'Amaterno' => 'required|string|max:100',
            'Carrera' => 'required|string|max:100'
        ];

        $Mensaje=["required"=>'El campo: :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);

        $datosAlumno=request()->except('_token');
        Alumnos::insert($datosAlumno);
        //return response()->json($datosAlumno);
        return redirect('alumnos')->with('Mensaje', '¡Alumno agregado con éxito!'); //Me va a mandar a index.blade


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function show($apaterno)
    {
        //
        $alumno= Alumnos::findOrFail($apaterno);
        return view('alumnos.show',compact('alumno'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $alumno= Alumnos::findOrFail($id);

        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $campos =[
            'NoCtrl' => 'required|int|min:9',
            'Nombre' => 'required|string|max:100',
            'Apaterno' => 'required|string|max:100',
            'Amaterno' => 'required|string|max:100',
            'Carrera' => 'required|string|max:100'
        ];

        $Mensaje=["required"=>'El campo: :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);


        $datosAlumno=request()->except(['_token', '_method']);
        Alumnos::where('id', '=', $id)->update($datosAlumno);

        //$alumno= Alumnos::findOrFail($id);
        //return view('alumnos.edit', compact('alumno'));

        return redirect('alumnos')->with('Mensaje', '¡Alumno modificado con éxito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumnos  $alumnos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumnos::destroy($id);

        return redirect('alumnos')->with('Mensaje', '¡Alumno eliminado con éxito!');
        //
    }
}
