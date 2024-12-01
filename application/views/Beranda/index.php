<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Restoran Italia</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

  <style>
  .hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('<?php echo base_url('assets/image/restaurant.jpeg'); ?>');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 150px 0;
    text-align: center;
  }

  .feature-box {
    transition: all 0.3s ease;
    padding: 30px;
    border-radius: 10px;
  }

  .feature-box:hover {
    transform: translateY(-10px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  }

  .dish-card {
    margin-bottom: 30px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .dish-card img {
    transition: transform 0.3s ease;
  }

  .dish-card:hover img {
    transform: scale(1.1);
  }
  </style>
</head>

<body>
  <!-- Navigasi -->


  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container">
      <h1 class="display-4 mb-4">Selamat Datang Di Restaurant Italian</h1>
      <p class="lead mb-5">Restaurant Itali</p>
      <div>

        <a href="<?php echo site_url('menu'); ?>" class="btn btn-outline-light btn-lg">
          Lihat Menu
        </a>
      </div>
    </div>
  </section>

  <!-- Fitur Utama -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="feature-box text-center">
            <i class="fas fa-pizza-slice fa-4x text-danger mb-4"></i>
            <a href="<?php echo site_url('makanan'); ?>">
              <h3>Masakan Otentik</h3>
            </a>

            <p>Resep turun-temurun dari Italia dengan bahan-bahan segar pilihan.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box text-center">
            <i class="fas fa-glass-martini-alt fa-4x text-danger mb-4"></i>
            <a href="<?php echo site_url('minuman'); ?>">
              <h3>Minuman Segar</h3>
            </a>

            <p>Ragam minuman Italia autentik, dari espresso hingga koktail klasik.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box text-center">
            <i class="fas fa-ice-cream fa-4x text-danger mb-4"></i>
            <a href="<?php echo site_url('dessert'); ?>">
              <h3>Dessert Istimewa</h3>
            </a>

            <p>Hidangan penutup lezat seperti tiramisu, panna cotta, dan gelato.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Signature Dishes -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center mb-5">Signature Dishes</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="dish-card card">
            <img src="<?php echo base_url('assets/image/lasagna.jpeg'); ?>" class="card-img-top" alt="Lasagna">
            <div class="card-body">
              <h5 class="card-title">Lasagna</h5>
              <p class="card-text">Hidangan klasik Italia dengan lapisan pasta, saus, dan keju</p>

            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="dish-card card">
            <img src="<?php echo base_url('assets/image/pizza.jpeg'); ?>" class="card-img-top" alt="Pizza Margherita">
            <div class="card-body">
              <h5 class="card-title">Pizza Margherita</h5>
              <p class="card-text">Pizza klasik dari Napoli dengan tomat segar, mozzarella, dan daun basil</p>

            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="dish-card card">
            <img src="<?php echo base_url('assets/image/pasta.jpeg'); ?>" class="card-img-top" alt="Pasta Carbonara">
            <div class="card-body">
              <h5 class="card-title">Pasta Carbonara</h5>
              <p class="card-text">Pasta khas Roma dengan saus telur, pancetta, dan keju parmesan</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Kontak & Lokasi -->
  <section class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-4">Kunjungi Kami</h2>
          <div class="mb-3">
            <i class="fas fa-map-marker-alt text-danger mr-3"></i>
            Jl. G.obos STIMIK Palangkaraya
          </div>
          <div class="mb-3">
            <i class="fas fa-clock text-danger mr-3"></i>
            Senin-Minggu, 11:00 - 22:00
          </div>
          <div class="mb-3">
            <i class="fas fa-phone text-danger mr-3"></i>
            +62 852-5194-2520
          </div>
          <a href="<?php echo site_url('kontak'); ?>" class="btn btn-danger">
            Hubungi Kami
          </a>
        </div>
        <div class="col-md-6">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.google.com/maps/embed?pb=..." class="embed-responsive-item" allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>