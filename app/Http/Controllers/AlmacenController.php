<?php

namespace App\Http\Controllers;

use App\Models\Almacen;
use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AlmacenController extends Controller
{
    public function index()
    {
        $almacenes = Almacen::paginate(10);
        return view('modules.almacenes.index', compact('almacenes'));
    }

    public function create()
    {
        $stocks = Stock::all();

        return view('modules.almacenes.create', compact('stocks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:255',
            'stock_id' => 'required|exists:stocks,id',
        ]);

        try {
            DB::beginTransaction();

            $almacen = new Almacen;
            $almacen->nombre = $request->input('nombre');
            $almacen->descripcion = $request->input('descripcion');
            $almacen->stock_id = $request->input('stock_id');
            $almacen->save();

            DB::commit();

            return redirect()->route('modules.almacenes.index')
                ->with('success', 'Almacén creado.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error al guardar el almacén: ' . $e->getMessage());
            return redirect()->back()->withInput()
                ->withErrors('Error al guardar el almacén.');
        }
    }

    public function edit($id)
    {
        $almacen = Almacen::findOrFail($id);

        $stocks = Stock::all();

        return view('modules.almacenes.edit', compact('almacen', 'stocks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string|max:255',
            'stock_id' => 'required|exists:stocks,id',
        ]);

        try {
            DB::beginTransaction();

            $almacen = Almacen::findOrFail($id);
            $almacen->nombre = $request->input('nombre');
            $almacen->descripcion = $request->input('descripcion');
            $almacen->stock_id = $request->input('stock_id');
            $almacen->save();

            DB::commit();

            return redirect()->route('modules.almacenes.index')
                ->with('success', 'Almacén actualizado.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error al actualizar el almacén: ' . $e->getMessage());
            return redirect()->back()->withInput()
                ->withErrors('Error al actualizar el almacén.');
        }
    }

    public function destroy($id)
    {
        $almacen = Almacen::findOrFail($id);
        $almacen->delete();

        return redirect()->route('modules.almacenes.index')
            ->with('success', 'Almacén eliminado correctamente.');
    }
}
