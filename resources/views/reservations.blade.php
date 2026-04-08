@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-8">
    <h2 class="text-3xl font-semibold text-blue-900">Manage Reservations</h2>
    <a href="{{ route('reservations.create') }}" class="btn-primary-blue px-6 py-2 rounded-md font-bold uppercase text-sm">Add New Reservation</a>
</div>

<div class="overflow-hidden rounded-lg content-card">
    <table class="w-full text-left">
        <thead class="bg-blue-50 text-blue-800 uppercase text-xs font-bold border-b border-blue-100">
            <tr>
                <th class="px-6 py-4">Stadium</th>
                <th class="px-6 py-4">Date</th>
                <th class="px-6 py-4">Time</th>
                <th class="px-6 py-4">Price</th>
                <th class="px-6 py-4 text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-blue-50">
            @foreach($reservations as $reservation)
            <tr class="hover:bg-blue-50/50 transition bg-white">
                <td class="px-6 py-4 font-medium text-gray-900">{{ $reservation->stadium->name ?? 'N/A' }}</td>
                <td class="px-6 py-4 text-gray-600">{{ $reservation->date }}</td>
                <td class="px-6 py-4 text-gray-600">{{ $reservation->time }}</td>
                <td class="px-6 py-4 font-bold text-blue-600">Rp{{ number_format($reservation->price) }}</td>
                <td class="px-6 py-4 text-right space-x-2">
                    <a href="{{ route('reservations.edit', $reservation) }}" class="text-blue-600 hover:text-blue-800 font-medium">Edit</a>
                    <form action="{{ route('reservations.destroy', $reservation) }}" method="POST" class="inline">
                        @csrf @method('DELETE')
                        <button class="text-red-500 hover:text-red-700 font-medium" onclick="return confirm('Delete this?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
