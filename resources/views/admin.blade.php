@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-8">
    <h2 class="text-3xl font-semibold text-blue-900">Manage Stadiums</h2>
    <a href="{{ route('stadiums.create') }}" class="btn-primary-blue px-6 py-2 rounded-md font-bold uppercase text-sm">Add New Stadium</a>
</div>

<div class="overflow-hidden rounded-lg content-card">
    <table class="w-full text-left">
        <thead class="bg-blue-50 text-blue-800 uppercase text-xs font-bold border-b border-blue-100">
            <tr>
                <th class="px-6 py-4">Name</th>
                <th class="px-6 py-4">Location</th>
                <th class="px-6 py-4">Price/Hr</th>
                <th class="px-6 py-4 text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-blue-50">
            @foreach($stadiums as $stadium)
            <tr class="hover:bg-blue-50/50 transition bg-white">
                <td class="px-6 py-4 font-medium text-gray-900">{{ $stadium->name }}</td>
                <td class="px-6 py-4 text-gray-600">{{ $stadium->location }}</td>
                <td class="px-6 py-4 font-bold text-blue-600">Rp{{ number_format($stadium->price) }}</td>
                <td class="px-6 py-4 text-right space-x-2">
                    <a href="{{ route('stadiums.edit', $stadium) }}" class="text-blue-600 hover:text-blue-800 font-medium">Edit</a>
                    <form action="{{ route('stadiums.destroy', $stadium) }}" method="POST" class="inline">
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