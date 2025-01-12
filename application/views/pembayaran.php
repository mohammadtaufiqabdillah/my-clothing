<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-warning">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h5>Total Belanja Anda: Rp. " . number_format($grand_total, 0, ',', '.');

                    ?>
                </div><br><br>
                <h3>Masukan Alamat Pengiriman dan Pembayaran</h3>

                <form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="text" name="no_telepon" placeholder="Nomor Telepon Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Jasa Pengiriman</label>
                        <select class="form-control">
                            <option>Pilihan</option>
                            <option>JNE</option>
                            <option>JNT</option>
                            <option>Si Cepat</option>
                            <option>Lala Move</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Pilih Bank</label>
                        <select class="form-control">
                            <option>Pilihan</option>
                            <option>BCA - XXXXXXXX</option>
                            <option>BNI - XXXXXXXX</option>
                            <option>BRI - XXXXXXXX</option>
                            <option>Mandiri - XXXXXXXX</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-sm btn-success">Pesan</button>
                </form>
                <?php
                } else {
                    echo "<H4>Keranjang Belanja Anda Masih Kosong :(";
                }
                ?>
            <div class="col-md-1"></div>
        </div>
    </div>