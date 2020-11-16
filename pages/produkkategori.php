<?php
include "lib/config_web.php";
include "lib/koneksi.php";
include "lib/pagination2.php";
?>


<!-- banner -->
	<div class="banner3" id="home1">
		<div class="container">
			<h2>Busana Wanita<span>up to</span> Flat 40% <i>Discount</i></h2>
		</div>
	</div>
<!-- //banner -->

<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Produk</li>
			</ul>
		</div>
	</div>
<!-- //breadcrumbs -->

<!-- dresses -->
	<div class="dresses">
		<div class="container">
			<div class="w3ls_dresses_grids">
				<div class="col-md-4 w3ls_dresses_grid_left">
					<div class="w3ls_dresses_grid_left_grid">
						<h3>Kategori</h3>
						<div class="w3ls_dresses_grid_left_grid_sub">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
							
							  
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab" id="headingTwo">
								  <h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
									  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>Semua Kategori
									</a>
								  </h4>
								</div>
								
								<div id="collapseTwo" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
								   <div class="panel-body panel_text">
									<ul>
									<?php
									$batas=6; 
if(isset($_GET['halaman'])) { $halaman=$_GET['halaman']; 
$posisi=null; } 
if(empty($halaman)){ 
  $posisi=0; 
  $halaman=1; }
  else{ 
    $posisi=($halaman-1)*$batas; 
  }

									$query = mysqli_query($koneksi, "SELECT * FROM kategori");

									while($dataKategori = mysqli_fetch_array($query)){
										?>
										<li><a href="produkbykategori.php?id_kategori=<?php echo $dataKategori['id_kategori'];?>"><?php echo $dataKategori['nama_kategori'];?></a></li>
										<?php } ?>

									</ul>

								  </div>
								</div>
							  </div>
							</div>
							 
							<ul class="panel_bottom">
								<li><a href="produkbykategori.php?id_kategori=<?php echo $dataKategori['id_kategori'];?>"><?php echo $dataKategori['nama_kategori'];?></a></li>
							</ul>
													</div>
					</div>
					
					<div class="w3ls_dresses_grid_left_grid">
						<h3>Tersedia Ukuran</h3>
						<div class="w3ls_dresses_grid_left_grid_sub">
							<div class="ecommerce_color ecommerce_size">
								<ul>
									<li><a>Medium</a></li>
									<li><a>Large</a></li>
									<li><a>Extra Large</a></li>
									<li><a>Small</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 w3ls_dresses_grid_right">
					
					<div class="clearfix"> </div>

					<div class="w3ls_dresses_grid_right_grid2">
						<div class="w3ls_dresses_grid_right_grid2_left">

							<h3>Showing Results: <?php 
$sql_paging = mysqli_query($koneksi, "SELECT * FROM `kategori`"); 
$jmldata = mysqli_num_rows($sql_paging); 
 $id_kategori = $_GET['id_kategori'];
 $jumlah_halaman = ceil($jmldata / $batas); 
 for($i = 1; $i <= $jumlah_halaman; $i++)
  if($i != $halaman) { 
  	
	
  	echo "<a href=?id_kategori=$id_kategori&halaman=$i>$i</a> "; 
  
  } 
  else { 
  	echo "<b>$i</b> "; 
  }
   ?></h3>
						</div>
						<div class="w3ls_dresses_grid_right_grid2_right">
							<select name="select_item" class="select_item">
								<option selected="selected">Default sorting</option>
								<option>Sort by popularity</option>
								<option>Sort by average rating</option>
								<option>Sort by newness</option>
								<option>Sort by price: low to high</option>
								<option>Sort by price: high to low</option>
							</select>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="w3ls_dresses_grid_right_grid3">
					<?php
						$id_kategori = $_GET['id_kategori'];
						$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_kategori='$id_kategori' limit $posisi, $batas");
$no = $posisi+1;
						while($dataProduk = mysqli_fetch_array($query)){
							
							
						?> 

						
						<div class="col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_dresses">
						
							<div class="agile_ecommerce_tab_left dresses_grid">

								<div class="hs-wrapper hs-wrapper2">
									<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
									<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
									<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
									<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
									<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
									<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
									
									<div class="w3_hs_bottom w3_hs_bottom_sub1">
										<ul>
											<li>
												<a href="#" data-toggle="modal" data-target="#myModal<?php echo $dataProduk['id_produk'];?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
											</li>
										</ul>
									</div>
								</div>
								<h5><a href="single.html"><?php echo $dataProduk['nama_produk'];?></a></h5>
								<div class="simpleCart_shelfItem">
									<p><span></span><i>Rp. </i><i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
									<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
								</div>
								
								
							</div>
							
						</div>
						
						<div class="modal video-modal fade" id="myModal<?php echo $dataProduk['id_produk'];?>" tabindex="-1" role="dialog" aria-labelledby="myModal6">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
								</div>
								<section>
									<div class="modal-body">
										<div class="col-md-5 modal_body_left">
											<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
										</div>
										<div class="col-md-7 modal_body_right">
											<h4><?php echo $dataProduk['nama_produk'];?></h4>
											<p><?php echo $dataProduk['deskripsi'];?></p>
											<div class="rating">
												<div class="rating-left">
													<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
												</div>
												<div class="rating-left">
													<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
												</div>
												<div class="rating-left">
													<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
												</div>
												<div class="rating-left">
													<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
												</div>
												<div class="rating-left">
													<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="modal_body_right_cart simpleCart_shelfItem">
												<p><span></span><i>Rp. </i><i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
												<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
											</div>
											<h5>Tersedia Ukuran</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>M</a></li>
												<li><a href="#" class="brown"><span></span>L</a></li>
												<li><a href="#" class="purple"><span></span>XL</a></li>
												<li><a href="#" class="gray"><span></span>S</a></li>
											</ul>
										</div>
										</div>
										<div class="clearfix"> </div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<?php $no++; 
					?>

					<?php } ?>
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
						<div class="clearfix"> </div>
					</div>
					<p>

  </p>

					
				
	
	<div class="w3l_related_products">
		<div class="container">
			<h3>Produk Berkaitan</h3>
			<ul id="flexiselDemo2">	
			<?php
									include "lib/config_web.php";
									include "lib/koneksi.php";

									$query = mysqli_query($koneksi, "SELECT * FROM produk order by rand() limit 8");

									while($dataProduk = mysqli_fetch_array($query)){
										?>		
				<li>
					<div class="w3l_related_products_grid">
						<div class="agile_ecommerce_tab_left dresses_grid">
							<div class="hs-wrapper hs-wrapper3">
								<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
								<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
								<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
								<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
								<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
								<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
								
								<div class="w3_hs_bottom">
									<div class="flex_ecommerce">
										<a href="#" data-toggle="modal" data-target="#myModal8<?php echo $dataProduk['id_produk']?>"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</div>
								</div>
							</div>
							<h5><a href="single.html"><?php echo $dataProduk['nama_produk']; ?></a></h5>
							<div class="simpleCart_shelfItem">
								<p class="flexisel_ecommerce_cart"><span></span><i>Rp. </i> <i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
								<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
							</div>
						</div>
					</div>
					<div class="modal video-modal fade" id="myModal8<?php echo $dataProduk['id_produk']?>" tabindex="-1" role="dialog" aria-labelledby="myModal2">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
							</div>
							<section>
								<div class="modal-body">
									<div class="col-md-5 modal_body_left">
										<img src="file/produk/<?php echo $dataProduk['gambar']; ?>" alt=" " class="img-responsive" />
									</div>
									<div class="col-md-7 modal_body_right">
										<h4><?php echo $dataProduk['nama_produk'];?></h4>
										<p><?php echo $dataProduk['deskripsi'];?></p>
										<div class="rating">
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star-.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="rating-left">
												<img src="assets/frontend/images/star.png" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="modal_body_right_cart simpleCart_shelfItem">
											<p><span></span><i>Rp. </i> <i class="item_price"><?php echo number_format($dataProduk['harga'],2,".",",");?></i></p>
											<p><a class="item_add" href="aksi_keranjang2.php?id_produk=<?php echo $dataProduk['id_produk'];?>&harga=<?php echo $dataProduk['harga'];?>">Masuk Keranjang</a></p>
										</div>
										<h5>Tersedia Ukuran</h5>
										<div class="color-quality">
											<ul>
												<li><a href="#"><span></span>M</a></li>
												<li><a href="#" class="brown"><span></span>L</a></li>
												<li><a href="#" class="purple"><span></span>XL</a></li>
												<li><a href="#" class="gray"><span></span>S</a></li>
											</ul>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</section>
						</div>
					</div>
				</div>
					<?php } ?>
				</li>
				
			</ul>
				<script type="text/javascript">
					$(window).load(function() {
						$("#flexiselDemo2").flexisel({
							visibleItems:4,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
							responsiveBreakpoints: { 
								portrait: { 
									changePoint:480,
									visibleItems: 1
								}, 
								landscape: { 
									changePoint:640,
									visibleItems:2
								},
								tablet: { 
									changePoint:768,
									visibleItems: 3
								}
							}
						});
						
					});
				</script>
				<script type="text/javascript" src="assets/frontend/js/jquery.flexisel.js"></script>
		</div>
	</div>
<!-- //dresses -->