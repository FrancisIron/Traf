<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
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
       	return view('Empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {	
	       $request->validate([
            	'rut' => 'required',
            	'nombre' => 'required',
		'giro' => 'required',
		'telefono' => 'required',
		'direccion' => 'required'
       	  	]);
		$empresa = new Empresa();
		$empresa->rut = $request->input('rut');
	        $empresas->nombre = $request->input('nombre');
		$empresa->giro = $request->input('giro');
		$empresa->telefono = $request->input('telefono');
		$empresa->direccion = $request->input('direccion');
		$empresa->email = $request->input('email');
		$empresa->categoria = $request->input('categoria');
		$empresa->save();
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        return view('Empresa.show',compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        return view('Empresa.edit',compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
	$request->validate([
                'rut' => 'required',
                'nombre' => 'required',
                'giro' => 'required',
                'telefono' => 'required',
                'direccion' => 'required'
                ]);
        $empresa->update($request->all());
	return redirect()->route('Empresa.index')
                        ->with('success','empresa actuaizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
         $empresa->delete();
        
        return redirect()->route('Empresa.index')
                        ->with('success','Empresa eliminada');
    }
}
