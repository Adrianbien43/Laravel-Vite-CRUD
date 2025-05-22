<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoriaController extends Controller
{

    public function index()
    {
        $categorias = Categoria::all();
        return view('modules.categorias.index', compact('categorias'));
    }

    public function create()
    {
        return view('modules.categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:255',
        ]);

        try {
            DB::beginTransaction();

            $categoria = new Categoria;
            $categoria->nombre = $request->input('nombre');
            $categoria->descripcion = $request->input('descripcion');
            $categoria->save();

            DB::commit();

            return redirect()->route('modules.categorias.index')
                ->with('success', 'Categoría creada correctamente.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error al guardar la categoría: ' . $e->getMessage());
            return redirect()->back()->withInput()
                ->withErrors('Error al guardar la categoría.');
        }
    }

    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);
        return view('modules.categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:255',
        ]);

        try {
            DB::beginTransaction();

            $categoria = Categoria::findOrFail($id);
            $categoria->nombre = $request->input('nombre');
            $categoria->descripcion = $request->input('descripcion');
            $categoria->save();

            DB::commit();

            return redirect()->route('modules.categorias.index')
                ->with('success', 'Categoría actualizada correctamente.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error al actualizar la categoría: ' . $e->getMessage());
            return redirect()->back()->withInput()
                ->withErrors('Error al actualizar la categoría.');
        }
    }

    public function destroy($id)
    {
        $categoria = Categoria::findOrFail($id);
        $categoria->delete();

        return redirect()->route('modules.categorias.index');
    }
}
