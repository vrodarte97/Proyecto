<?php

namespace App\Http\Controllers;

use App\Models\Aspirantes;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class AspirantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['aspirantes']=Aspirantes::paginate();

        return view('aspirantes.index',$datos);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aspirantes.create');
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
        //
        $campos =[
            'Nombre' => 'required|string|max:100',
            'Apaterno' => 'required|string|max:100',
            'Amaterno' => 'required|string|max:100',
            'Correo' => 'required|string|max:100',
            'Escuela' => 'required|string|max:100',
            'Carrera' => 'required|string|max:100'
        ];

        $Mensaje=["required"=>'El campo: :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);

        $datosAspirante=request()->except('_token');
        Aspirantes::insert($datosAspirante);
        //return response()->json($datosAlumno);
        return redirect('aspirantes')->with('Mensaje', '¡Alumno agregado con éxito!'); //Me va a mandar a index.blade


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aspirantes  $aspirantes
     * @return \Illuminate\Http\Response
     */
    public function show($apaterno)
    {
        //
        $aspirante= Aspirantes::findOrFail($apaterno);
        return view('aspirantes.show', compact('aspirante'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aspirantes  $aspirantes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $aspirante= Aspirantes::findOrFail($id);

        return view('aspirantes.edit', compact('aspirante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aspirantes  $aspirantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $campos =[
            'Nombre' => 'required|string|max:100',
            'Apaterno' => 'required|string|max:100',
            'Amaterno' => 'required|string|max:100',
            'Correo' => 'required|string|max:100',
            'Escuela' => 'required|string|max:100',
            'Carrera' => 'required|string|max:100'
        ];

        $Mensaje=["required"=>'El campo: :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);

        $datosAspirante=request()->except(['_token', '_method']);
        Aspirantes::where('id', '=', $id)->update($datosAspirante);
        
        return redirect('aspirantes')->with('Mensaje', '¡Alumno modificado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aspirantes  $aspirantes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Aspirantes::destroy($id);

        return redirect('aspirantes')->with('Mensaje', '¡Alumno eliminado con éxito!');
        //
    }

    public function getAllStudents1()
    {
        $students1 = $datos['aspirantes']=Aspirantes::paginate();
        return response() -> json($students1);
    }

    public function students1()
    {
        return view('datatables.indexStudents1');
    }
}
