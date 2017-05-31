
			<li class="active">Hubungi Kami</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- contact -->
	<div id="contact" class="contact cd-section">
		<div class="container">
			<h3 class="w3ls-title">Hubungi Kami</h3>
			<p class="w3lsorder-text">Berikan kami saran dan kritik anda.</p> 
			<div class="contact-row agileits-w3layouts">  
				<div class="col-xs-6 col-sm-6 contact-w3lsleft">
					<div class="contact-grid agileits">
						<h4>Kirim saran dan kritik anda</h4>
						<form action="<?php echo base_url("index.php/Member/kritik"); ?>" method="post"> 
							<input type="text" name="ib_nama" placeholder="Nama" required="">
							<input type="email" name="ib_email" placeholder="Email" required=""> 
							<input type="text" name="ib_telfon" placeholder="Nomor Telepon" required="">
							<textarea name="ib_pesan" placeholder="Tulis Pesan" required=""></textarea>
							<input type="submit" value="Submit" >
						</form> 
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 contact-w3lsright">
					<h6><span>Halo </span>Kepuasan pelanggan adalah prioritas kami. </h6>
					<div class="address-row">
						<div class="col-xs-2 address-left">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 address-right">
							<h5>Kunjungi</h5>
							<p>Keputih Timur Pompa Air Nomor 2A</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row w3-agileits">
						<div class="col-xs-2 address-left">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 address-right">
							<h5>Email</h5>
							<p><a href="mailto:info@example.com">pemadamkelaparan@gmail.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-row">
						<div class="col-xs-2 address-left">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-xs-10 address-right">
							<h5>Telepon</h5>
							<p>+62 878 5563 2901 </p>
						</div>
						<div class="clearfix"> </div>
					</div>  
				</div>
				<div class="clearfix"> </div>
			</div>	
		</div>	
		<!-- map -->
		<div class="map agileits">
			
		</div>
		<!-- //map --> 
	</div>