<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h3>Newsletter</h3>
				<p>Dapatkan informasi terbaru tentang produk kami.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Kontak</h3>
					<p>Bila ada hal yang ingin ditanyakan seputar produk kami, bisa melalui:</p>
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Condong Catur, Sleman <span>Yogyakarta.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">shafiyya@shafiyyahfashion.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>(+62)8999558095</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Informasi</h3>
					<ul class="info"> 
						<li><a href="about.html">Tentang Kami</a></li>
						<li><a href="mail.html">Hubungi Kami</a></li>
						<li><a href="faq.html">FAQ's</a></li>
						<li><a href="products.html">Produk Spesial</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Kategori</h3>
					<ul class="info"> 
					<?php
									

									$query = mysqli_query($koneksi, "SELECT * FROM kategori");

									while($dataProduk = mysqli_fetch_array($query)){
										?> 
											
						<li><a href="produkbykategori.php?id_kategori=<?php echo $dataProduk['id_kategori'];?>"><?php echo $dataProduk['nama_kategori'];?></a></li>
						<?php } ?>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profil</h3>
					<ul class="info"> 
						<li><a href="products.html">Shafiyyah Fashion</a></li>
						
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="assets/frontend/images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; 2016 <a href="index.php">Shafiyyah Fashion</a>. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
</body>
</html>