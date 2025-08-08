@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Jumlah Siswa</h6>
                <h4 class="text-primary-custom">3700</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Jumlah Guru</h6>
                <h4 class="text-primary-custom">48</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Kelas Aktif</h6>
                <h4 class="text-primary-custom">18</h4>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body">
                <h6 class="text-muted">Ekstrakurikuler</h6>
                <h4 class="text-primary-custom">13</h4>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-lg-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title text-primary-custom">Perkembangan Nilai Rata-Rata</h5>
                <canvas id="lineChart" height="150"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title text-primary-custom">Distribusi Jurusan</h5>
                <canvas id="pieChart" height="150"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection

