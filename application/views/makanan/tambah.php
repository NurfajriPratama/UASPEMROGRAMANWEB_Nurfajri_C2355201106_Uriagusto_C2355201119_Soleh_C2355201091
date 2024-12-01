<div class="content-wrapper" style="margin-left: 230px; padding: 20px; background-color: #f5f5f5;">
  <div class="container-fluid">
    <h2 class="mb-4 text-primary"><i class="fa fa-plus-circle"></i> <?= $title ?></h2>

    <?php if (validation_errors()): ?>
    <div class="alert alert-danger">
      <strong>Kesalahan:</strong> <?= validation_errors() ?>
    </div>
    <?php endif; ?>

    <?= form_open('makanan/tambah', ['class' => 'needs-validation', 'novalidate' => true]) ?>
    <div class="card shadow-lg border-0 rounded-lg">
      <div class="card-body p-5">
        <h5 class="card-title text-secondary mb-4"><i class="fa fa-info-circle"></i> Form Tambah Makanan</h5>

        <div class="form-group mb-4">
          <label for="nama_makanan" class="form-label">Nama Makanan</label>
          <input type="text" class="form-control" id="nama_makanan" name="nama_makanan"
            value="<?= set_value('nama_makanan') ?>" placeholder="Masukkan nama makanan..." required>
        </div>

        <div class="form-group mb-4">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Deskripsi makanan..."
            required><?= set_value('deskripsi') ?></textarea>
        </div>

        <div class="form-group mb-4">
          <label for="harga" class="form-label">Harga</label>
          <input type="number" class="form-control" id="harga" name="harga" value="<?= set_value('harga') ?>"
            placeholder="Masukkan harga..." required>
        </div>

        <div class="form-group mb-4">
          <label for="kategori" class="form-label">Kategori</label>
          <input type="text" class="form-control" id="kategori" name="kategori" value="<?= set_value('kategori') ?>"
            placeholder="Masukkan kategori makanan...">
        </div>

        <div class="form-group mb-4">
          <label for="bahan_utama" class="form-label">Bahan Utama</label>
          <input type="text" class="form-control" id="bahan_utama" name="bahan_utama"
            value="<?= set_value('bahan_utama') ?>" placeholder="Masukkan bahan utama...">
        </div>

        <div class="form-group mb-4">
          <label for="asal_daerah" class="form-label">Asal Daerah</label>
          <input type="text" class="form-control" id="asal_daerah" name="asal_daerah"
            value="<?= set_value('asal_daerah') ?>" placeholder="Masukkan asal daerah...">
        </div>

        <div class="d-flex justify-content-between mt-4">
          <button type="submit" class="btn btn-primary px-4 py-2"><i class="fa fa-save"></i> Simpan</button>
          <a href="<?= site_url('makanan') ?>" class="btn btn-outline-secondary px-4 py-2"><i
              class="fa fa-arrow-left"></i> Kembali</a>
        </div>
      </div>
    </div>
    <?= form_close() ?>
  </div>
</div>

<style>
/* Container styling */
.content-wrapper {
  background-color: #f5f5f5;
  min-height: 100vh;
  padding-top: 20px;
}

/* Card Styling */
.card {
  border-radius: 15px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  border: 1px solid #ddd;
  background-color: #fff;
}

.card-body {
  padding: 30px;
}

/* Card Title Styling */
.card-title {
  font-size: 20px;
  font-weight: bold;
  color: #333;
  display: flex;
  align-items: center;
}

.card-title i {
  margin-right: 10px;
}

/* Form Input Styling */
.form-control {
  border-radius: 10px;
  border: 1px solid #ccc;
  padding: 12px 20px;
  font-size: 16px;
  transition: border 0.3s ease, box-shadow 0.3s ease;
}

.form-control:focus {
  border-color: #80bdff;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
}

/* Alert Styling */
.alert {
  border-radius: 10px;
  padding: 15px 25px;
  font-size: 14px;
  background-color: #f8d7da;
  border-color: #f5c6cb;
}

/* Button Styling */
.btn {
  border-radius: 25px;
  font-size: 16px;
  padding: 12px 20px;
  transition: all 0.3s ease;
}

.btn-primary {
  background: linear-gradient(to right, #4e9af1, #0c8dee);
  color: #fff;
  border: none;
}

.btn-primary:hover {
  background: linear-gradient(to right, #3c8bd7, #0879c3);
  transform: translateY(-2px);
}

.btn-outline-secondary {
  border: 1px solid #6c757d;
  color: #6c757d;
  background: transparent;
}

.btn-outline-secondary:hover {
  background: #6c757d;
  color: #fff;
  transform: translateY(-2px);
}

/* Additional Spacing for Inputs */
.form-group {
  margin-bottom: 25px;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
  .card-body {
    padding: 20px;
  }

  .btn {
    font-size: 14px;
    padding: 10px 18px;
  }

  .form-control {
    font-size: 14px;
    padding: 10px;
  }
}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">