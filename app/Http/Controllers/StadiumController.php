<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stadium;
use App\Models\Reservation;

class StadiumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stadiums = Stadium::all();
        return view('admin', compact('stadiums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stadiums_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'price' => 'required',
        ]);

        Stadium::create($request->all());

        return redirect()->route('admin')
            ->with('success', 'Stadium created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stadium = Stadium::find($id);
        return view('stadiums_edit', compact('stadium'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'price' => 'required',
        ]);

        $stadium = Stadium::find($id);
        $stadium->update($request->all());

        return redirect()->route('admin')
            ->with('success', 'Stadium updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stadium = Stadium::find($id);
        $stadium->delete();

        return redirect()->route('admin')
            ->with('success', 'Stadium deleted successfully.');
    }
}
