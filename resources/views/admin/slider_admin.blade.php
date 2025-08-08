@extends('layouts.admin')
@section('title', 'Kelola Slider')

@section('content')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Form Upload -->
    <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Judul Gambar (Opsional)</label>
            <input type="text" name="judul" class="form-control">
        </div>
        <div class="mb-3">
            <label>Upload Gambar Slider</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>
        <button class="btn btn-primary">Upload</button>
    </form>

    <hr>

    <!-- Tabel Daftar Gambar -->
    <h5>Daftar Gambar Slider</h5>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sliders as $i => $slider)
                <tr>
                    <td>{{ $i+1 }}</td>
                    <td><img src="{{ asset('storage/sliders/' . $slider->gambar) }}" width="100"></td>
                    <td>{{ $slider->judul }}</td>
                    <td>
                        <form action="{{ route('slider.destroy', $slider->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
