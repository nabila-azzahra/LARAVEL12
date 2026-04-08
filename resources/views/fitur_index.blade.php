@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-8">
    <h2 class="text-3xl font-semibold text-blue-900">Manage Fitur</h2>
    <a href="{{ route('fitur.create') }}" class="btn-primary-blue px-6 py-2 rounded-md font-bold uppercase text-sm">Add New Fitur</a>
</div>

<div class="overflow-hidden rounded-lg content-card">
    <table class="w-full text-left">
        <thead class="bg-blue-50 text-blue-800 uppercase text-xs font-bold border-b border-blue-100">
            <tr>
                <th class="px-6 py-4">Nama</th>
                <th class="px-6 py-4">Deskripsi</th>
                <th class="px-6 py-4 text-right">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-blue-50">
            @foreach($fiturs as $f)
            <tr class="hover:bg-blue-50/50 transition bg-white">
                <td class="px-6 py-4 font-medium text-gray-900">{{ $f->nama }}</td>
                <td class="px-6 py-4 text-gray-600 truncate max-w-xs">{{ $f->deskripsi }}</td>
                <td class="px-6 py-4 text-right space-x-2">
                    <a href="{{ route('fitur.edit', $f) }}" class="text-blue-600 hover:text-blue-800 font-medium">Edit</a>
                    <form action="{{ route('fitur.destroy', $f) }}" method="POST" class="inline">
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
