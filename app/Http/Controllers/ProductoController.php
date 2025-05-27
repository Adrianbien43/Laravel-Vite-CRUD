<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Almacen;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::paginate(5);
        return view('modules.productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::all();
        $almacenes = Almacen::all();
        return view('modules.productos.create', compact('categorias', 'almacenes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'observaciones' => 'nullable|string|max:255',
            'precio' => 'required|numeric|min:0',
            'categorias' => 'required|array',
            'categorias.*' => 'exists:categorias,id',
            'almacenes' => 'required|array',
            'almacenes.*' => 'exists:almacenes,id',
        ]);

        try {
            DB::beginTransaction();

            $productos = new Producto;
            $productos->nombre = $request->input('nombre');
            $productos->observaciones = $request->input('observaciones');
            $productos->precio = $request->input('precio');
            $productos->save();

            $productos->categorias()->sync($request->input('categorias'));

            $productos->almacenes()->sync($request->input('almacenes'));

            DB::commit();

            return redirect()->route('modules.productos.index')
                ->with('success', 'Producto creado correctamente.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error al guardar el producto: ' . $e->getMessage());
            return redirect()->back()->withInput()
                ->withErrors('Error al guardar el producto.');
        }
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);

        $categorias = Categoria::all();
        $almacenes = Almacen::all();

        return view('modules.productos.edit', compact('producto', 'categorias', 'almacenes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'observaciones' => 'nullable|string|max:255',
            'precio' => 'required|numeric|min:0',
            'categorias' => 'required|array',
            'categorias.*' => 'exists:categorias,id',
            'almacenes' => 'required|array',
            'almacenes.*' => 'exists:almacenes,id',
        ]);

        try {
            DB::beginTransaction();

            $productos = Producto::findOrFail($id);
            $productos->nombre = $request->input('nombre');
            $productos->observaciones = $request->input('observaciones');
            $productos->precio = $request->input('precio');
            $productos->save();

            $productos->categorias()->sync($request->input('categorias'));
            $productos->almacenes()->sync($request->input('almacenes'));

            DB::commit();

            return redirect()->route('modules.productos.index')
                ->with('success', 'Producto actualizado correctamente.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error al actualizar el producto: ' . $e->getMessage());
            return redirect()->back()->withInput()
                ->withErrors('Error al actualizar el producto.');
        }
    }

    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('modules.productos.index');
    }
}
