<?php

namespace App\Http\Controllers;

use App\Models\Orientatec;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class OrientatecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['orientatec']=Orientatec::paginate();

        return view('orientatec.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('orientatec.create');
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

        $datosOrientatec=request()->except('_token');
        Orientatec::insert($datosOrientatec);
        //return response()->json($datosAlumno);
        return redirect('orientatec')->with('Mensaje', '¡Alumno agregado con éxito!'); //Me va a mandar a index.blade
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orientatec  $orientatec
     * @return \Illuminate\Http\Response
     */
    public function show(Orientatec $orientatec)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orientatec  $orientatec
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $orientatec= Orientatec::findOrFail($id);

        return view('orientatec.edit', compact('orientatec'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orientatec  $orientatec
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


        $datosOrientatec=request()->except(['_token', '_method']);
        Orientatec::where('id', '=', $id)->update($datosOrientatec);

        return redirect('orientatec')->with('Mensaje', '¡Alumno agregado con éxito!'); //Me va a mandar a index.blade
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orientatec  $orientatec
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Orientatec::destroy($id);

        return redirect('orientatec')->with('Mensaje', '¡Alumno eliminado con éxito!');
    }

}
