@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-semibold text-blue-900">Edit Reservation</h2>
        <a href="{{ route('reservations.index') }}" class="text-blue-600 hover:underline">&larr; Back to List</a>
    </div>

    <div class="p-8 rounded-lg content-card bg-white">
        <form action="{{ route('reservations.update', $reservation) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-medium text-blue-800 mb-2">Stadium</label>
                <select name="stadium_id" required class="w-full bg-blue-50 border border-blue-100 rounded-md py-2 px-4 text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @foreach($stadiums as $stadium)
                        <option value="{{ $stadium->id }}" {{ $reservation->stadium_id == $stadium->id ? 'selected' : '' }}>
                            {{ $stadium->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-blue-800 mb-2">Date</label>
                    <input type="date" name="date" value="{{ $reservation->date }}" required class="w-full bg-blue-50 border border-blue-100 rounded-md py-2 px-4 text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <label class="block text-sm font-medium text-blue-800 mb-2">Time</label>
                    <input type="time" name="time" value="{{ $reservation->time }}" required class="w-full bg-blue-50 border border-blue-100 rounded-md py-2 px-4 text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
            </div>

            <div>
                <label class="block text-sm font-medium text-blue-800 mb-2">Price (Rp)</label>
                <input type="number" name="price" value="{{ $reservation->price }}" required class="w-full bg-blue-50 border border-blue-100 rounded-md py-2 px-4 text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="pt-4">
                <button type="submit" class="w-full btn-primary-blue py-3 rounded-md font-bold uppercase tracking-wider">Update Reservation</button>
            </div>
        </form>
    </div>
</div>
@endsection
