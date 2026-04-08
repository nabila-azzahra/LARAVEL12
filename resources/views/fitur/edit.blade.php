@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card-custom p-4">
        <h2 class="mb-3">✏️ Edit Fitur</h2>

        <form action="{{ route('fitur.update', $fitur->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" value="{{ $fitur->nama }}" class="form-control">
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control">{{ $fitur->deskripsi }}</textarea>
            </div>

            <button class="btn btn-soft">Update 💾</button>
        </form>
    </div>

</div>
@endsection
