<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
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
        return view('Servicios.create');
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
            'nombre' => 'required',
            'descripcion' => 'required',
            'dimicilio' => 'required',
            'categoria' => 'required',
            'coste' => 'required',
        ]);
	if($request->hasFile('img_serv')){
            $file = $request->file('img_serv');
            $img_serv = $request->input('nombre').'.jpg';
            $file->move(public_path().'/service',$img_serv);
        }

	$serv =  new Service();
	$serv->nombre_produccto = $request->input('nombre');
	$serv->path = $img_serv;
	$serv->descripcion = $request->input('descripcion');
	$serv->domicilio = $request->input('domicilio');
	$serv->categoria = $request->input('categoria');
	$serv->coste = $request->input('coste');
	$serv->save(); 
	
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('Service.show',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('Service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'dimicilio' => 'required',
            'categoria' => 'required',
            'coste' => 'required',
        ]);
	$service->update($request->all());
  
        return redirect()->route('Service.index')
                        ->with('success','Servicio actuaizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        
        return redirect()->route('Service.index')
                        ->with('success','Servicio eliminado');
    }
}
