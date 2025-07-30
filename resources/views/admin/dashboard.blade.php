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

@push('scripts')
<script>
    const lineChart = new Chart(document.getElementById('lineChart'), {
        type: 'line',
        data: {
            labels: ['Semester 1', 'Semester 2', 'Semester 3', 'Semester 4', 'Semester 5'],
            datasets: [{
                label: 'Nilai Rata-Rata',
                data: [78, 80, 82, 84, 85],
                borderColor: '#00A9F6',
                backgroundColor: '#87E8FF33',
                fill: true,
                tension: 0.4,
            }]
        }
    });

    const pieChart = new Chart(document.getElementById('pieChart'), {
        type: 'doughnut',
        data: {
            labels: ['AKL', 'PM', 'MPLB', 'KLN','HTL','DKV','PPLG'],
            datasets: [{
                data: [18 0, 160, 100, 60, 60, 20, 20, ],
                backgroundColor: ['#00A9F6', '#07BEFC', '#87E8FF', '#EAFFFF']
            }]
        }
    });
</script>
@endpush
