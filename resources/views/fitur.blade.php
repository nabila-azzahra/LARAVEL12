@extends('layouts.app') {{-- Pastikan path-nya benar, misal layouts/app.blade.php --}}

@section('content')
<div class="hero">
    <h1 class="title">Daftar Fitur</h1>
    <p class="subtitle">Jelajahi berbagai kemudahan yang ditawarkan oleh Arena Grid.</p>

    <div class="row mt-5 justify-content-center">
        <div class="col-md-6">
            <div class="card card-custom p-5">
                <h3 class="mb-3 text-primary">Manajemen Sistem</h3>
                <p class="mb-4">Masuk ke dashboard admin untuk mengelola data stadion dan reservasi pelanggan secara real-time.</p>
                <a href="{{ url('admin') }}" class="btn btn-soft w-100 py-3 font-weight-bold">
                    Masuk ke Halaman Admin
                </a>
            </div>
        </div>
    </div>
</div>
@endsection