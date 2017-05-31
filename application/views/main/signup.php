
			<li class="active">Sign Up</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- sign up-page -->
	<div class="login-page about">
		<img class="login-w3img" src="images/img3.jpg" alt="">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Daftarkan akun baru</h3>  
			<div class="login-agileinfo"> 
			
				<form method="post" action="<?php echo base_url("index.php/Welcome/validation"); ?>"> 
				
					<input class="agile-ltext" type="text" name="nama_depan" placeholder="Nama Depan" required="">
					<input class="agile-ltext" type="text" name="nama_belakang" placeholder="Nama Belakang" required="">
					<input class="agile-ltext" type="text" name="telepon" placeholder="Nomor Telepon" required="">
					<input class="agile-ltext" type="email" name="email" placeholder="Email Anda" required="">
					<input class="agile-ltext" type="password" name="kata_sandi" placeholder="Password" required="">
					<input class="agile-ltext" type="password" name="konfirmasi_kata_sandi" placeholder="Konfirmasi Kata Sandi" required="">
					<div class="wthreelogin-text"> 
						<ul> 
							<li>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i> 
									<span> Saya menyetujui semua persyaratan</span> 
								</label> 
							</li> 
						</ul>
						<div class="clearfix"> </div>
					</div>   
					<input type="submit" value="Daftar">
				</form>
				<p>Sudah Punya Akun?  <a href="<?php echo base_url("index.php/Welcome/login"); ?>"> Masuk Sekarang!</a></p> 
			</div>	 
		</div>
	</div>
	<!-- //sign up-page -->  