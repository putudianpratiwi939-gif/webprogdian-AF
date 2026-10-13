<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Kebaya</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
       body {
  font-family: 'Inter', sans-serif;
  background-color: #f8fafc;
  color: #1e293b;
}
.bg-brand { background-color: #4f46e5 !important; }
.text-brand { color: #4f46e5 !important; }
.btn-brand { background-color: #4f46e5; color: #ffffff; border: none; }
.btn-brand:hover { background-color: #4338ca; color: #ffffff; }
.product-card {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border: 1px solid #e2e8f0;
  border-radius: 1rem;
  overflow: hidden;
}
.product-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.08);
}
    </style>
</head>
<body>
    
<header>
     <header class="sticky-top bg-white border-bottom shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
       <div class="container">
       <a class="navbar-brand d-flex align-items-center gap-2 fw-bold text-dark fs-4" href="index.php">
    <div class="bg-brand text-white rounded-3" style="width:100px; height: 30px;">Toko</div>
    <span class="Judul Judulmain"><i>Toko</i> </span><span class="Judul Judulsub">Kebaya</span>
        </a>


<button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
  <span class="navbar-toggler-icon"></span>
</button>

  <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
  <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fw-medium gap-lg-3">
    <li class="nav-item"><a class="nav-link text-brand active" href="#">Beranda</a></li>
    <li class="nav-item"><a class="nav-link" href="#categories">Kategori</a></li>
    <li class="nav-item"><a class="nav-link" href="#products">Produk</a></li>
    <li class="nav-item"><a class="nav-link" href="#contact">Kontak</a></li>
  </ul>
  <div class="d-flex align-items-center gap-3">
    <form role="search" method="get" class="d-none d-lg-flex" action="#">
      <div class="input-group" style="width: 200px;">
        <span class="input-group-text bg-light border-0"><i class="bi bi-search text-muted"></i></span>
        <input type="search" class="form-control bg-light border-0 shadow-none fs-7" placeholder="Cari..." name="s">
      </div>
    </form>

    <a href="#" class="btn btn-light rounded-circle position-relative p-2 text-decoration-none" title="Keranjang Belanja">
      <i class="bi bi-bag fs-5 text-secondary"></i>
      <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-brand text-white fs-8">99++</span>
    </a>
  </div>
</div>
  
 
</div>
</header>
<main>
    <section class="py-5 bg-dark text-white rounded-bottom-5 mb-5" style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 100%); padding: 5rem 0;">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-7">
        <span class="badge bg-primary bg-opacity-25 text-brand px-3 py-2 rounded-pill fw-semibold mb-3">
          <i class="bi bi-stars me-1"></i> Koleksi Unggulan TokoKu
        </span>
        <h1 class="display-4 fw-bold lh-base mb-3">Solusi Pakaian Modis <span class="text-info">Siap Pakai</span></h1>
        <p class="lead text-secondary mb-4">Template bersih dan semantik berstandar tinggi yang siap di-convert menjadi WordPress Theme lengkap dengan dukungan WooCommerce.</p>
        <a href="#products" class="btn btn-brand btn-lg px-4 py-3 rounded-pill fw-semibold">Jelajahi Pakaian Menarikmu! <i class="bi bi-arrow-right ms-2"></i></a>
      </div>
      <div class="col-lg-5 text-center">              
        <img src="https://placehold.co/450x450/1e1b4b/ffffff?text=WP+Theme+Banner" class="img-fluid rounded-4 shadow-lg border border-secondary border-opacity-25" alt="Banner">
      </div>
    </div>
  </div>
</section>
<section id="categories" class="py-4 container mb-5">
  <div class="mb-4">
    <h6 class="text-uppercase text-brand fw-bold fs-7 mb-1">Taksonomi Kategori</h6>
    <h2 class="fw-bold m-0">Kategori Pilihan</h2>
  </div>

  <div class="row g-4">
    <div class="col-6 col-md-3">
      <a href="#" class="text-decoration-none">
        <div class="bg-white p-4 text-center rounded-4 border shadow-sm h-100">
          <div class="bg-light text-brand rounded-4 d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
            <i class="bi bi-shop fs-4"></i>
          </div>
          <h5 class="fw-bold fs-6 text-dark mb-1">Pakaian Pria</h5>
          <p class="text-muted fs-8 m-0">12 Produk</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-3">
      <a href="#" class="text-decoration-none">
        <div class="bg-white p-4 text-center rounded-4 border shadow-sm h-100">
          <div class="bg-light text-brand rounded-4 d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
            <i class="bi bi-shop fs-4"></i>
          </div>
          <h5 class="fw-bold fs-6 text-dark mb-1">Pakaian Wanita</h5>
          <p class="text-muted fs-8 m-0">20 Produk</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-3">
      <a href="#" class="text-decoration-none">
        <div class="bg-white p-4 text-center rounded-4 border shadow-sm h-100">
          <div class="bg-light text-brand rounded-4 d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
            <i class="bi bi-shop fs-4"></i>
          </div>
          <h5 class="fw-bold fs-6 text-dark mb-1">Pakaian Anak</h5>
          <p class="text-muted fs-8 m-0">22 Produk</p>
        </div>
      </a>
    </div>
    <div class="col-6 col-md-3">
      <a href="#" class="text-decoration-none">
        <div class="bg-white p-4 text-center rounded-4 border shadow-sm h-100">
          <div class="bg-light text-brand rounded-4 d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
            <i class="bi bi-shop fs-4"></i>
          </div>
          <h5 class="fw-bold fs-6 text-dark mb-1">Pakaian Oversize</h5>
          <p class="text-muted fs-8 m-0">9 Produk</p>
        </div>
      </a>
    </div>
  </div>
</section>

<<section id="products" class="py-5 bg-white border-top border-bottom">
  <div class="container">

    <div class="row align-items-center mb-5">
      <div class="col-md-6">
        <h6 class="text-uppercase text-brand fw-bold fs-7 mb-1">Daftar Produk</h6>
        <h2 class="fw-bold m-0">Katalog Produk Terbaru</h2>
      </div>
    </div>

    <div class="row g-4">

      <div class="col-sm-6 col-lg-3">
        <div class="product-card bg-white h-100 d-flex flex-column">
          <div class="position-relative bg-light overflow-hidden" style="height: 220px;">
            <span class="position-absolute top-0 start-0 m-3 badge bg-brand shadow-sm">Baru</span>
            <img src="https://placehold.co/400x400/f1f5f9/475569?text=Product+1" class="w-100 h-100 object-fit-cover" alt="Product">
          </div>
          <div class="p-3 d-flex flex-column flex-grow-1">
            <span class="text-muted fs-8 mb-1">Pakaian</span>
            <h6 class="fw-bold mb-2 text-dark">Kebaya Full Payet</h6>
            <div class="mt-auto d-flex align-items-center justify-content-between pt-2 border-top">
              <span class="fw-bold text-dark">Rp 450.000</span>
              <button class="btn btn-brand btn-sm rounded-pill px-3 fw-semibold">Beli</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="product-card bg-white h-100 d-flex flex-column">
          <div class="position-relative bg-light overflow-hidden" style="height: 220px;">
            <span class="position-absolute top-0 start-0 m-3 badge bg-brand shadow-sm">Baru</span>
            <img src="https://placehold.co/400x400/f1f5f9/475569?text=Product+1" class="w-100 h-100 object-fit-cover" alt="Product">
          </div>
          <div class="p-3 d-flex flex-column flex-grow-1">
            <span class="text-muted fs-8 mb-1">Pakaian</span>
            <h6 class="fw-bold mb-2 text-dark">Kebaya Polos</h6>
            <div class="mt-auto d-flex align-items-center justify-content-between pt-2 border-top">
              <span class="fw-bold text-dark">Rp 150.000</span>
              <button class="btn btn-brand btn-sm rounded-pill px-3 fw-semibold">Beli</button>
            </div>
          </div>
        </div>
      </div>
<div class="col-sm-6 col-lg-3">
        <div class="product-card bg-white h-100 d-flex flex-column">
          <div class="position-relative bg-light overflow-hidden" style="height: 220px;">
            <span class="position-absolute top-0 start-0 m-3 badge bg-brand shadow-sm">Baru</span>
            <img src="https://placehold.co/400x400/f1f5f9/475569?text=Product+1" class="w-100 h-100 object-fit-cover" alt="Product">
          </div>
          <div class="p-3 d-flex flex-column flex-grow-1">
            <span class="text-muted fs-8 mb-1">Pakaian</span>
            <h6 class="fw-bold mb-2 text-dark">Kemeja Pria</h6>
            <div class="mt-auto d-flex align-items-center justify-content-between pt-2 border-top">
              <span class="fw-bold text-dark">Rp 250.000</span>
              <button class="btn btn-brand btn-sm rounded-pill px-3 fw-semibold">Beli</button>
            </div>
          </div>
        </div>
      </div>
<div class="col-sm-6 col-lg-3">
        <div class="product-card bg-white h-100 d-flex flex-column">
          <div class="position-relative bg-light overflow-hidden" style="height: 220px;">
            <span class="position-absolute top-0 start-0 m-3 badge bg-brand shadow-sm">Baru</span>
            <img src="https://placehold.co/400x400/f1f5f9/475569?text=Product+1" class="w-100 h-100 object-fit-cover" alt="Product">
          </div>
          <div class="p-3 d-flex flex-column flex-grow-1">
            <span class="text-muted fs-8 mb-1">Pakaian</span>
            <h6 class="fw-bold mb-2 text-dark">Kebaya Overzise</h6>
            <div class="mt-auto d-flex align-items-center justify-content-between pt-2 border-top">
              <span class="fw-bold text-dark">Rp 350.000</span>
              <button class="btn btn-brand btn-sm rounded-pill px-3 fw-semibold">Beli</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="product-card bg-white h-100 d-flex flex-column">
          <div class="position-relative bg-light overflow-hidden" style="height: 220px;">
            <span class="position-absolute top-0 start-0 m-3 badge bg-brand shadow-sm">Baru</span>
            <img src="https://placehold.co/400x400/f1f5f9/475569?text=Product+1" class="w-100 h-100 object-fit-cover" alt="Product">
          </div>
          <div class="p-3 d-flex flex-column flex-grow-1">
            <span class="text-muted fs-8 mb-1">Pakaian</span>
            <h6 class="fw-bold mb-2 text-dark">Kebaya Anak</h6>
            <div class="mt-auto d-flex align-items-center justify-content-between pt-2 border-top">
              <span class="fw-bold text-dark">Rp 120.000</span>
              <button class="btn btn-brand btn-sm rounded-pill px-3 fw-semibold">Beli</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3">
        <div class="product-card bg-white h-100 d-flex flex-column">
          <div class="position-relative bg-light overflow-hidden" style="height: 220px;">
            <span class="position-absolute top-0 start-0 m-3 badge bg-brand shadow-sm">Baru</span>
            <img src="https://placehold.co/400x400/f1f5f9/475569?text=Product+1" class="w-100 h-100 object-fit-cover" alt="Product">
          </div>
          <div class="p-3 d-flex flex-column flex-grow-1">
            <span class="text-muted fs-8 mb-1">Pakaian</span>
            <h6 class="fw-bold mb-2 text-dark">Kemeja Anak</h6>
            <div class="mt-auto d-flex align-items-center justify-content-between pt-2 border-top">
              <span class="fw-bold text-dark">Rp 150.000</span>
              <button class="btn btn-brand btn-sm rounded-pill px-3 fw-semibold">Beli</button>
            </div>
          </div>
        </div>
      </div>




    </div>

  </div>
</section>
</main>
<footer id="footer" class="bg-dark text-white pt-5 pb-4 border-top border-secondary">
  <div class="container">

    <div class="row g-4 pb-5 border-bottom border-secondary">
    
      <div class="col-lg-4">
        <div class="d-flex align-items-center gap-2 mb-3">
          <div class="bg-brand text-white rounded-3 d-flex align-items-center justify-content-center fw-bold" style="width: 35px; height: 35px;">Toko</div>
          <span class="fs-4 fw-bold">Kebaya<span class="text-brand">Ku</span></span>
        </div>
        <p class="text-secondary small mb-3">Template toko online bersih dan elegan yang siap dikonversi ke dalam WordPress theme files.</p>
      </div>
      
      <div class="col-6 col-lg-3">
        <h6 class="text-white fw-bold mb-3 text-uppercase fs-7">Navigasi Footer</h6>
        <ul class="list-unstyled small text-secondary d-flex flex-column gap-2">
          <li><a href="#" class="text-decoration-none text-secondary">Tentang Kami</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">Kebijakan Privasi</a></li>
          <li><a href="#" class="text-decoration-none text-secondary">Syarat & Ketentuan</a></li>
        </ul>
      </div>

      <div class="col-lg-5">
        <h6 class="text-white fw-bold mb-3 text-uppercase fs-7">Informasi Kontak</h6>
        <ul class="list-unstyled small text-secondary d-flex flex-column gap-2">
          <li><i class="bi bi-geo-alt text-brand me-2"></i> Jl. Raya Payangan, Gianyar</li>
          <li><i class="bi bi-telephone text-brand me-2"></i> +62 85738353502</li>
          <li><i class="bi bi-envelope text-brand me-2"></i> yankebayan@tokoku.id</li>
        </ul>
      </div>

      <div class="pt-4 text-center text-secondary small">
        <p class="m-0">&copy; 2026 TokoKu. All Rights Reserved. Built for WordPress Conversion.</p>
      </div>

    </div>

  </div>
</footer>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>