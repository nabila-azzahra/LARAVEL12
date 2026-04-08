<?php

namespace App\Http\Controllers;

use App\Models\Fitur;
use Illuminate\Http\Request;

class FiturController extends Controller
{
    public function index()
    {
        $fiturs = Fitur::latest()->get();
        return view('fitur_index', compact('fiturs'));
    }

    public function create()
    {
        return view('fitur_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);

        Fitur::create($request->all());

        return redirect()->route('fitur.index')->with('success', 'Berhasil tambah!');
    }

    public function edit(Fitur $fitur)
    {
        return view('fitur_edit', compact('fitur'));
    }

    public function update(Request $request, Fitur $fitur)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required'
        ]);

        $fitur->update($request->all());

        return redirect()->route('fitur.index')->with('success', 'Berhasil update!');
    }

    public function destroy(Fitur $fitur)
    {
        $fitur->delete();
        return redirect()->route('fitur.index')->with('success', 'Berhasil hapus!');
    }
}
