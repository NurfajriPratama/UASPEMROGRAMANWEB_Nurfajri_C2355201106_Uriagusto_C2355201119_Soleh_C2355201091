<!DOCTYPE html>
<html>

<head>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 0;
  }

  .content-wrapper {
    margin-left: 230px;
    padding: 2rem;
  }

  .container-fluid {
    max-width: 1200px;
    margin: 0 auto;
  }

  .page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    padding: 1rem;
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
  }

  h2 {
    color: #2d3748;
    margin: 0;
    font-size: 1.8rem;
  }

  .btn-success {
    background-color: #38a169;
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
    border: none;
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .btn-success:hover {
    background-color: #2f855a;
    transform: translateY(-1px);
  }

  .alert {
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 1.5rem;
    animation: slideIn 0.5s ease-out;
  }

  .alert-success {
    background-color: #c6f6d5;
    border-left: 4px solid #38a169;
    color: #2f855a;
  }

  .card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    overflow: hidden;
  }

  .card-body {
    padding: 1.5rem;
  }

  .card-title {
    color: #2d3748;
    font-size: 1.25rem;
    margin-bottom: 1.5rem;
    padding-bottom: 0.75rem;
    border-bottom: 2px solid #e2e8f0;
  }

  .table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 0.5rem;
  }

  .table th {
    background-color: #f7fafc;
    color: #4a5568;
    font-weight: 600;
    padding: 1rem;
    text-align: left;
  }

  .table td {
    padding: 1rem;
    background-color: white;
  }

  .table tr:hover td {
    background-color: #f7fafc;
  }

  .btn-sm {
    padding: 0.5rem 1rem;
    border-radius: 6px;
    font-size: 0.875rem;
    text-decoration: none;
    margin-right: 0.5rem;
    transition: all 0.2s;
  }

  .btn-warning {
    background-color: #ed8936;
    color: white;
  }

  .btn-danger {
    background-color: #e53e3e;
    color: white;
  }

  .btn-warning:hover,
  .btn-danger:hover {
    opacity: 0.9;
    transform: translateY(-1px);
  }

  @keyframes slideIn {
    from {
      transform: translateY(-10px);
      opacity: 0;
    }

    to {
      transform: translateY(0);
      opacity: 1;
    }
  }

  .price-column {
    font-weight: 600;
    color: #2d3748;
  }

  .empty-state {
    text-align: center;
    padding: 3rem;
    color: #718096;
  }

  .badge {
    padding: 0.35rem 0.75rem;
    border-radius: 9999px;
    font-size: 0.75rem;
    font-weight: 500;
  }

  .badge-food {
    background-color: #e9d8fd;
    color: #553c9a;
  }

  .badge-drink {
    background-color: #bee3f8;
    color: #2c5282;
  }
  </style>
</head>

<body>
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="page-header">
        <h2><?= $title ?></h2>
        <a href="<?= base_url('menu/add') ?>" class="btn-success">
          <i class="fas fa-plus"></i>
          <span>Tambah Menu</span>
        </a>
      </div>

      <?php if($this->session->flashdata('success')): ?>
      <div class="alert alert-success">
        <i class="fas fa-check-circle"></i>
        <?= $this->session->flashdata('success') ?>
      </div>
      <?php endif; ?>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">
            <i class="fas fa-utensils mr-2"></i>
            Daftar Menu
          </h5>
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Item</th>
                <th>Tipe</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($menu_items as $index => $item): ?>
              <tr>
                <td><?= $index + 1 ?></td>
                <td><?= htmlspecialchars($item->nama_item) ?></td>
                <td>
                  <span class="badge <?= $item->tipe == 'Makanan' ? 'badge-food' : 'badge-drink' ?>">
                    <?= htmlspecialchars($item->tipe) ?>
                  </span>
                </td>
                <td><?= htmlspecialchars($item->kategori) ?></td>
                <td class="price-column">Rp <?= number_format($item->harga, 0, ',', '.') ?></td>
                <td>
                  <a href="<?= base_url('menu/edit/'.$item->id_menu) ?>" class="btn-sm btn-warning">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                  <a href="<?= base_url('menu/delete/'.$item->id_menu) ?>" class="btn-sm btn-danger"
                    onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">
                    <i class="fas fa-trash"></i> Hapus
                  </a>
                </td>
              </tr>
              <?php endforeach; ?>
              <?php if(empty($menu_items)): ?>
              <tr>
                <td colspan="6" class="empty-state">
                  <i class="fas fa-inbox fa-3x mb-3"></i>
                  <p>Tidak ada item menu ditemukan.</p>
                </td>
              </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>