@extends('layouts.home')

@section('content')
<section class="hero">
    <div class="hero-text">
        <div style="margin-bottom: 10px;">
            <span style="font-size: 14px; background: #e6f0ff; padding: 4px 10px; border-radius: 10px; display: inline-block; color: #0077c2;">Akreditasi A • Terakreditasi BAN-S/M</span>
        </div>
        <h1>SMKN 1 <span>CIAMIS</span></h1>
        <h2>Membangun Generasi Terampil & Berkarakter</h2>
        <p>Sekolah Menengah Kejuruan Bidang Keahlian Bisnis-Manajemen, Pariwisata dan Teknologi Informasi dan Komunikasi, Melaksanakan pembelajaran berbasis Teknologi Informasi dan Komunikasi.</p>

        <div class="buttons">
            <a href="#" class="btn-primary">Kontak Sekolah</a>
            <a href="#" class="btn-secondary">Lihat Program Keahlian</a>
        </div>

        <div class="stats">
            <div class="stat">
                <h3>7+</h3>
                <p>Program Keahlian</p>
            </div>
            <div class="stat">
                <h3>95%</h3>
                <p>Tingkat Kelulusan</p>
            </div>
            <div class="stat">
                <h3>999+</h3>
                <p>Alumni Sukses</p>
            </div>
        </div>
    </div>

    <div class="hero-image">
        <!-- <span class="badge">Sekolah Sehat <br> Tingkat Nasional</span> -->
         <img src="{{ asset('asset/siswa.png') }}" alt="Kolase Siswa">
    </div>
</section>

<section class="section-profile">
  <div class="profile-header">
    <span class="profile-badge">Tentang SMKN 1 Ciamis</span>
    <h2 class="profile-title">Profil <span>Sekolah</span></h2>
    <p class="profile-description">
      SMK Nusantara didirikan pada tahun 1964 dengan visi menjadi sekolah kejuruan terdepan dalam menghasilkan lulusan yang kompeten, berkarakter, dan siap bersaing di era global
    </p>
  </div>

  <div class="card-container">
    @foreach ([
      ['title' => 'Akreditasi A', 'desc' => 'SMKN 1 Ciamis terakreditasi grade A', 'delay' => 100],
      ['title' => 'ISO 9001:2008', 'desc' => 'Sertifikasi Manajemen Mutu', 'delay' => 200],
      ['title' => 'Juara Nasional', 'desc' => 'Juara Sekolah Sehat Nasional', 'delay' => 300],
      ['title' => '15+ Mitra', 'desc' => 'Kerja sama Industri untuk praktik kerja lapangan', 'delay' => 400]
    ] as $card)
      <div class="info-card" data-aos="fade-up" data-aos-delay="{{ $card['delay'] }}">
        <div class="card-icon"></div>
        <h4>{{ $card['title'] }}</h4>
        <p>{{ $card['desc'] }}</p>
      </div>
    @endforeach
  </div>
</section>

<section class="keunggulan">
    <div class="keunggulan-container">
        <!-- Kiri: Teks -->
        <div class="keunggulan-text">
            <h2>Keunggulan <span class="highlight">SMKN 1 Ciamis</span></h2>
            <p>
                Dengan pengalaman lebih dari 35 tahun dalam dunia pendidikan kejuruan,
                SMK Nusantara terus berkomitmen memberikan pendidikan terbaik yang
                mengintegrasikan teori dan praktik sesuai kebutuhan industri.
            </p>

            <div class="keunggulan-item">
                <div class="keunggulan-icon">
                    <img src="{{ asset('asset/Vector.svg') }}" style="width:20px;" alt="verify">
                </div>
                <div>
                    <h4>Fasilitas Lengkap</h4>
                    <p>Tempat Praktek dan Fasilitas dengan peralatan modern sesuai standar industri</p>
                </div>
            </div>

            <div class="keunggulan-item">
                <div class="keunggulan-icon">
                    <img src="{{ asset('asset/Vector.svg') }}" style="width:20px;" alt="verify">
            </div>
                <div>
                    <h4>Tenaga Pengajar Berkualitas</h4>
                    <p>Guru berpengalaman dengan sertifikasi profesi dan kompetensi tinggi</p>
                </div>
            </div>

            <div class="keunggulan-item">
                <div class="keunggulan-icon">
                    <img src="{{ asset('asset/Vector.svg') }}" style="width:20px;" alt="verify">
                </div>
                <div>
                    <h4>Kerjasama Industri</h4>
                    <p>Kemitraan dengan lebih dari 20 perusahaan untuk praktik kerja lapangan</p>
                </div>
            </div>
        </div>

        <!-- Kanan: Gambar -->
        <div class="keunggulan-image">
            <img src="{{ asset('asset/gedung.png') }}" alt="Gedung Sekolah">
        </div>
    </div>
</section>

<section class="program-keahlian">
    <div class="container-program">
        <h2 class="judul-program">Program <span class="highlight">Keahlian</span></h2>
        <p class="deskripsi-program">
            Berikut adalah beberapa Program Bidang Keahlian Bisnis-Manajemen, Pariwisata dan Teknologi Informasi dan Komunikasi,
            Melaksanakan pembelajaran berbasis Teknologi Informasi dan Komunikasi
        </p>

        <div class="grid-program" data-aos="fade-up" data-aos-delay="{{ $card['delay'] }}">
            <div class="card-program">
                <div class="icon-placeholder"></div>
                <h4>PEMASARAN</h4>
                <p>Mengembangkan strategi pemasaran digital dan konvensional untuk berbagai produk.</p>
            </div>
            <div class="card-program">
                <div class="icon-placeholder"></div>
                <h4>PPLG</h4>
                <p>Pengembangan Perangkat Lunak dan Gim untuk industri teknologi.</p>
            </div>
            <div class="card-program">
                <div class="icon-placeholder"></div>
                <h4>DKV</h4>
                <p>Desain Komunikasi Visual untuk media cetak dan digital.</p>
            </div>
            <div class="card-program">
                <div class="icon-placeholder"></div>
                <h4>AKUNTANSI</h4>
                <p>Mempelajari sistem keuangan, pembukuan, dan perpajakan untuk bisnis modern.</p>
            </div>
            <div class="card-program">
                <div class="icon-placeholder"></div>
                <h4>PERHOTELAN</h4>
                <p>Mempelajari manajemen hotel, restoran, dan industri pariwisata.</p>
            </div>
            <div class="card-program">
                <div class="icon-placeholder"></div>
                <h4>TATABOGA</h4>
                <p>Seni memasak dan manajemen kuliner untuk industri makanan.</p>
            </div>
            <div class="card-program">
                <div class="icon-placeholder"></div>
                <h4>PERKANTORAN</h4>
                <p>Menyiapkan tenaga administrasi profesional untuk lingkungan kerja modern.</p>
            </div>
            <div class="card-program lihat-semua">
                <div class="icon-placeholder"></div>
                <h4>Lihat Semua</h4>
                <p>Jelajahi semua program keahlian yang tersedia di sekolah kami.</p>
                <a href="#" class="btn-lihat">Lihat Semua</a>
            </div>
        </div>
    </div>
</section>



@endsection
