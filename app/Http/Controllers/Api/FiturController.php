<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fitur;
use Illuminate\Http\Request;

class FiturController extends Controller
{
    public function index(Request $request)
    {
        $fiturs = Fitur::latest()->get();
        
        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'data' => $fiturs
            ]);
        }

        return view('fitur_index', compact('fiturs'));
    }

    public function create()
    {
        return view('fitur_create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string'
        ]);

        $fitur = Fitur::create($validated);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil tambah fitur!',
                'data' => $fitur
            ], 201);
        }

        return redirect()->route('fitur.index')->with('success', 'Berhasil tambah!');
    }

    public function show(Request $request, Fitur $fitur)
    {
        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'data' => $fitur
            ]);
        }
        
        return view('fitur_edit', compact('fitur'));
    }

    public function edit(Fitur $fitur)
    {
        return view('fitur_edit', compact('fitur'));
    }

    public function update(Request $request, Fitur $fitur)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string'
        ]);

        $fitur->update($validated);

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil update fitur!',
                'data' => $fitur
            ]);
        }

        return redirect()->route('fitur.index')->with('success', 'Berhasil update!');
    }

    public function destroy(Request $request, Fitur $fitur)
    {
        $fitur->delete();

        if ($request->expectsJson()) {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil hapus fitur!'
            ]);
        }

        return redirect()->route('fitur.index')->with('success', 'Berhasil hapus!');
    }
}
