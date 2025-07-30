<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMKN 1 Ciamis</title>
    <!-- AOS Animation CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #ffffff;
            color: #333;
            line-height: 1.6;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 60px;
            background-color: #ffffff;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        .logo {
            display: flex;
            align-items: center;
            font-weight: bold;
            font-size: 20px;
            color: #0077c2;
        }

        .logo img {
            width: 150px;
            margin-right: 10px;
        }

        nav a {
            margin-left: 20px;
            text-decoration: none;
            color: #333;
            font-weight: 500;
        }
        
        nav a.active,
        nav a:hover {
            color: #00A9F6;
        }

        .hero {
            margin-top: 120px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 60px;
            gap: 40px;
        }

        .hero-text {
            max-width: 600px;
        }

        .hero-text h1 {
            font-size: 36px;
            margin-bottom: 10px;
            color: #0a0a0a;
        }

        .hero-text h1 span {
            color: #0077c2;
        }

        .hero-text h2 {
            font-size: 18px;
            font-weight: normal;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 16px;
            margin-bottom: 30px;
        }

        .buttons {
            margin-bottom: 30px;
        }

        .buttons a {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
        }

        .btn-primary {
            background-color: #0077c2;
            color: #fff;
        }

        .btn-secondary {
            background-color: #f0f0f0;
            color: #333;
        }

        .stats {
            display: flex;
            gap: 40px;
            margin-top: 10px;
        }

        .stat {
            text-align: center;
        }

        .stat h3 {
            font-size: 24px;
            color: #00A9F6;
        }

        .hero-image {
            max-width: 400px;
            position: relative;
        }

        .hero-image img {
            width: 100%;
            border-radius: 10px;
        }

        .badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: #e0f8e9;
            color: #1d8c4e;
            padding: 6px 10px;
            font-size: 12px;
            border-radius: 20px;
            font-weight: bold;
        }

    .section-profile {
  padding: 60px 20px;
  background-color: #ffffff;
}

.profile-header {
  text-align: center;
  margin-bottom: 40px;
}

.profile-badge {
  display: inline-block;
  padding: 6px 14px;
  background-color: #E6F0FF;
  color: #0077c2;
  border-radius: 999px;
  font-size: 14px;
}

.profile-title {
  font-size: 28px;
  margin-top: 16px;
}

.profile-title span {
  color: #0077c2;
}

.profile-description {
  max-width: 600px;
  margin: 10px auto;
  font-size: 16px;
  color: #555;
}

.card-container {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 20px;
}

.info-card {
  flex: 1 1 200px;
  max-width: 220px;
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 12px;
  text-align: center;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
  position: relative;
  z-index: 1;
}

.info-card:hover {
  transform: scale(1.05) translateY(-10px);
  box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
  z-index: 10;
}

.card-icon {
  width: 60px;
  height: 60px;
  background-color: #e0e0e0;
  border-radius: 50%;
  margin: 0 auto 16px;
}


.keunggulan {
    padding: 60px 40px; /* Tambah padding kiri-kanan */
    background-color: #fff;
    box-sizing: border-box;
}

.keunggulan-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
    max-width: 1140px; /* Disamakan dengan section lain */
    margin: 0 auto;
    box-sizing: border-box;
}

.keunggulan-text {
    flex: 1 1 400px;
    max-width: 600px;
}

.keunggulan-text h2 {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 12px;
}

.keunggulan-text .highlight {
    color: #0077c2;
}

.keunggulan-text p {
    font-size: 16px;
    color: #555;
    margin-bottom: 30px;
}

.keunggulan-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    margin-bottom: 20px;
}

.keunggulan-icon {
    font-size: 20px;
    color: #0077c2;
}

.keunggulan-item h4 {
    margin: 0 0 4px;
    font-size: 16px;
    font-weight: 600;
    color: #1d1d1d;
}

.keunggulan-item p {
    margin: 0;
    font-size: 14px;
    color: #555;
}

.keunggulan-image {
    flex: 1 1 300px;
    max-width: 400px;
    text-align: center;
    border-radius: 16px;
    overflow: hidden;
}

.keunggulan-image img {
    max-width: 100%;
    height: auto;
    display: block;
}


.program-keahlian {
    padding: 60px 40px;
    box-sizing: border-box;
}

.container-program {
    max-width: 1140px;
    margin: 0 auto;
    text-align: center;
}

.judul-program {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 12px;
}

.judul-program .highlight {
    color: #0077c2;
}

.deskripsi-program {
    max-width: 800px;
    margin: 0 auto 40px;
    color: #666;
    font-size: 16px;
}

.grid-program {

    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 4 kolom per baris */
    gap: 24px;
    max-width: 1000px;
    margin: 0 auto;


}

.card-program {
    background-color: #fff;
    padding: 20px 14px;
    min-height: 240px;
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-program:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
}

.icon-placeholder {
    width: 64px;
    height: 64px;
    margin: 0 auto 12px;
    background-color: #ddd;
    border-radius: 50%;
}

.card-program h4 {
    font-size: 16px;
    font-weight: bold;
    margin: 8px 0;
}

.card-program p {
    font-size: 14px;
    color: #555;
}

.lihat-semua {
    background: linear-gradient(135deg, #0077ff, #00aaff);
    color: #fff;
    position: relative;
}

.lihat-semua h4,
.lihat-semua p {
    color: #fff;
}

.btn-lihat {
    display: inline-block;
    margin-top: 12px;
    padding: 8px 20px;
    background-color: #fff;
    color: #0077c2;
    border-radius: 20px;
    font-size: 14px;
    font-weight: bold;
    text-decoration: none;
    transition: background-color 0.3s;
}

.btn-lihat:hover {
    background-color: #e0f3ff;
}


        @media (max-width: 768px) {
            .hero {
                flex-direction: column;
                padding: 30px;
            }

            header {
                flex-direction: column;
                align-items: flex-start;
                padding: 20px;
            }

            nav {
                margin-top: 10px;
            }

            .hero-image {
                width: 100%;
                max-width: none;
            }
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Konten --}}
    @yield('content')
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true
  });
</script>
</body>
</html>
