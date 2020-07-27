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
    public function index()
    {
         $products = Product::paginate();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        if ($request->ajax()) {
            $product = Product::create($request->all());
            //return redirect()->view('products.index',array('mensaje' => $product->name."  fue creado correctamente, fino mano" ));
            $total_product=Product::all()->count();

            if ($request) {

                return response()->json([
                    'nombre'=> $product->name,
                    'id'=> $product->id,
                    'total'=>$total_product,
                    'mensaje'=> $product->name."  fue creado correctamente, fino mano"
                ]);
            }else {
                return response()->json([
                    'success'=> 'false',
                    'mensaje'=> $product->name."  ". " Ocurrio un error :("
                ]);
            }

        }
        /*
        $product = Product::create($request->all());


        return redirect()->route('products.index')
            ->with('info', 'guardado con éxito');
            */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //dd($id);
        $products = Product::find($id);

        return view('products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $product = Product::find($id);

        $product->update($request->all());
        //dd($product);
        //$product->roles()->sync($request->get('roles')); //k berga ezsesto
        return redirect()->route('products.index')
            ->with('info', 'Usuario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

        if ($request->ajax()) {

            //$product = Product::find($id)->delete();// de esta forma lo elimina pero falla el script y da el error 500...

            $product = Product::find($id);
            $product->delete();

            $total_product=Product::all()->count();
            return response()->json([
                'total'=>$total_product,
                'mensaje'=> $product->name. "fue eliminado correctamente, fino mano"
            ]);
        }

        /*sin ajax
        $product = Product::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
        */
    }
}
