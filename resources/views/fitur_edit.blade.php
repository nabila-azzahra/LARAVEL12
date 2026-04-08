@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-semibold text-blue-900">Edit Fitur</h2>
        <a href="{{ route('fitur.index') }}" class="text-blue-600 hover:underline">&larr; Back to List</a>
    </div>

    <div class="p-8 rounded-lg content-card bg-white">
        <form action="{{ route('fitur.update', $fitur) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-medium text-blue-800 mb-2">Nama Fitur</label>
                <input type="text" name="nama" value="{{ $fitur->nama }}" required class="w-full bg-blue-50 border border-blue-100 rounded-md py-2 px-4 text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-blue-800 mb-2">Deskripsi</label>
                <textarea name="deskripsi" required rows="4" class="w-full bg-blue-50 border border-blue-100 rounded-md py-2 px-4 text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $fitur->deskripsi }}</textarea>
            </div>

            <div class="pt-4">
                <button type="submit" class="w-full btn-primary-blue py-3 rounded-md font-bold uppercase tracking-wider">Update Fitur</button>
            </div>
        </form>
    </div>
</div>
@endsection
