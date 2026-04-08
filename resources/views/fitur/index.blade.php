@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <div class="card-custom p-4">
        <h2 class="mb-4 text-primary">💙 Data Fitur</h2>

        <a href="{{ route('fitur.create') }}" class="btn btn-soft mb-3">
            + Tambah Fitur
        </a>

        <table class="table table-borderless">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($fitur as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        <a href="{{ route('fitur.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>

                        <form action="{{ route('fitur.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">Data belum ada</td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>

</div>
@endsection
