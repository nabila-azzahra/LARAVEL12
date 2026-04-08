@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card-custom p-4">
        <h2 class="mb-3">💙 Tambah Fitur</h2>

        <form action="{{ route('fitur.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>

            <div class="mb-3">
                <label>Deskripsi</label>
                <textarea name="deskripsi" class="form-control"></textarea>
            </div>

            <button class="btn btn-soft">Simpan 💾</button>
        </form>
    </div>

</div>
@endsection
