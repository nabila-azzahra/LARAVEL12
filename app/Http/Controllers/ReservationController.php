<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Stadium;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::with('stadium')->get();
        return view('reservations', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stadiums = Stadium::all();
        return view('reservations_create', compact('stadiums'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'stadium_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'price' => 'required',
        ]);

        Reservation::create($request->all());

        return redirect()->route('reservations.index')
            ->with('success', 'Reservation created successfully.');
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
        $reservation = Reservation::find($id);
        $stadiums = Stadium::all();
        return view('reservations_edit', compact('reservation', 'stadiums'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'stadium_id' => 'required',
            'date' => 'required',
            'time' => 'required',
            'price' => 'required',
        ]);

        $reservation = Reservation::find($id);
        $reservation->update($request->all());

        return redirect()->route('reservations.index')
            ->with('success', 'Reservation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect()->route('reservations.index')
            ->with('success', 'Reservation deleted successfully.');
    }
}
