<!DOCTYPE html>
<html>

<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #f6f8fd 0%, #f1f4f9 100%);
    margin: 0;
    padding: 0;
  }

  .content-wrapper {
    margin-left: 230px;
    padding: 2.5rem;
  }

  .container-fluid {
    max-width: 1200px;
    margin: 0 auto;
  }

  .page-title {
    color: #1a202c;
    font-size: 1.8rem;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.75rem;
  }

  .page-title i {
    color: #4c51bf;
  }

  .card {
    background: white;
    border-radius: 16px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
    transition: all 0.3s ease;
    margin-bottom: 2rem;
  }

  .card-body {
    padding: 2rem;
  }

  .form-label {
    color: #4a5568;
    font-weight: 500;
    margin-bottom: 0.5rem;
    display: block;
  }

  .form-control {
    width: 100%;
    padding: 0.75rem 1rem;
    border: 2px solid #e2e8f0;
    border-radius: 10px;
    font-size: 1rem;
    transition: all 0.3s ease;
    margin-bottom: 1rem;
  }

  .form-control:focus {
    border-color: #4c51bf;
    box-shadow: 0 0 0 3px rgba(76, 81, 191, 0.1);
    outline: none;
  }

  textarea.form-control {
    min-height: 120px;
    resize: vertical;
  }

  select.form-control {
    appearance: none;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 1rem center;
    background-size: 1em;
  }

  .form-group {
    margin-bottom: 1.5rem;
    position: relative;
  }

  .form-group i {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: #a0aec0;
  }

  .form-group .form-control {
    padding-left: 2.5rem;
  }

  .form-check {
    margin-top: 1.5rem;
    padding: 1rem;
    background: #f8fafc;
    border-radius: 10px;
    border: 1px solid #e2e8f0;
  }

  .form-check-input {
    margin-right: 0.5rem;
  }

  .form-check-label {
    color: #4a5568;
    font-weight: 500;
  }

  .btn {
    padding: 0.75rem 1.5rem;
    border-radius: 10px;
    font-weight: 500;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
  }

  .btn-primary {
    background: linear-gradient(135deg, #4c51bf 0%, #3c4fe0 100%);
    color: white;
    box-shadow: 0 4px 15px rgba(76, 81, 191, 0.2);
  }

  .btn-secondary {
    background: #718096;
    color: white;
    box-shadow: 0 4px 15px rgba(113, 128, 150, 0.2);
  }

  .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
  }

  .action-buttons {
    display: flex;
    gap: 1rem;
    margin-top: 2rem;
  }

  .alert {
    padding: 1rem;
    border-radius: 10px;
    margin-bottom: 1.5rem;
    background: #fff5f5;
    border-left: 4px solid #fc8181;
    color: #c53030;
  }

  /* Input groups with icons */
  .input-group {
    position: relative;
    margin-bottom: 1.5rem;
  }

  .input-group i {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: #a0aec0;
    pointer-events: none;
  }

  .input-group .form-control {
    padding-left: 2.5rem;
  }

  /* Price input specific styling */
  .price-input {
    position: relative;
  }

  .price-input::before {
    content: 'Rp';
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: #718096;
    font-weight: 500;
  }

  .price-input .form-control {
    padding-left: 3rem;
  }

  @media (max-width: 768px) {
    .content-wrapper {
      margin-left: 0;
      padding: 1rem;
    }
  }
  </style>
</head>

<body>
  <div class="content-wrapper">
    <div class="container-fluid">
      <h2 class="page-title">
        <i class="fas fa-edit"></i>
        <?= $title ?>
      </h2>

      <?= validation_errors('<div class="alert">', '</div>') ?>

      <?= form_open('menu/edit/'.$menu_item->id_menu) ?>
      <div class="card">
        <div class="card-body">
          <div class="input-group">
            <i class="fas fa-utensils"></i>
            <input type="text" class="form-control" id="nama_item" name="nama_item" placeholder="Masukkan nama item"
              value="<?= set_value('nama_item', $menu_item->nama_item) ?>" required>
          </div>

          <div class="input-group">
            <i class="fas fa-tag"></i>
            <select class="form-control" id="tipe" name="tipe" required>
              <option value="Makanan" <?= set_select('tipe', 'Makanan', $menu_item->tipe == 'Makanan') ?>>Makanan
              </option>
              <option value="Minuman" <?= set_select('tipe', 'Minuman', $menu_item->tipe == 'Minuman') ?>>Minuman
              </option>
              <option value="Dessert" <?= set_select('tipe', 'Dessert', $menu_item->tipe == 'Dessert') ?>>Dessert
              </option>
            </select>
          </div>

          <div class="input-group">
            <i class="fas fa-align-left"></i>
            <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Masukkan deskripsi menu"
              required><?= set_value('deskripsi', $menu_item->deskripsi) ?></textarea>
          </div>

          <div class="input-group price-input">
            <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukkan harga"
              value="<?= set_value('harga', $menu_item->harga) ?>" required>
          </div>

          <div class="input-group">
            <i class="fas fa-layer-group"></i>
            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukkan kategori"
              value="<?= set_value('kategori', $menu_item->kategori) ?>" required>
          </div>

          <div class="input-group">
            <i class="fas fa-carrot"></i>
            <input type="text" class="form-control" id="bahan_utama" name="bahan_utama"
              placeholder="Masukkan bahan utama" value="<?= set_value('bahan_utama', $menu_item->bahan_utama) ?>"
              required>
          </div>

          <div class="input-group">
            <i class="fas fa-map-marker-alt"></i>
            <input type="text" class="form-control" id="asal" name="asal" placeholder="Masukkan asal menu"
              value="<?= set_value('asal', $menu_item->asal) ?>" required>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="alkohol" name="alkohol" value="1"
              <?= set_checkbox('alkohol', '1', $menu_item->alkohol == 1) ?>>
            <label class="form-check-label" for="alkohol">
              <i class="fas fa-wine-glass"></i> Mengandung Alkohol
            </label>
          </div>

          <div class="action-buttons">
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-save"></i> Update Menu
            </button>
            <a href="<?= base_url('menu') ?>" class="btn btn-secondary">
              <i class="fas fa-arrow-left"></i> Kembali
            </a>
          </div>
        </div>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</body>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

</html>