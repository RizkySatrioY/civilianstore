<?php
session_start();
include 'db.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>Civil Store</title>
<link rel="icon" href="images/civilian.jpg">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap1.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

<!-- font-awesome icons -->
<link href="css/font-awesome1.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js1/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js1/move-top.js"></script>
<script type="text/javascript" src="js1/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->

	<div class="header">
		<div class="container">
			<div class="w3l_offers">
				<p>DAPATKAN PENAWARAN MENARIK KHUSUS SEASON INI, PESAN SEKARANG !</p>
			
			</div>
			
			<div class="agile-login">
				<ul>	
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<div class="w3ls_logo_products_left1">
			</div>
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">Civilian</a></h1><br><br><br><br><br>
		<h1 class="heading"> Civil <span>Store</span> </h1>
			</div>
		<div class="w3l_search">
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">	
									<!-- Mega Menu -->
									<li class="dropdown">
									<a href="index.php">Home</b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
													</ul>
												</div>	
												
											</div>
										</ul>
									</li>
									<li><a href="index.php#about">About</b></a></li>
									<li><a href="index.php#products">Product Review</a></li>
									<li><a href="index.php#contact">Contact</a></li>
									<li><a href="upload.php">Konfirmasi Pembayaran</a></li>

								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
<!-- breadcrumbs -->
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Civil Store</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->

	<!-- main-slider -->
		<ul id="demo1">
			<li>
				<img src="images/1.jpg" alt="" />
			</li>
			<li>
				<img src="images/2.jpg" alt="" />
			</li>
			
			<li>
				<img src="images/4.jpg" alt="" />
			</li>

			<li>
				<img src="images/8.jpg" alt="" />
			</li>
			
		</ul>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->
	<div class="top-brands">
		<div class="container">
		<h2>Produk Kami</h2>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="agile-tp">
								<h5>Penawaran Terbaik Event Ini
								</h5>
								</div>
							<div class="agile_top_brands_grids">
							
							<?php 
											$brgs=mysqli_query($conn,"SELECT * from tb_product order by product_id ASC");
											$no=1;
											while($p=mysqli_fetch_array($brgs)){

												?>
								<div class="col-md-4 top_brand_left">
									<div class="hover14 column">
										<div class="agile_top_brand_left_grid">
											<div class="agile_top_brand_left_grid_pos">
											</div>
											<div class="agile_top_brand_left_grid1">
												<figure>
													<div class="snipcart-item block" >
														<div class="snipcart-thumb">
															<a href="barang/<?php echo $p['product_gambar'] ?>"><img src="barang/<?php echo $p['product_gambar'] ?>" width="300px" height="300px" alt=""></a><br>		
            											<h5 class="heading"><span>[Open Pre - Order]</span> </h5>
														<h5 class="heading"> <?php echo $p['product_nama']?></h5>
														<h5 class="heading"><span>Harga :</span> Rp. <?php echo number_format($p['product_harga'])?> </h5>
														</div>
														<div class="snipcart-details top_brand_home_details">
																<fieldset>
																	<a href="detailproduk.php?id=<?php echo $p['product_id']?>" class="btn">Lihat Produk</a>
																</fieldset>
														</div>
													</div>
												</figure>
											</div>
										</div>
									</div>
								</div>
								<?php
											}
								?>
								<div class="clearfix"> </div>
								
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
		<!-- breadcrumbs -->
<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li class="active"></li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<h2>This Is Civilian</h2>
<section class="review" id="store">

<div class="box-container">

<div class="box">
	<div class="icons">
	</div>
   
	<div class="image">
	<img src="images/10.jpg" width="350px" alt="" />
	<img src="images/9.jpg" width="380px" alt="" />
	
	<img src="images/11.jpg" width="350px" alt="" />
	</div>
</div>
</div>
</section>

	</div>
<!-- //top-brands -->



<!-- //footer -->

<!-- //footer -->	

<!-- footer section starts  -->

<section class="footer">

    <div class="share">
        <a href="https://www.instagram.com/civilianengineer_umm/" class="fab fa-instagram"></a>
		<a href="https://wa.me/6281230530792/" class="fab fa-whatsapp"></a>
        
    </div>

    <div class="links">
        <a href="index.php#home">Home</a>
        <a href="index.php#store">Civil Store</a>
        <a href="index.php#products">Product Review</a>
        <a href="index.php#contact">Contact</a>
        <a href="login.php">Login Admin</a>
    </div>

    <div class="credit">Copyright &copy<span>Civilian UMM</span> | All Rights Reserved</div>

</section>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 4000,
				easingType: 'linear' 
				};
			
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- main slider-banner -->
<script src="js1/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>