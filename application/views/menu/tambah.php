<div class="content-wrapper" style="margin-left: 230px; padding: 30px; background-color: #f5f8fa;">
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <h2 class="text-center mb-4"><?= $title ?></h2>

        <?= validation_errors('<div class="alert alert-danger">', '</div>') ?>

        <?= form_open('menu/add') ?>
        <div class="card shadow-lg border-0 rounded-3 mb-4">
          <div class="card-body">
            <div class="mb-4">
              <label for="nama_item" class="form-label">Nama Item</label>
              <input type="text" class="form-control" id="nama_item" name="nama_item"
                value="<?= set_value('nama_item') ?>" required placeholder="Masukkan Nama Item">
            </div>

            <div class="mb-4">
              <label for="tipe" class="form-label">Tipe</label>
              <select class="form-control" id="tipe" name="tipe" required>
                <option value="Makanan" <?= set_select('tipe', 'Makanan') ?>>Makanan</option>
                <option value="Minuman" <?= set_select('tipe', 'Minuman') ?>>Minuman</option>
                <option value="Dessert" <?= set_select('tipe', 'Dessert') ?>>Dessert</option>
              </select>
            </div>

            <div class="mb-4">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="deskripsi" name="deskripsi" required
                placeholder="Masukkan Deskripsi Item"><?= set_value('deskripsi') ?></textarea>
            </div>

            <div class="mb-4">
              <label for="harga" class="form-label">Harga</label>
              <input type="number" class="form-control" id="harga" name="harga" value="<?= set_value('harga') ?>"
                required placeholder="Masukkan Harga">
            </div>

            <div class="mb-4">
              <label for="kategori" class="form-label">Kategori</label>
              <input type="text" class="form-control" id="kategori" name="kategori" value="<?= set_value('kategori') ?>"
                required placeholder="Masukkan Kategori">
            </div>

            <div class="mb-4">
              <label for="bahan_utama" class="form-label">Bahan Utama</label>
              <input type="text" class="form-control" id="bahan_utama" name="bahan_utama"
                value="<?= set_value('bahan_utama') ?>" required placeholder="Masukkan Bahan Utama">
            </div>

            <div class="mb-4">
              <label for="asal" class="form-label">Asal</label>
              <input type="text" class="form-control" id="asal" name="asal" value="<?= set_value('asal') ?>" required
                placeholder="Masukkan Asal Item">
            </div>

            <div class="mb-4">
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="alkohol" name="alkohol" value="1"
                  <?= set_checkbox('alkohol', '1') ?>>
                <label class="form-check-label" for="alkohol">Mengandung Alkohol</label>
              </div>
            </div>

            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary w-48">Simpan</button>
              <a href="<?= base_url('menu') ?>" class="btn btn-outline-secondary w-48">Kembali</a>
            </div>
          </div>
        </div>
        <?= form_close() ?>
      </div>
    </div>
  </div>
</div>

<style>
/* Styling tambahan untuk memperindah tampilan */
.content-wrapper {
  background-color: #f0f4f8;
}

.card {
  background-color: #ffffff;
  border-radius: 10px;
}

.form-control {
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}

.btn-outline-secondary {
  border-color: #ced4da;
  color: #495057;
}

.btn-outline-secondary:hover {
  background-color: #e2e6ea;
  color: #495057;
}

.form-label {
  font-weight: 500;
  color: #333;
}

.mb-4 {
  margin-bottom: 1.5rem;
}

.w-48 {
  width: 48%;
}

.shadow-lg {
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">