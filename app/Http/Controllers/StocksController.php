<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class StocksController extends Controller
{

    public function index()
    {
        $stocks = Stock::all();
        return view('modules.stocks.index', compact('stocks'));
    }

    public function create()
    {
        return view('modules.stocks.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ]);

        try {
            DB::beginTransaction();

            $stocks = new Stock;
            $stocks->nombre = $request->input('nombre');
            $stocks->descripcion = $request->input('descripcion');
            $stocks->save();

            DB::commit();

            return redirect()->route('modules.stocks.index')
                ->with('success', 'Stock creado correctamente.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error al guardar el stock: ' . $e->getMessage());
            return redirect()->back()->withInput()
                ->withErrors('Error al guardar el stock.');
        }
    }

    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return view('modules.stocks.edit', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
        ]);

        try {
            DB::beginTransaction();

            $stock = Stock::findOrFail($id);
            $stock->nombre = $request->input('nombre');
            $stock->descripcion = $request->input('descripcion');
            $stock->save();

            DB::commit();

            return redirect()->route('modules.stocks.index')
                ->with('success', 'Stock actualizado correctamente.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error al actualizar el stock: ' . $e->getMessage());
            return redirect()->back()->withInput()
                ->withErrors('Error al actualizar el stock.');
        }
    }

    public function destroy($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();

        return redirect()->route('modules.stocks.index');
    }
}
