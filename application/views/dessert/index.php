<div class="content-wrapper" style="margin-left: 230px; padding: 20px; background-color: #f4f6f9;">
  <div class="container-fluid">
    <h2 class="mb-4 text-primary"><i class="fa fa-cake"></i> <?= $title ?></h2>

    <?php if($this->session->flashdata('success')): ?>
    <div class="alert alert-success mb-4">
      <?= $this->session->flashdata('success') ?>
    </div>
    <?php endif; ?>

    <a href="<?= site_url('dessert/tambah') ?>" class="btn btn-success mb-4">
      <i class="fa fa-plus-circle"></i> Tambah Dessert Baru
    </a>

    <!-- Menambahkan margin bawah -->
    <div class="card shadow-lg border-0 rounded-lg mb-4">
      <div class="card-body p-4">
        <table class="table table-striped table-hover table-bordered">
          <thead class="thead-dark">
            <tr>
              <th>No</th>
              <th>Nama Dessert</th>
              <th>Kategori</th>
              <th>Harga</th>
              <th>Bahan Utama</th>
              <th>Deskripsi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; foreach($dessert as $item): ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= htmlspecialchars($item->nama_dessert) ?></td>
              <td><?= htmlspecialchars($item->kategori) ?></td>
              <td>Rp. <?= number_format($item->harga, 0, ',', '.') ?></td>
              <td><?= htmlspecialchars($item->bahan_utama) ?></td>
              <td><?= htmlspecialchars(substr($item->deskripsi, 0, 50)) ?>...</td>
              <td>
                <a href="<?= site_url('dessert/edit/'.$item->id_dessert) ?>" class="btn btn-warning btn-sm">
                  <i class="fa fa-edit"></i> Edit
                </a>
                <a href="<?= site_url('dessert/hapus/'.$item->id_dessert) ?>" class="btn btn-danger btn-sm"
                  onclick="return confirm('Anda yakin ingin menghapus dessert ini?')">
                  <i class="fa fa-trash"></i> Hapus
                </a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<style>
/* Card Styling */
.card {
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  padding: 15px;
}

/* Table Styling */
.table {
  background-color: #fff;
}

.table th,
.table td {
  vertical-align: middle;
  padding: 12px;
  text-align: center;
}

.table th {
  background-color: #007bff;
  color: #fff;
  font-weight: bold;
  border-bottom: 2px solid #0056b3;
}

.table-hover tbody tr:hover {
  background-color: #f1f1f1;
}

.table-striped tbody tr:nth-of-type(odd) {
  background-color: #f9f9f9;
}

.table td {
  border: 1px solid #ddd;
  color: #333;
}

/* Button Styling */
.btn {
  border-radius: 25px;
  padding: 8px 20px;
  font-size: 14px;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

.btn-success {
  background-color: #28a745;
  color: #fff;
}

.btn-success:hover {
  background-color: #218838;
}

.btn-warning {
  background-color: #ffc107;
  color: #fff;
}

.btn-warning:hover {
  background-color: #e0a800;
}

.btn-danger {
  background-color: #dc3545;
  color: #fff;
}

.btn-danger:hover {
  background-color: #c82333;
}

/* Card Header Styling */
.card-header {
  background-color: black;
  color: white;
  padding: 20px;
  border-radius: 10px 10px 0 0;
  margin-bottom: 15px;
}

/* Additional Margin for the Button */
.mb-4 {
  margin-bottom: 30px;
}

/* Hover effect for table rows */
.table-hover tbody tr:hover {
  background-color: #f8f9fa;
}

h5 {
  padding-bottom: 10px;
}

/* Margin to separate the card and table */
.mb-4 {
  margin-bottom: 40px;
  /* Jarak lebih besar antara tombol dan tabel */
}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">