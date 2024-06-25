<div style="padding-top: 100px">
    <!-- Content Row -->
    <div style="text-align: center">
        <div style="text-align: center">
            <h1 style="text-align: center">Selamat Datang
                <?php echo $this->session->userdata('username') ?>
            </h1>

        </div>
        <div style="padding-top: 25px"> <a href="<?=
            base_url('admin/data_barang/') ?>" class="badge badge-info"><i class="fas fa-edit"></i>Data Barang</a>
            <a href="<?=
                base_url('admin/invoice/') ?>" class="badge badge-danger"><i class="fas fa-edit"></i>Data Pemesanan</a>
        </div>
        <!-- Content Row -->
    </div>
</div>