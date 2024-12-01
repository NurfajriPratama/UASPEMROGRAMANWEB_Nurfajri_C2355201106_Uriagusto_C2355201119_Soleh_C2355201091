<div class="content-wrapper" style="margin-left: 230px; padding: 20px; background-color: #f4f6f9;">
  <div class="container-fluid">
    <div class="card shadow-lg border-0 rounded-lg">
      <div class="card-header bg-green text-white">
        <h5 class="mb-0"><i class="fa fa-glass-cheers mr-2"></i> <?= $title ?></h5>
      </div>
      <div class="card-body">
        <a href="<?= base_url('minuman/tambah') ?>" class="btn btn-success mb-4">
          <i class="fa fa-plus-circle"></i> Tambah Minuman Baru
        </a>
        <div class="table-responsive mt-4">
          <table class="table table-striped table-hover table-bordered">
            <thead class="thead-dark">
              <tr>
                <th>No</th>
                <th>Nama Minuman</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Status Alkohol</th>
                <th>Asal Minuman</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach ($minuman as $item): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($item->nama_minuman) ?></td>
                <td><?= htmlspecialchars($item->jenis) ?></td>
                <td>Rp. <?= number_format($item->harga, 0, ',', '.') ?></td>
                <td><?= $item->alkohol ? 'Ya' : 'Tidak' ?></td>
                <td><?= htmlspecialchars($item->asal_minuman) ?></td>
                <td>
                  <a href="<?= site_url('minuman/edit/'.$item->id_minuman) ?>" class="btn btn-warning btn-sm">
                    <i class="fa fa-edit"></i> Edit
                  </a>
                  <a href="<?= site_url('minuman/hapus/'.$item->id_minuman) ?>" class="btn btn-danger btn-sm"
                    onclick="return confirm('Anda yakin ingin menghapus minuman ini?')">
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
</div>

<style>
/* Card Styling */
.card {
  border-radius: 15px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  background-color: #fff;
  padding: 15px;
}

/* Tabel Responsif */
.table-responsive {
  overflow-x: auto;
}

/* Tabel Styling */
.table {
  background-color: #fff;
  font-size: 14px;
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

/* Tombol Aksi */
.btn {
  border-radius: 25px;
  padding: 8px 20px;
  font-size: 14px;
  transition: background-color 0.3s ease, transform 0.2s ease;
}

/* Tombol warna hijau */
.btn-success {
  background-color: #28a745;
  color: #fff;
}

.btn-success:hover {
  background-color: #218838;
}

/* Tombol warna kuning */
.btn-warning {
  background-color: #ffc107;
  color: #fff;
}

.btn-warning:hover {
  background-color: #e0a800;
}

/* Tombol warna merah */
.btn-danger {
  background-color: #dc3545;
  color: #fff;
}

.btn-danger:hover {
  background-color: #c82333;
}

/* Card Header Styling */
.card-header {
  background-color: green;
  color: white;
  padding: 20px;
  border-radius: 10px 10px 0 0;
  margin-bottom: 15px;
}

/* Hover effect for table rows */
.table-hover tbody tr:hover {
  background-color: #f8f9fa;
}

/* Tabel styling untuk cell */
.table td {
  border: 1px solid #ddd;
}

/* Margin tambahan untuk tombol */
.mb-4 {
  margin-bottom: 30px;
}

/* Menambahkan padding lebih pada judul */
h5 {
  padding-bottom: 10px;
}

/* Menambahkan margin-top untuk tabel agar ada jarak */
.mt-4 {
  margin-top: 20px;
}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">