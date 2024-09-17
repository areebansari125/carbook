<?php 
include 'header.php'
?>
<!--featured-cars start -->
<section id="featured-cars" class="featured-cars">
			<div class="container">
				<div class="section-header">
					<p>checkout <span>the</span> Basic cars</p>
					<h2>Basic cars</h2>
				</div><!--/.section-header-->
				<div class="featured-cars-content">
				<div class="row">
						<?php 
						$fetch = "SELECT * FROM `cars`";
						$query = mysqli_query($conn,$fetch);
						if($row = mysqli_fetch_array($query)){
							if($row['type'] == 'Basic'){
						?>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/featured-cars/fc1.png" alt="cars">
									</div>
									<div class="featured-model-info">
										<h4><?php echo $row['type']?></h4>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="#"><?php echo $row['car_name'] ?></a></h2>
								</div>
							</div>
						</div>
						<?php
						}
					 }?>
						
					</div>
						
					
				</div>
			</div><!--/.container-->

		</section><!--/.featured-cars-->
		<!--featured-cars end -->

<?php 
include 'footer.php'
?>
