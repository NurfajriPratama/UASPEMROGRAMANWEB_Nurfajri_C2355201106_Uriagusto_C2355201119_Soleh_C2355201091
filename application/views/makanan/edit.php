<div class="content-wrapper" style="margin-left: 230px; padding: 20px; background-color: #f8f9fa;">
  <div class="container-fluid">
    <h2 class="mb-4 text-primary"><i class="fa fa-edit"></i> <?= $title ?></h2>

    <?php if (validation_errors()): ?>
    <div class="alert alert-danger">
      <strong>Kesalahan:</strong> <?= validation_errors() ?>
    </div>
    <?php endif; ?>

    <?= form_open('makanan/edit/'.$makanan->id_makanan, ['class' => 'needs-validation', 'novalidate' => true]) ?>
    <div class="card shadow-lg border-0">
      <div class="card-body">
        <h5 class="card-title text-secondary"><i class="fa fa-pencil-alt"></i> Form Edit Makanan</h5>

        <div class="form-group mb-3">
          <label for="nama_makanan" class="form-label">Nama Makanan</label>
          <input type="text" class="form-control" id="nama_makanan" name="nama_makanan"
            value="<?= htmlspecialchars($makanan->nama_makanan) ?>" placeholder="Masukkan nama makanan..." required>
        </div>

        <div class="form-group mb-3">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" placeholder="Deskripsi makanan..."
            required><?= htmlspecialchars($makanan->deskripsi) ?></textarea>
        </div>

        <div class="form-group mb-3">
          <label for="harga" class="form-label">Harga</label>
          <input type="number" class="form-control" id="harga" name="harga"
            value="<?= htmlspecialchars($makanan->harga) ?>" placeholder="Masukkan harga..." required>
        </div>

        <div class="form-group mb-3">
          <label for="kategori" class="form-label">Kategori</label>
          <input type="text" class="form-control" id="kategori" name="kategori"
            value="<?= htmlspecialchars($makanan->kategori) ?>" placeholder="Masukkan kategori makanan...">
        </div>

        <div class="form-group mb-3">
          <label for="bahan_utama" class="form-label">Bahan Utama</label>
          <input type="text" class="form-control" id="bahan_utama" name="bahan_utama"
            value="<?= htmlspecialchars($makanan->bahan_utama) ?>" placeholder="Masukkan bahan utama...">
        </div>

        <div class="form-group mb-3">
          <label for="asal_daerah" class="form-label">Asal Daerah</label>
          <input type="text" class="form-control" id="asal_daerah" name="asal_daerah"
            value="<?= htmlspecialchars($makanan->asal_daerah) ?>" placeholder="Masukkan asal daerah...">
        </div>

        <div class="d-flex justify-content-between mt-4">
          <button type="submit" class="btn btn-primary px-4"><i class="fa fa-save"></i> Update</button>
          <a href="<?= site_url('makanan') ?>" class="btn btn-outline-secondary px-4"><i class="fa fa-arrow-left"></i>
            Kembali</a>
        </div>
      </div>
    </div>
    <?= form_close() ?>
  </div>
</div>

<style>
/* General Styling */
.content-wrapper {
  min-height: 100vh;
  background-color: #f8f9fa;
}

/* Card Styling */
.card {
  border-radius: 12px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
  border: 1px solid #ddd;
  background-color: #ffffff;
}

/* Card Title */
.card-title {
  font-size: 20px;
  font-weight: bold;
  color: #333333;
  margin-bottom: 20px;
}

/* Form Input Styling */
.form-control {
  border-radius: 5px;
  border: 1px solid #ced4da;
  padding: 10px 15px;
  transition: all 0.3s ease;
}

.form-control:focus {
  border-color: #80bdff;
  box-shadow: 0 0 5px rgba(0, 123, 255, 0.25);
}

/* Button Styling */
.btn {
  border-radius: 30px;
  font-size: 14px;
  padding: 10px 20px;
  transition: all 0.3s ease;
}

.btn-primary {
  background: linear-gradient(to right, #4e73df, #224abe);
  border: none;
  color: #ffffff;
}

.btn-primary:hover {
  background: linear-gradient(to right, #3b65c3, #1c3e9d);
  transform: translateY(-2px);
}

.btn-outline-secondary {
  border: 1px solid #6c757d;
  color: #6c757d;
  background: transparent;
}

.btn-outline-secondary:hover {
  background: #6c757d;
  color: #ffffff;
  transform: translateY(-2px);
}

/* Alert Styling */
.alert {
  border-radius: 5px;
  font-size: 14px;
  padding: 10px 20px;
}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">