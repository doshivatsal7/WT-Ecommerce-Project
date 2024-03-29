<?php
include('functions.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<title>Elite Shoppy</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style-default.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/backend.js"></script>
<style>
	input[type="button"]:disabled {
    	color: #bbb;
	}
</style>
</head>
<!-- php header include -->


<?php
include('header.php');
?>

<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Great discounts on all products</p>
						<a class="hvr-outline-out button2" href="discounts.php?disc_range=50">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Get Your Own <span>Seller PAge</span></h3>
						<p>Your entire collection at 1 place</p>
						<a class="hvr-outline-out button2" href="#" onclick="showSellerPageModal()">Get Started </a>
					</div>
				</div>
			</div>
			<div class="item item3"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Sale on <span>Bags</span></h3>
						<p>Buy trendy bags at lowest prices</p>
						<a class="hvr-outline-out button2" href="discounts.php?category=Bag&disc_range=50">Shop Now </a>
					</div>
				</div>
			</div> 
			<div class="item item4"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Sale on <span>Footwear</span></h3>
						<p>Latest trends at lowest prices</p>
						<a class="hvr-outline-out button2" href="discounts.php?category=Footwear&disc_range=50">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item5"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Sale on <span>Watches</span></h3>
						<p>View our finest time pieces</p>
						<a class="hvr-outline-out button2" href="discounts.php?category=Watch&disc_range=50">Shop Now </a>
					</div>
				</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
    </div> 

  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info">What's <span>Trending</span></h3>
	
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="discounts.php?category=Bag&disc_range=50">
			   <div class="bb-left-agileits-w3layouts-inner grid">
					<figure class="effect-roxy">
							<img src="images/banner_bags.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 55%</p>
							</figcaption>			
						</figure>
			    </div>
			</a>
		</div>
		<div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
		      <a href="discounts.php?category=Watch&disc_range=50">
		       <div class="bb-middle-agileits-w3layouts grid">
			           <figure class="effect-roxy">
							<img src="images/banner_watch.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 55%</p>
							</figcaption>			
						</figure>
		        </div>
				</a>
				<a href="discounts.php?category=Footwear&disc_range=50">
		      <div class="bb-middle-agileits-w3layouts forth grid">
						<figure class="effect-roxy">
							<img src="images/bottom4.jpg" alt=" " class="img-responsive">
							<figcaption>
								<h3><span>S</span>ale </h3>
								<p>Upto 65%</p>
							</figcaption>		
						</figure>
					</div>
					</a>
		<div class="clearfix"></div>
	</div>
	</div>
    </div>



<!-- /new_arrivals --> 
	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li> Watches</li>
							<li> Footwear</li>
							<li> Bags</li>
							<li>All</li>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
							

							<?php
							if(isset($_SESSION['user_id'])) {
								$sql = "SELECT * FROM product NATURAL JOIN watches WHERE watches.stock !='0' ORDER BY product_id DESC";
								$result = mysqli_query($conn, $sql);
								$count = 0;

								$item_count = mysqli_num_rows($result);

								if ($item_count==0) {
									echo "<p style='text-align: center;'><b>No products to display</b></p>";
								} else {
									while (($row = mysqli_fetch_assoc($result)) && ($count<4) ) {
										$pid = $row['product_id'];
										$imagesql = "SELECT * FROM images WHERE images.product_id='$pid' AND images.image_location LIKE '%primary%'";
										$imageresult = mysqli_query($conn, $imagesql);
										$imagerow = mysqli_fetch_assoc($imageresult);
										$size="NA";
										echo '<!-- Item start -->
											<div class="col-md-3 product-men">
												<div class="men-pro-item simpleCart_shelfItem">
													<div class="men-thumb-item" onclick="gotoprod('.$pid.');">
														<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-front">
														<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-back">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="single.php?pid='.$pid.'" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
															
													</div>
													<div class="item-info-product ">
														<h4><a href="single.php?pid='.$pid.'">'.$row['name'].'</a></h4>';
														if($row['discount'] != NULL) {
															$new_price=$row['price'] - ($row['discount']*$row['price']);
															echo'<div class="info-product-price">
																<span class="item_price">&#8377;'.$new_price.'</span>
																<del>₹ '.$row['price'].'</del>
																</div>';
														}
														else {
															echo'<div class="info-product-price">
																<span class="item_price">&#8377;'.$row['price'].'</span>
																</div>';
														}
														echo'
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
																			<form action="#" method="GET">
																				<fieldset>
																					<input type="hidden" name="cmd" value="_cart" />
																					<input type="hidden" name="add" value="1" />
																					<input type="hidden" name="business" value=" " />
																					<input type="hidden" name="item_name" value="'.$row['brand'].' '.$row['name'].'" />
																					<input type="hidden" name="product_id" value="'.$row['product_id'].'" />
																					<input type="hidden" name="amount" value="'.$row['price'].'" />
																					<input type="hidden" name="discount_amount" value="0.00" />
																					<input type="hidden" name="currency_code" value="INR" />
																					<input type="hidden" name="return" value=" " />
																					<input type="hidden" name="cancel_return" value=" " />
																					<input type="button" name="submit" value="Add to cart" class="button" onclick="add_to_cart(\''.$pid.'\',\''.$_SESSION['user_id'].'\',\''.$size.'\');" />
																				</fieldset>
																			</form>
																		</div>							
													</div>
												</div>
											</div>
											<!-- Item end -->';

										$count++;
									}
								}
							}
							else {
								$sql = "SELECT * FROM product NATURAL JOIN watches WHERE watches.stock !='0' ORDER BY product_id DESC";
								$result = mysqli_query($conn, $sql);
								$count = 0;

								$item_count = mysqli_num_rows($result);

								if ($item_count==0) {
									echo "<p style='text-align: center;'><b>No products to display</b></p>";
								} else {
									while (($row = mysqli_fetch_assoc($result)) && ($count<4) ) {
										$pid = $row['product_id'];
										$imagesql = "SELECT * FROM images WHERE images.product_id='$pid' AND images.image_location LIKE '%primary%'";
										$imageresult = mysqli_query($conn, $imagesql);
										$imagerow = mysqli_fetch_assoc($imageresult);
										echo '<!-- Item start -->
											<div class="col-md-3 product-men">
												<div class="men-pro-item simpleCart_shelfItem">
													<div class="men-thumb-item" onclick="gotoprod('.$pid.');">
														<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-front">
														<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-back">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="single.php?pid='.$pid.'" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
															
													</div>
													<div class="item-info-product ">
														<h4><a href="single.php?pid='.$pid.'">'.$row['name'].'</a></h4>';
														if($row['discount'] != NULL) {
															$new_price=$row['price'] - ($row['discount']*$row['price']);
															echo'<div class="info-product-price">
																<span class="item_price">&#8377;'.$new_price.'</span>
																<del>₹ '.$row['price'].'</del>
																</div>';
														}
														else {
															echo'<div class="info-product-price">
																<span class="item_price">&#8377;'.$row['price'].'</span>
																</div>';
														}
														echo'
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
																			<form action="#" method="GET">
																				<fieldset>
																					<input type="hidden" name="cmd" value="_cart" />
																					<input type="hidden" name="add" value="1" />
																					<input type="hidden" name="business" value=" " />
																					<input type="hidden" name="item_name" value="'.$row['brand'].' '.$row['name'].'" />
																					<input type="hidden" name="product_id" value="'.$row['product_id'].'" />
																					<input type="hidden" name="amount" value="'.$row['price'].'" />
																					<input type="hidden" name="discount_amount" value="0.00" />
																					<input type="hidden" name="currency_code" value="INR" />
																					<input type="hidden" name="return" value=" " />
																					<input type="hidden" name="cancel_return" value=" " />
																					<input type="button" name="submit" value="Add to cart" class="button" data-toggle="modal" data-target="#myModal2"/>
																				</fieldset>
																			</form>
																		</div>							
													</div>
												</div>
											</div>
											<!-- Item end -->';

										$count++;
									}
								}
							}
							?>
							<!-- Item end -->
                            
							
							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->
						<!--/tab_two-->
						<div class="tab2">

						<?php
						if(isset($_SESSION['user_id'])) {
								$sql = "SELECT DISTINCT product_id,name,price,discount,brand FROM product NATURAL JOIN footwear NATURAL JOIN footwear_size WHERE footwear_size.stock !='0' ORDER BY product_id DESC";
								$result = mysqli_query($conn, $sql);
								$count = 0;

								$item_count = mysqli_num_rows($result);

								if ($item_count==0) {
									echo "<p style='text-align: center;'><b>No products to display</b></p>";
								} else {
									while (($row = mysqli_fetch_assoc($result)) && ($count<4) ) {
										$pid = $row['product_id'];
										$imagesql = "SELECT * FROM images WHERE images.product_id='$pid' AND images.image_location LIKE '%primary%'";
										$imageresult = mysqli_query($conn, $imagesql);
										$imagerow = mysqli_fetch_assoc($imageresult);
										echo '<!-- Item start -->
											<div class="col-md-3 product-men">
												<div class="men-pro-item simpleCart_shelfItem">
													<div class="men-thumb-item" onclick="gotoprod('.$pid.');">
														<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-front">
														<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-back">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="single.php?pid='.$pid.'" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
															
													</div>
													<div class="item-info-product ">
														<h4><a href="single.php?pid='.$pid.'">'.$row['name'].'</a></h4>';
														if($row['discount'] != NULL) {
															$new_price=$row['price'] - ($row['discount']*$row['price']);
															echo'<div class="info-product-price">
																<span class="item_price">&#8377;'.$new_price.'</span>
																<del>₹ '.$row['price'].'</del>
																</div>';
														}
														else {
															echo'<div class="info-product-price">
																<span class="item_price">&#8377;'.$row['price'].'</span>
																</div>';
														}
														echo'
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
																			<form action="functions.php" method="GET">
																				
																					<input type="hidden" name="cmd" value="_cart" />
																					<input type="hidden" name="add" value="1" />
																					<input type="hidden" name="business" value=" " />
																					<input type="hidden" name="item_name" value="'.$row['brand'].' '.$row['name'].'" />
																					<input type="hidden" name="product_id" value="'.$row['product_id'].'" />
																					<input type="hidden" name="amount" value="'.$row['price'].'" />
																					<input type="hidden" name="discount_amount" value="0.00" />
																					<input type="hidden" name="currency_code" value="INR" />
																					<input type="hidden" name="return" value=" " />
																					<input type="hidden" name="cancel_return" value=" " />
																					<input type="hidden" name="pid" value="'.$pid.'" />
																					<input type="submit" name="add_to_cart_footwear" value="Add to cart" class="button" />
																				
																			</form>
																		</div>
													</div>
												</div>
											</div>
											<!-- Item end -->';

										$count++;
									}
								}
							}
							else {
								$sql = "SELECT DISTINCT product_id,name,price,discount,brand FROM product NATURAL JOIN footwear NATURAL JOIN footwear_size WHERE footwear_size.stock !='0' ORDER BY product_id DESC";
								$result = mysqli_query($conn, $sql);
								$count = 0;

								$item_count = mysqli_num_rows($result);

								if ($item_count==0) {
									echo "<p style='text-align: center;'><b>No products to display</b></p>";
								} else {
									while (($row = mysqli_fetch_assoc($result)) && ($count<4) ) {
										$pid = $row['product_id'];
										$imagesql = "SELECT * FROM images WHERE images.product_id='$pid' AND images.image_location LIKE '%primary%'";
										$imageresult = mysqli_query($conn, $imagesql);
										$imagerow = mysqli_fetch_assoc($imageresult);
										echo '<!-- Item start -->
											<div class="col-md-3 product-men">
												<div class="men-pro-item simpleCart_shelfItem">
													<div class="men-thumb-item" onclick="gotoprod('.$pid.');">
														<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-front">
														<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-back">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="single.php?pid='.$pid.'" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
															
													</div>
													<div class="item-info-product ">
														<h4><a href="single.php?pid='.$pid.'">'.$row['name'].'</a></h4>';
														if($row['discount'] != NULL) {
															$new_price=$row['price'] - ($row['discount']*$row['price']);
															echo'<div class="info-product-price">
																<span class="item_price">&#8377;'.$new_price.'</span>
																<del>₹ '.$row['price'].'</del>
																</div>';
														}
														else {
															echo'<div class="info-product-price">
																<span class="item_price">&#8377;'.$row['price'].'</span>
																</div>';
														}
														echo'
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
																			<form action="#" method="GET">
																				<fieldset>
																					<input type="hidden" name="cmd" value="_cart" />
																					<input type="hidden" name="add" value="1" />
																					<input type="hidden" name="business" value=" " />
																					<input type="hidden" name="item_name" value="'.$row['brand'].' '.$row['name'].'" />
																					<input type="hidden" name="product_id" value="'.$row['product_id'].'" />
																					<input type="hidden" name="amount" value="'.$row['price'].'" />
																					<input type="hidden" name="discount_amount" value="0.00" />
																					<input type="hidden" name="currency_code" value="INR" />
																					<input type="hidden" name="return" value=" " />
																					<input type="hidden" name="cancel_return" value=" " />
																					<input type="button" name="submit" value="Add to cart" class="button" data-toggle="modal" data-target="#myModal2"/>
																				</fieldset>
																			</form>
																		</div>
																							
													</div>
												</div>
											</div>
											<!-- Item end -->';

										$count++;
									}
								}
							}
							?>


						<div class="clearfix"></div>
					</div>
				 <!--//tab_two-->
					<div class="tab3">
								
					
						<?php
						if(isset($_SESSION['user_id'])) {
								$sql = "SELECT * FROM product NATURAL JOIN bags WHERE bags.stock !='0' ORDER BY product_id DESC";
								$result = mysqli_query($conn, $sql);
								$count = 0;
								$item_count = mysqli_num_rows($result);
								if ($item_count==0) {
									echo "<p style='text-align: center;'><b>No products to display</b></p>";
								} else {
									while (($row = mysqli_fetch_assoc($result)) && ($count<4)) {
										$pid = $row['product_id'];
										$imagesql = "SELECT * FROM images WHERE images.product_id='$pid' AND images.image_location LIKE '%primary%'";
										$imageresult = mysqli_query($conn, $imagesql);
										$imagerow = mysqli_fetch_assoc($imageresult);
										$size = 'NA';
										echo '<!-- Item start -->
											<div class="col-md-3 product-men">
												<div class="men-pro-item simpleCart_shelfItem">
													<div class="men-thumb-item" onclick="gotoprod('.$pid.');">
														<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-front">
														<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-back">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="single.php?pid='.$pid.'" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
															
													</div>
													<div class="item-info-product ">
														<h4><a href="single.phppid='.$pid.'">'.$row['name'].'</a></h4>';
														if($row['discount'] != NULL) {
															$new_price=$row['price'] - ($row['discount']*$row['price']);
															echo'<div class="info-product-price">
																<span class="item_price">&#8377;'.$new_price.'</span>
																<del>₹ '.$row['price'].'</del>
																</div>';
														}
														else {
															echo'<div class="info-product-price">
																<span class="item_price">&#8377;'.$row['price'].'</span>
																</div>';
														}
														echo'
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
																			<form action="#" method="GET">
																				<fieldset>
																					<input type="hidden" name="cmd" value="_cart" />
																					<input type="hidden" name="add" value="1" />
																					<input type="hidden" name="business" value=" " />
																					<input type="hidden" name="item_name" value="'.$row['brand'].' '.$row['name'].'" />
																					<input type="hidden" name="product_id" value="'.$row['product_id'].'" />
																					<input type="hidden" name="amount" value="'.$row['price'].'" />
																					<input type="hidden" name="discount_amount" value="0.00" />
																					<input type="hidden" name="currency_code" value="INR" />
																					<input type="hidden" name="return" value=" " />
																					<input type="hidden" name="cancel_return" value=" " />
																					<input type="button" name="submit" value="Add to cart" class="button" onclick="add_to_cart(\''.$pid.'\',\''.$_SESSION['user_id'].'\',\''.$size.'\');" />
																				</fieldset>
																			</form>
																		</div>
																							
													</div>
												</div>
											</div>
											<!-- Item end -->';

										$count++;
									}
								}
							}
							else {
								$sql = "SELECT * FROM product NATURAL JOIN bags WHERE bags.stock !='0' ORDER BY product_id DESC";
								$result = mysqli_query($conn, $sql);
								$count=0;
								$item_count = mysqli_num_rows($result);
								if ($item_count==0) {
									echo "<p style='text-align: center;'><b>No products to display</b></p>";
								} else {
									while (($row = mysqli_fetch_assoc($result)) && ($count<4)) {
										$pid = $row['product_id'];
										$imagesql = "SELECT * FROM images WHERE images.product_id='$pid' AND images.image_location LIKE '%primary%'";
										$imageresult = mysqli_query($conn, $imagesql);
										$imagerow = mysqli_fetch_assoc($imageresult);
										echo '<!-- Item start -->
											<div class="col-md-3 product-men">
												<div class="men-pro-item simpleCart_shelfItem">
													<div class="men-thumb-item" onclick="gotoprod('.$pid.');">
														<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-front">
														<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-back">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="single.php?pid='.$pid.'" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
															
													</div>
													<div class="item-info-product ">
														<h4><a href="single.phppid='.$pid.'">'.$row['name'].'</a></h4>';
														if($row['discount'] != NULL) {
															$new_price=$row['price'] - ($row['discount']*$row['price']);
															echo'<div class="info-product-price">
																<span class="item_price">&#8377;'.$new_price.'</span>
																<del>₹ '.$row['price'].'</del>
																</div>';
														}
														else {
															echo'<div class="info-product-price">
																<span class="item_price">&#8377;'.$row['price'].'</span>
																</div>';
														}
														echo'
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
																			<form action="#" method="GET">
																				<fieldset>
																					<input type="hidden" name="cmd" value="_cart" />
																					<input type="hidden" name="add" value="1" />
																					<input type="hidden" name="business" value=" " />
																					<input type="hidden" name="item_name" value="'.$row['brand'].' '.$row['name'].'" />
																					<input type="hidden" name="product_id" value="'.$row['product_id'].'" />
																					<input type="hidden" name="amount" value="'.$row['price'].'" />
																					<input type="hidden" name="discount_amount" value="0.00" />
																					<input type="hidden" name="currency_code" value="INR" />
																					<input type="hidden" name="return" value=" " />
																					<input type="hidden" name="cancel_return" value=" " />
																					<input type="button" name="submit" value="Add to cart" class="button" data-toggle="modal" data-target="#myModal2"/>
																				</fieldset>
																			</form>
																		</div>
																							
													</div>
												</div>
											</div>
											<!-- Item end -->';

										$count++;
									}
								}
							}
							?>


							<div class="clearfix"></div>
						</div>


					<div class="tab4">
						<?php
						if(isset($_SESSION['user_id'])) {
								$sql = "SELECT * FROM product ORDER BY product_id DESC";
								$result = mysqli_query($conn, $sql);
								$count=0;
								$item_count = mysqli_num_rows($result);
								if ($item_count==0) {
									echo "<p style='text-align: center;'><b>No products to display</b></p>";
								} else {
									while (($row = mysqli_fetch_assoc($result)) && ($count<4)) {
										$pid = $row['product_id'];
										if($row['category'] == 'bag') {
											$sql_bag = "SELECT * FROM bags WHERE bags.product_id='$pid'";
											$result_bag = mysqli_query($conn, $sql_bag);
											$result_row = mysqli_fetch_assoc($result_bag);
											if($result_row['stock'] != 0) {
												$imagesql = "SELECT * FROM images WHERE images.product_id='$pid' AND images.image_location LIKE '%primary%'";
												$imageresult = mysqli_query($conn, $imagesql);
												$imagerow = mysqli_fetch_assoc($imageresult);
												echo '<!-- Item start -->
												<div class="col-md-3 product-men">
												<div class="men-pro-item simpleCart_shelfItem">
												<div class="men-thumb-item" onclick="gotoprod('.$pid.');">
												<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-front">
												<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-back">
												<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
												<a href="single.php?pid='.$pid.'" class="link-product-add-cart">Quick View</a>
												</div>
												</div>
												<span class="product-new-top">New</span>

												</div>
												<div class="item-info-product ">
												<h4><a href="single.php?pid='.$pid.'">'.$row['name'].'</a></h4>';
												if($row['discount'] != NULL) {
												$new_price=$row['price'] - ($row['discount']*$row['price']);
												echo'<div class="info-product-price">
												<span class="item_price">&#8377;'.$new_price.'</span>
												<del>₹ '.$row['price'].'</del>
												</div>';
												}
												else {
												echo'<div class="info-product-price">
												<span class="item_price">&#8377;'.$row['price'].'</span>
												</div>';
												}
												echo'
												<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
												<form action="#" method="GET">
												<fieldset>
												<input type="hidden" name="cmd" value="_cart" />
												<input type="hidden" name="add" value="1" />
												<input type="hidden" name="business" value=" " />
												<input type="hidden" name="item_name" value="'.$row['brand'].' '.$row['name'].'" />
												<input type="hidden" name="product_id" value="'.$row['product_id'].'" />
												<input type="hidden" name="amount" value="'.$row['price'].'" />
												<input type="hidden" name="discount_amount" value="0.00" />
												<input type="hidden" name="currency_code" value="INR" />
												<input type="hidden" name="return" value="10" />
												<input type="hidden" name="cancel_return" value=" " />
												<input type="button" name="submit" value="Add to cart" class="button" onclick="add_to_cart(\''.$pid.'\',\''.$_SESSION['user_id'].'\');" />
												</fieldset>
												</form>
												</div>

												</div>
												</div>
												</div>
												<!-- Item end -->';

												$count++;
											}
										}
									else if ($row['category'] == 'watch') {
										$sql_watch = "SELECT * FROM watches WHERE watches.product_id='$pid'";
										$result_watch = mysqli_query($conn, $sql_watch);
										$result_row = mysqli_fetch_assoc($result_watch);
										if($result_row['stock'] != 0) {
											$imagesql = "SELECT * FROM images WHERE images.product_id='$pid' AND images.image_location LIKE '%primary%'";
											$imageresult = mysqli_query($conn, $imagesql);
											$imagerow = mysqli_fetch_assoc($imageresult);
											echo '<!-- Item start -->
											<div class="col-md-3 product-men">
											<div class="men-pro-item simpleCart_shelfItem">
											<div class="men-thumb-item" onclick="gotoprod('.$pid.');">
											<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-front">
											<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-back">
											<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
											<a href="single.php?pid='.$pid.'" class="link-product-add-cart">Quick View</a>
											</div>
											</div>
											<span class="product-new-top">New</span>

											</div>
											<div class="item-info-product ">
											<h4><a href="single.php?pid='.$pid.'">'.$row['name'].'</a></h4>';
											if($row['discount'] != NULL) {
											$new_price=$row['price'] - ($row['discount']*$row['price']);
											echo'<div class="info-product-price">
											<span class="item_price">&#8377;'.$new_price.'</span>
											<del>₹ '.$row['price'].'</del>
											</div>';
											}
											else {
											echo'<div class="info-product-price">
											<span class="item_price">&#8377;'.$row['price'].'</span>
											</div>';
											}
											echo'
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
											<form action="#" method="GET">
											<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="'.$row['brand'].' '.$row['name'].'" />
											<input type="hidden" name="product_id" value="'.$row['product_id'].'" />
											<input type="hidden" name="amount" value="'.$row['price'].'" />
											<input type="hidden" name="discount_amount" value="0.00" />
											<input type="hidden" name="currency_code" value="INR" />
											<input type="hidden" name="return" value="10" />
											<input type="hidden" name="cancel_return" value=" " />
											<input type="button" name="submit" value="Add to cart" class="button" onclick="add_to_cart(\''.$pid.'\',\''.$_SESSION['user_id'].'\');" />
											</fieldset>
											</form>
											</div>

											</div>
											</div>
											</div>
											<!-- Item end -->';

											$count++;
										}
									}
									else if ($row['category'] == 'footwear') {
										$sql_footwear = "SELECT * FROM footwear NATURAL JOIN footwear_size WHERE product_id='$pid'";
										$result_footwear = mysqli_query($conn, $sql_footwear);
										$result_row = mysqli_fetch_assoc($result_footwear);
										if($result_row['stock'] != 0) {
											$imagesql = "SELECT * FROM images WHERE images.product_id='$pid' AND images.image_location LIKE '%primary%'";
											$imageresult = mysqli_query($conn, $imagesql);
											$imagerow = mysqli_fetch_assoc($imageresult);
											echo '<!-- Item start -->
											<div class="col-md-3 product-men">
											<div class="men-pro-item simpleCart_shelfItem">
											<div class="men-thumb-item" onclick="gotoprod('.$pid.');">
											<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-front">
											<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-back">
											<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
											<a href="single.php?pid='.$pid.'" class="link-product-add-cart">Quick View</a>
											</div>
											</div>
											<span class="product-new-top">New</span>

											</div>
											<div class="item-info-product ">
											<h4><a href="single.php?pid='.$pid.'">'.$row['name'].'</a></h4>';
											if($row['discount'] != NULL) {
											$new_price=$row['price'] - ($row['discount']*$row['price']);
											echo'<div class="info-product-price">
											<span class="item_price">&#8377;'.$new_price.'</span>
											<del>₹ '.$row['price'].'</del>
											</div>';
											}
											else {
											echo'<div class="info-product-price">
											<span class="item_price">&#8377;'.$row['price'].'</span>
											</div>';
											}
											echo'
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
											<form action="#" method="GET">
											<fieldset>
											<input type="hidden" name="cmd" value="_cart" />
											<input type="hidden" name="add" value="1" />
											<input type="hidden" name="business" value=" " />
											<input type="hidden" name="item_name" value="'.$row['brand'].' '.$row['name'].'" />
											<input type="hidden" name="product_id" value="'.$row['product_id'].'" />
											<input type="hidden" name="amount" value="'.$row['price'].'" />
											<input type="hidden" name="discount_amount" value="0.00" />
											<input type="hidden" name="currency_code" value="INR" />
											<input type="hidden" name="return" value="10" />
											<input type="hidden" name="cancel_return" value=" " />
											<input type="button" name="submit" value="Add to cart" class="button" onclick="add_to_cart(\''.$pid.'\',\''.$_SESSION['user_id'].'\');" />
											</fieldset>
											</form>
											</div>

											</div>
											</div>
											</div>
											<!-- Item end -->';

											$count++;
										}
									}
								}
							}
							}
							else {
								$sql = "SELECT * FROM product ORDER BY product_id DESC LIMIT 4";
								$result = mysqli_query($conn, $sql);
								$item_count = mysqli_num_rows($result);
								if ($item_count==0) {
									echo "<p style='text-align: center;'><b>No products to display</b></p>";
								} else {
									while (($row = mysqli_fetch_assoc($result))) {
										$pid = $row['product_id'];
										$imagesql = "SELECT * FROM images WHERE images.product_id='$pid' AND images.image_location LIKE '%primary%'";
										$imageresult = mysqli_query($conn, $imagesql);
										$imagerow = mysqli_fetch_assoc($imageresult);
										echo '<!-- Item start -->
											<div class="col-md-3 product-men">
												<div class="men-pro-item simpleCart_shelfItem">
													<div class="men-thumb-item" onclick="gotoprod('.$pid.');">
														<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-front">
														<img src="'.$imagerow['image_location'].'" alt="" class="pro-image-back">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="single.php?pid='.$pid.'" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
															
													</div>
													<div class="item-info-product ">
														<h4><a href="single.php?pid='.$pid.'">'.$row['name'].'</a></h4>';
														if($row['discount'] != NULL) {
															$new_price=$row['price'] - ($row['discount']*$row['price']);
															echo'<div class="info-product-price">
																<span class="item_price">&#8377;'.$new_price.'</span>
																<del>₹ '.$row['price'].'</del>
																</div>';
														}
														else {
															echo'<div class="info-product-price">
																<span class="item_price">&#8377;'.$row['price'].'</span>
																</div>';
														}
														echo'
														<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
																			<form action="#" method="GET">
																				<fieldset>
																					<input type="hidden" name="cmd" value="_cart" />
																					<input type="hidden" name="add" value="1" />
																					<input type="hidden" name="business" value=" " />
																					<input type="hidden" name="item_name" value="'.$row['brand'].' '.$row['name'].'" />
																					<input type="hidden" name="product_id" value="'.$row['product_id'].'" />
																					<input type="hidden" name="amount" value="'.$row['price'].'" />
																					<input type="hidden" name="discount_amount" value="0.00" />
																					<input type="hidden" name="currency_code" value="INR" />
																					<input type="hidden" name="return" value=" " />
																					<input type="hidden" name="cancel_return" value=" " />
																					<input type="button" name="submit" value="Add to cart" class="button" data-toggle="modal" data-target="#myModal2"/>
																				</fieldset>
																			</form>
																		</div>
																							
													</div>
												</div>
											</div>
											<!-- Item end -->';

										$count++;
									}
								}	
							}
							?>


						<div class="clearfix"></div>
					</div>
					</div>
				</div>	
			</div>
		</div>
	<!-- //new_arrivals --> 
	<!-- /we-offer -->
		<div class="sale-w3ls">
			<div class="container">
				<h6>We Offer Flat <span>40%</span> Discount</h6>
 
				<a class="hvr-outline-out button2" href="discounts.php?disc_range=40">Shop Now </a>
			</div>
		</div>
	<!-- //we-offer -->
<!--/grids-->
<div class="coupons">
	<div class="coupons-grids text-center">
		<div class="w3layouts_mail_grid">
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-truck" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>FREE SHIPPING</h3>
					<p>Fast and quick delivery at your doorstep.</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-headphones" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>24/7 SUPPORT</h3>
					<p>Always there to lend a hand.</p>
				</div>
			</div>
			<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-shopping-bag" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>MONEY BACK GUARANTEE</h3>
					<p>Complete peace of mind. And wallet.</p>
				</div>
			</div>
				<div class="col-md-3 w3layouts_mail_grid_left">
				<div class="w3layouts_mail_grid_left1 hvr-radial-out">
					<i class="fa fa-gift" aria-hidden="true"></i>
				</div>
				<div class="w3layouts_mail_grid_left2">
					<h3>FREE GIFT COUPONS</h3>
					<p>Shop more to save more. Doesn't get better.</p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--grids-->


<!-- php footer include -->
<?php
include('footer.php');
?>
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
<?php
if (isset($_GET['loginusernotexists'])) {
	echo '<script>alert("User not recognized. Please sign up with Elite Shoppy to continue.")</script>';
} elseif (isset($_GET['loginerror'])) {
	echo '<script>alert("Email-id or password do not match. Please try again.")</script>';
}

if (isset($_GET['customer_reg'])) {
  echo '<script>
  $(window).load(function(){
        $("#myModal5").modal("show");
    });
  </script>';
}

if (isset($_GET['user_login'])) {
  echo '<script>
  $(window).load(function(){
        $("#myModal6").modal("show");
    });
  </script>';
}

if (isset($_GET['q7wgrzp84d'])) {
	echo '<script>
	$(window).load(function(){
        $("#myModal3").modal("show");
    });
	</script>';
}
if (isset($_GET['getsellerpage'])) {
	echo '<script>
	$(window).load(function(){
        $("#myModal9").modal("show");
    });
	</script>';
}

?>