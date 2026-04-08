@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-semibold text-blue-900">Edit Stadium</h2>
        <a href="{{ route('admin') }}" class="text-blue-600 hover:underline">&larr; Back to List</a>
    </div>

    <div class="p-8 rounded-lg content-card bg-white">
        <form action="{{ route('stadiums.update', $stadium) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label class="block text-sm font-medium text-blue-800 mb-2">Stadium Name</label>
                <input type="text" name="name" value="{{ $stadium->name }}" required class="w-full bg-blue-50 border border-blue-100 rounded-md py-2 px-4 text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-blue-800 mb-2">Location</label>
                <input type="text" name="location" value="{{ $stadium->location }}" required class="w-full bg-blue-50 border border-blue-100 rounded-md py-2 px-4 text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-blue-800 mb-2">Price per Hour (Rp)</label>
                <input type="number" name="price" value="{{ $stadium->price }}" required class="w-full bg-blue-50 border border-blue-100 rounded-md py-2 px-4 text-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="pt-4">
                <button type="submit" class="w-full btn-primary-blue py-3 rounded-md font-bold uppercase tracking-wider">Update Stadium</button>
            </div>
        </form>
    </div>
</div>
@endsection
