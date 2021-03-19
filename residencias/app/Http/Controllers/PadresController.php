<?php

namespace App\Http\Controllers;

use App\Models\Padres;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;

class PadresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $datos['padres']=Padres::paginate();

        return view('padres.index',$datos);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('padres.create');
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
        $campos =[
            'NombrePadre' => 'required|string|max:100',
            'ApaternoPadre' => 'required|string|max:100',
            'AmaternoPadre' => 'required|string|max:100',
            'NoCtrl' => 'required|int|min:9',
            'NombreAlumno' => 'required|string|max:100',
            'ApaternoAlumno' => 'required|string|max:100',
            'AmaternoAlumno' => 'required|string|max:100',
            'Carrera' => 'required|string|max:100'
        ];

        $Mensaje=["required"=>'El campo: :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);

        $datosPadre=request()->except('_token');
        Padres::insert($datosPadre);
        //return response()->json($datosAlumno);
        return redirect('padres')->with('Mensaje', '¡Padre agregado con éxito!'); //Me va a mandar a index.blade
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Padres  $padres
     * @return \Illuminate\Http\Response
     */
    public function show($apaternoPadre)

    
    {
        $padres= Padres::findOrFail($apaternoPadre);
        return view('padres.show',compact('padre'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Padres  $padres
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $padre= Padres::findOrFail($id);

        return view('padres.edit', compact('padre'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Padres  $padres
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos =[
            'NombrePadre' => 'required|string|max:100',
            'ApaternoPadre' => 'required|string|max:100',
            'AmaternoPadre' => 'required|string|max:100',
            'NoCtrl' => 'required|int|min:9',
            'NombreAlumno' => 'required|string|max:100',
            'ApaternoAlumno' => 'required|string|max:100',
            'AmaternoAlumno' => 'required|string|max:100',
            'Carrera' => 'required|string|max:100'
        ];

        $Mensaje=["required"=>'El campo: :attribute es requerido'];
        $this->validate($request, $campos, $Mensaje);


        $datosPadre=request()->except(['_token', '_method']);
        Padres::where('id', '=', $id)->update($datosPadre);

        return redirect('padres')->with('Mensaje', '¡Padre modificado con éxito!');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Padres  $padres
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Padres::destroy($id);

        return redirect('padres')->with('Mensaje', '¡Padre eliminado con éxito!');
    }

    public function getAllDads()
    {
        $dads = $datos['padres']=Padres::paginate();
        return response() -> json($dads);
    }

    public function dads()
    {
        return view('datatables.indexPadres');
    }
}
