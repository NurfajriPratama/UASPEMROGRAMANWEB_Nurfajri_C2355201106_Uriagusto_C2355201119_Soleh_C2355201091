<div class="content-wrapper" style="margin-left: 230px; padding: 20px; background-color: #f9f9f9;">
  <div class="container-fluid">
    <h2 class="mb-4 text-primary"><?= $title ?></h2>

    <?php if(validation_errors()): ?>
    <div class="alert alert-danger mb-4">
      <?= validation_errors() ?>
    </div>
    <?php endif; ?>

    <?= form_open('dessert/tambah') ?>
    <div class="card shadow-lg border-0 rounded-lg">
      <div class="card-body p-4">
        <h5 class="card-title mb-4 text-center text-primary">Form Tambah Dessert</h5>

        <div class="form-group">
          <label for="nama_dessert">Nama Dessert</label>
          <input type="text" class="form-control" id="nama_dessert" name="nama_dessert"
            value="<?= set_value('nama_dessert') ?>" required>
        </div>

        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required>
            <?= set_value('deskripsi') ?>
          </textarea>
        </div>

        <div class="form-group">
          <label for="harga">Harga</label>
          <input type="number" class="form-control" id="harga" name="harga" value="<?= set_value('harga') ?>" required>
        </div>

        <div class="form-group">
          <label for="kategori">Kategori</label>
          <input type="text" class="form-control" id="kategori" name="kategori" value="<?= set_value('kategori') ?>">
        </div>

        <div class="form-group">
          <label for="bahan_utama">Bahan Utama</label>
          <input type="text" class="form-control" id="bahan_utama" name="bahan_utama"
            value="<?= set_value('bahan_utama') ?>">
        </div>

        <div class="d-flex justify-content-between mt-4">
          <button type="submit" class="btn btn-success btn-lg">Simpan Dessert</button>
          <a href="<?= site_url('dessert') ?>" class="btn btn-secondary btn-lg">Kembali</a>
        </div>
      </div>
    </div>
    <?= form_close() ?>
  </div>
</div>

<style>
/* Card Styling */
.card {
  border-radius: 15px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  background-color: #ffffff;
}

/* Form Styling */
.form-control {
  border-radius: 5px;
  border: 1px solid #ced4da;
  padding: 10px;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-control:focus {
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

/* Alert Styling */
.alert {
  border-radius: 5px;
  padding: 15px;
  font-size: 14px;
}

/* Button Styling */
.btn {
  border-radius: 30px;
  padding: 12px 30px;
  font-size: 16px;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-success {
  background-color: #28a745;
  border: none;
}

.btn-success:hover {
  background-color: #218838;
  transform: translateY(-2px);
}

.btn-secondary {
  background-color: #6c757d;
  border: none;
}

.btn-secondary:hover {
  background-color: #5a6268;
  transform: translateY(-2px);
}

/* Card Title Styling */
.card-title {
  font-weight: bold;
  margin-bottom: 20px;
  color: #007bff;
}

/* Centering the title */
.text-center {
  text-align: center;
}

/* Form Group Styling */
.form-group {
  margin-bottom: 20px;
}

/* Larger input fields and textarea */
textarea.form-control,
.form-control {
  height: 45px;
  font-size: 14px;
}

/* Spacing for buttons */
.d-flex {
  margin-top: 20px;
}

/* Additional padding for the card */
.card-body {
  padding: 30px;
}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">