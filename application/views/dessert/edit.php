<div class="content-wrapper" style="margin-left: 230px; padding: 20px; background-color: #f9f9f9;">
  <div class="container-fluid">
    <h2 class="mb-4"><?= $title ?></h2>

    <?php if(validation_errors()): ?>
    <div class="alert alert-danger">
      <?= validation_errors() ?>
    </div>
    <?php endif; ?>

    <?= form_open('dessert/edit/'.$dessert->id_dessert) ?>
    <div class="card shadow-lg border-0">
      <div class="card-body">
        <h5 class="card-title">Form Edit Dessert</h5>

        <div class="form-group">
          <label for="nama_dessert">Nama Dessert</label>
          <input type="text" class="form-control" id="nama_dessert" name="nama_dessert"
            value="<?= $dessert->nama_dessert ?>" required>
        </div>

        <div class="form-group">
          <label for="deskripsi">Deskripsi</label>
          <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>
            <?= $dessert->deskripsi ?>
          </textarea>
        </div>

        <div class="form-group">
          <label for="harga">Harga</label>
          <input type="number" class="form-control" id="harga" name="harga" value="<?= $dessert->harga ?>" required>
        </div>

        <div class="form-group">
          <label for="kategori">Kategori</label>
          <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $dessert->kategori ?>">
        </div>

        <div class="form-group">
          <label for="bahan_utama">Bahan Utama</label>
          <input type="text" class="form-control" id="bahan_utama" name="bahan_utama"
            value="<?= $dessert->bahan_utama ?>">
        </div>

        <div class="d-flex justify-content-between mt-4">
          <button type="submit" class="btn btn-success">Update Dessert</button>
          <a href="<?= site_url('dessert') ?>" class="btn btn-secondary">Kembali</a>
        </div>
      </div>
    </div>
    <?= form_close() ?>
  </div>
</div>
<style>
/* Card Styling */
.card {
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

/* Form Styling */
.form-control {
  border-radius: 5px;
  border: 1px solid #ced4da;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.form-control:focus {
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

/* Alert Styling */
.alert {
  border-radius: 5px;
}

/* Button Styling */
.btn {
  border-radius: 5px;
  padding: 10px 20px;
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
}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">