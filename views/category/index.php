
	<?php include ROOT . '/views/layouts/header.php'; ?>
	

	
	<section>
		<div class="container">
			<div class="row">
<?php include ROOT . '/views/layouts/menu.php'; ?>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						<?php foreach($products as $product): ?><div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
                                                                    
										<div class="productinfo text-center">
											<img src="/eshop/template/images/home/<?php echo $product['image']?>" alt="" />
											<h2><?php echo $product['price']?></h2>
											<p><?php echo $product['title']?></p>
											<a href="/cart/add/<?php echo $product['id'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
                                                                                    <a href ="/view/<?php echo $product['id'] ?>">
											<div class="overlay-content">
												<h2><?php echo $product['price']?></h2>
												<p><?php echo $product['title']?></p>
												<a href="/cart/add/<?php echo $product['id'];?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
                                                                                    </a>
										</div>
                                                                    
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div><?php endforeach?>

						<?php echo $pagination->get(); ?>
					</div><!--features_items-->
					

					
					
				</div>
			</div>
		</div>
	</section>
	
	
	

	<?php include ROOT . '/views/layouts/footer.php'; ?>