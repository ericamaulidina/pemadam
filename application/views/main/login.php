
			<li class="active">Login</li>
		</ol>
	</div>
	<!-- //breadcrumb -->
	<!-- login-page -->
	<div class="login-page about">
		<div class="container"> 
			<h3 class="w3ls-title w3ls-title1">Masuk ke Akun Anda</h3>  
			<div class="login-agileinfo"> 
				<form method="post" action="<?php echo base_url("index.php/Welcome/masuk"); ?>">  
					<input class="agile-ltext" type="email" name="email" placeholder="Email" required="">
					<input class="agile-ltext" type="password" name="kata_sandi" placeholder="Kata Sandi" required="">
					<div class="wthreelogin-text"> 
						<div class="clearfix"> </div>
					</div>   
					<input type="submit" value="MASUK">
				</form>
				<p>Belum punya akun? <a href="<?php echo base_url("index.php/Welcome/signup"); ?>"> Daftar Sekarang!</a></p> 
			</div>	 
		</div>
	</div>