
            <li class="active">Keranjang</li>
        </ol>
    </div>
 <div class="about">
        <div class="container"> 
            
        
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jenis Menu</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    
                    $i=0;
                    foreach ($this->cart->contents() as $items) : 
                    $i++;
                ?>
                 <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $items['name'] ?></td>
                    <td><?= $items['qty'] ?></td>
                    <td align="right"><?= number_format($items['price'],0,',','.') ?></td>
                    <td align="right"><?= number_format($items['subtotal'],0,',','.') ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            <tfoot>
                <tr>
                    <td align="right" colspan="4">Total </td>
                    <td align="right"><?= number_format($this->cart->total(),0,',','.'); ?></td>
                </tr>
            </tfoot>
        </table>
        <div align="center">
            <?= anchor('Member/clear_cart','Kosongkan Keranjang',['class'=>'btn btn-danger']) ?> 
            <?= anchor('Member/menu','Lanjut Belanja',['class'=>'btn btn-primary']) ?> 
            <?= anchor('Member/checkout','Lanjutkan',['class'=>'btn btn-success']) ?>
        </div>
        </div>
        </div>