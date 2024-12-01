<!-- File: application/views/sidebar.php -->
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url('assets/image/logoitalian.png'); ?>" class="img-circle" alt="Restaurant Logo">
      </div>
      <div class="pull-left info">
        <p></p>
        <small></small>
      </div>
    </div>

    <ul class="sidebar-menu" data-widget="tree">
      <li class="header"></li>

      <li class="<?php echo ($this->uri->segment(1) == 'dashboard') ? 'active' : ''; ?>">
        <a href="<?php echo base_url('beranda'); ?>">
          <i class="fa fa-home"></i>
          <span>Beranda</span>
        </a>
      </li>

      <li class="treeview <?php echo (in_array($this->uri->segment(1), ['menu', 'kategori'])) ? 'active' : ''; ?>">
        <a href="#">
          <i class="fa fa-book"></i>
          <span>Menu</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('makanan'); ?>"><i class="fa fa-circle-o"></i> Makanan</a></li>
          <li><a href="<?php echo base_url('minuman'); ?>"><i class="fa fa-circle-o"></i> Minuman</a></li>
          <li><a href="<?php echo base_url('dessert'); ?>"><i class="fa fa-circle-o"></i> Dessert</a></li>
          <li><a href="<?php echo base_url('menu'); ?>"><i class="fa fa-circle-o"></i> Semua Menu</a></li>
        </ul>
      </li>



      <li class="<?php echo ($this->uri->segment(1) == 'pengaturan') ? 'active' : ''; ?>">
        <a href="<?php echo base_url('pengaturan'); ?>">
          <i class="fa fa-cog"></i>
          <span>Pengaturan</span>
        </a>
      </li>
    </ul>
  </section>
</aside>

<!-- Tambahkan di application/config/config.php untuk mendukung assets -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.main-sidebar {
  width: 230px;
  background-color: #f8f8f8;
  border-right: 1px solid #e7e7e7;
  position: fixed;
  height: 100%;
  overflow-y: auto;
}

.sidebar-menu {
  list-style: none;
  margin: 0;
  padding: 0;
}

.sidebar-menu>li {
  position: relative;
  margin: 0;
  padding: 0;
}

.sidebar-menu>li>a {
  padding: 12px 15px;
  display: block;
  color: #333;
  text-decoration: none;
}

.sidebar-menu>li.active>a {
  background-color: #f4f4f4;
  color: #333;
}

.sidebar-menu>li>a>.fa {
  margin-right: 10px;
}

.treeview-menu {
  display: none;
  list-style: none;
  padding-left: 15px;
  background-color: #f8f8f8;
}

.treeview.active .treeview-menu {
  display: block;
}
</style>

<script>
// Optional: Tambahkan interaktivitas dengan JavaScript
document.addEventListener('DOMContentLoaded', function() {
  var treeviewItems = document.querySelectorAll('.treeview > a');
  treeviewItems.forEach(function(item) {
    item.addEventListener('click', function(e) {
      e.preventDefault();
      var parentLi = this.parentElement;
      parentLi.classList.toggle('active');
    });
  });
});
</script>