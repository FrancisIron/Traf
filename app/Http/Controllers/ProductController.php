<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
        return view('Productos.create');
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
            'coste' => 'required',
            'stock' => 'required',
	    'descripcion' => 'required',
            'empresa' => 'required',
	    'categoria' => 'required'
        ]);
	$prod = new Product();
	$prod->nombre = $request->input('nombre');
	$prod->coste = $request->input('coste');
	$prod->stock = $request->input('stock');
	$prod->descripcion = $request->input('descripcion');
	$prod->empresa = $request->input('empresa');
	$prod->categoria = $request->input('categoria');
        $prod->save();
	return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('Product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'nombre' => 'required',
            'coste' => 'required',
            'stock' => 'required',
            'descripcion' => 'required',
            'empresa' => 'required',
            'categoria' => 'required'
        ]);
        $product->update($request->all());
	return redirect()->route('Product.index')
                        ->with('success','Producto actuaizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $produt->delete();
        
        return redirect()->route('Product.index')
                        ->with('success','Producto eliminado');
    }
}
