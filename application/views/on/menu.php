
			<li class="active">Menu</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- products -->
	<div class="products">	 
		<div class="container">
			<div class="col-md-9 product-w3ls-right"> 
				<div class="product-top">
					<h4>Menu Makanan</h4> 
					<div class="clearfix"> </div>
				</div>
				
				<div class="products-row">
				<?php
            		 foreach ($nasi as $n) {
                ?>
					<div class="col-xs-6 col-sm-4 product-grids">
						<div class="flip-container">
							<div class="flipper agile-products">
							
								<div class="front"> 
									<img src="<?php echo base_url();?>assets/images/g6.jpg" class="img-responsive" alt="img">
									<div class="agile-product-text">              
										<h5><?= $n['jenis_menu']?></h5>  
									</div> 
								</div>
								<div class="back">
									<h4><?= $n['jenis_menu']?></h4>
									<p><?= $n['deskripsi']?></p>
									<h6><sup>Rp</sup><?= $n['harga']?></h6>
									<form action="<?php echo base_url("index.php/Member/add_to_cart"); ?>" method="post">
										<input type="hidden" name="w3ls_item" value="<?= $n['jenis_menu']?>"> 
										<input type="hidden" name="amount" value="<?= $n['harga']?>"> 
										<?=anchor('Member/add_to_cart/' . $n['id_nasi'], 'Tambahkan' , [
											'class'	=> 'btn btn-primary',
											'role'	=> 'button'
										])?>
									</form>
								</div>
							</div>
						</div> 
					</div> 
					<?php } ?>
					<div class="clearfix"> </div>
				</div>

			</div>
			<div class="clearfix"> </div> 
		</div>
	</div>

	<!-- //products --> 
	<div class="container"> 
		<div class="w3agile-deals prds-w3text"> 
			<h5>Padamkan Dengan Pemadam Kelaparan</h5>
		</div>
	</div>