				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian">
                                                    <?php foreach($categories as $category):?>
                                                    <a href="/category/<?php echo $category['id']?>""><?php echo $category['title'];?></a>
                                                    <br>
                                                    <?php endforeach?>
						</div>
					
						

					
					</div>
				</div>