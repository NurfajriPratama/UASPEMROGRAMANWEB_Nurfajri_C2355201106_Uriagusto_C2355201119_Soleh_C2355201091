<div class="content-wrapper" style="margin-left: 230px; padding: 20px; background-color: #f9f9f9;">
  <div class="container-fluid">
    <h2 class="mb-4"><?= $title ?></h2>

    <?php if(validation_errors()): ?>
    <div class="alert alert-danger">
      <?= validation_errors() ?>
    </div>
    <?php endif; ?>

    <?= form_open('minuman/edit/'.$minuman->id_minuman) ?>
    <div class="card shadow-lg border-0">
      <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Form Edit Minuman</h5>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label for="nama_minuman">Nama Minuman</label>
          <input type="text" class="form-control" id="nama_minuman" name="nama_minuman"
            value="<?= $minuman->nama_minuman ?>" required>
        </div>

        <div class="form-group">
          <label for="jenis">Jenis</label>
          <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $minuman->jenis ?>">
        </div>

        <div class="form-group">
          <label for="harga">Harga</label>
          <input type="number" class="form-control" id="harga" name="harga" value="<?= $minuman->harga ?>" required>
        </div>

        <div class="form-group">
          <label for="alkohol">Mengandung Alkohol</label>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="alkohol" name="alkohol" value="1"
              <?= $minuman->alkohol ? 'checked' : '' ?>>
            <label class="form-check-label" for="alkohol">Ya</label>
          </div>
        </div>

        <div class="form-group">
          <label for="asal_minuman">Asal Minuman</label>
          <input type="text" class="form-control" id="asal_minuman" name="asal_minuman"
            value="<?= $minuman->asal_minuman ?>">
        </div>

        <div class="d-flex justify-content-between mt-4">
          <button type="submit" class="btn btn-success">Update Minuman</button>
          <a href="<?= site_url('minuman') ?>" class="btn btn-secondary">Kembali</a>
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
  box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
  margin-top: 20px;
}

.card-header {
  background-color: #007bff;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  padding: 15px;
}

.card-title {
  font-weight: bold;
  font-size: 1.2rem;
}

.card-body {
  padding: 30px;
}

/* Form Styling */
.form-control {
  border-radius: 8px;
  border: 1px solid #ced4da;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
  padding: 12px;
  font-size: 1rem;
}

.form-control:focus {
  border-color: #80bdff;
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

/* Alert Styling */
.alert {
  border-radius: 8px;
  padding: 15px;
  margin-bottom: 20px;
}

/* Button Styling */
.btn {
  border-radius: 8px;
  padding: 12px 20px;
  font-size: 1rem;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-success {
  background-color: #28a745;
  border: none;
  color: white;
}

.btn-success:hover {
  background-color: #218838;
  transform: translateY(-2px);
}

.btn-secondary {
  background-color: #6c757d;
  border: none;
  color: white;
}

.btn-secondary:hover {
  background-color: #5a6268;
  transform: translateY(-2px);
}

/* Checkbox Styling */
.form-check-input {
  width: 20px;
  height: 20px;
  border-radius: 4px;
}

.form-check-label {
  font-size: 1rem;
  margin-left: 8px;
}

/* Spacing Adjustments */
.d-flex {
  gap: 15px;
}

/* Card Title Styling */
.card-title {
  font-weight: bold;
  margin-bottom: 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
  .card-body {
    padding: 20px;
  }

  .btn {
    font-size: 0.9rem;
  }

  .form-control {
    font-size: 0.95rem;
  }
}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">