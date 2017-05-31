<div class="chit-chat-layer1">
    <div>
        <div class="work-progres">
            <div class="chit-chat-heading">
                HISTORY PENJUALAN

            </div>
            <br>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Pemesan</th>     
                            <th>Tanggal Pesan</th>                             
                            <th>Tanggal Kirim</th>
                            <th>Pesanan</th>       
                            <th>Jumlah Order</th>
                            <th>Total Harga</th>
                            <th>Alamat Kirim</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($data as $x) { ?>
                        <tr>
                            <td><?= $x['emailuser'] ?></td>
                            <td><?= $x['tanggal_pesan'] ?></td>
                            <td><?= $x['tanggal_kirim'] ?></td>
                            <td><?= $x['jenis_menu'] ?></td>
                            <td><?= $x['jumlah'] ?></td>
                            <td>Rp <?= $x['jumlah'] * 10000 ?></td>
                            <td><?= $x['alamat_kirim'] ?></td>
                        </tr>
                        <?php } ?>                              
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<div class="clearfix"> </div>

<!--inner block end here-->
