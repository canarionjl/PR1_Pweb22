<?php

namespace App\Http\Controllers\Products;
use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\ProductoUsuario;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        return view('webViews/portal/portal_gestor', [
            'productos' => ProductoUsuario::where('usuario_id',Auth::user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
    // * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $producto_id = Producto::create([
            'titulo' => $request->get('titulo'),
            'tipoProducto_id' => $request->get('tipoProducto_id'),
        ])->id;
        ProductoUsuario::create([
            'producto_id' => $producto_id,
            'usuario_id' => Auth::user()->id,
            'cantidad' => $request->get('cantidad'),
            'precio' => $request->get('precio'),
            'equivalenciaGrUnidad' => $request->get('equivalenciaGrUnidad'),
            'unidad' => $request->get('unidad'),
        ]);
        return redirect(route('gestor.index'));
    }

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
     */
    public function edit($id)
    {
        $producto = productoUsuario::find($id);
        return view('themes/temaGrupo3/portal_gestor_editar', [
            'productos' => ProductoUsuario::where('usuario_id',Auth::user()->id)->get(),
            'productoEditar' => $producto,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
         Producto::find(ProductoUsuario::find($id)->producto_id)->update([
            'titulo' => $request->get('titulo'),
            'tipoProducto_id' => $request->get('tipoProducto_id'),
        ]);
        ProductoUsuario::find($id)->update([
            'cantidad' => $request->get('cantidad'),
            'precio' => $request->get('precio'),
            'equivalenciaGrUnidad' => $request->get('equivalenciaGrUnidad'),
            'unidad' => $request->get('unidad'),
        ]);
        return redirect(route('gestor.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $producto_id = ProductoUsuario::find($id)->producto_id;

        ProductoUsuario::find($id)->delete();
        try{
            Producto::find($producto_id)->delete();
        }catch(Exception $e){

        }

        return "OK";
    }
}
