
			<li class="active">Detail Pengiriman</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- sign up-page -->
	<div class="login-page about">
		
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
        </div>
        </div>
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Alamat Pengiriman</h3>  
			<div class="login-agileinfo"> 
			
				<form method="post" action="<?php echo base_url("index.php/Member/inputOrder"); ?>"> 
					<input class="agile-ltext" type="text" name="nama_depan" value="<?php echo $this->session->userdata("nama_depan"); ?>" disabled="">
					
					<input class="agile-ltext" type="text" name="alamat" placeholder="Alamat Lengkap" required="">
					<input class="agile-ltext" type="text" name="tanggalkirim" placeholder="Tanggal Kirim (DD/MM/YYYY)" required="">
					<input class="agile-ltext" type="text" name="jamkirim" placeholder="Jam Kirim (24 jam)" required="">
					<div class="wthreelogin-text"> 
						<div class="clearfix"> </div>
					</div>   
					<input type="submit" value="Lanjutkan">
				</form>
			</div>	 
		</div>
	</div>
	<!-- //sign up-page -->  