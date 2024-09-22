<?php 
include 'header.php'
?>
<!--featured-cars start -->
<section id="featured-cars" class="featured-cars">
			<div class="container">
				<div class="section-header">
					<p>checkout <span>the</span> Permium cars</p>
					<h2>Permium cars</h2>
				</div><!--/.section-header-->
				<div class="featured-cars-content">
					<div class="row">
						<form action="post">
						<?php 
						$fetch = "SELECT * FROM `cars`";
						$query = mysqli_query($conn,$fetch);
						while($row = mysqli_fetch_array($query)){
							if($row['type'] == 'permium' & $row['status'] == 'Available'){
						?>
						<div class="col-lg-3 col-md-4 col-sm-6">
							<div class="single-featured-cars">
								<div class="featured-img-box">
									<div class="featured-cars-img">
										<img src="assets/images/new-cars-model/<?php echo $row['image']?>" alt="cars">
									</div>
									<div class="featured-model-info">
										<h4><?php echo $row['type']?></h4>
									</div>
								</div>
								<div class="featured-cars-txt">
									<h2><a href="booked.php?id=<?php echo $row['id']; ?> "><?php echo $row['car_name'] ?></a></h2>
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
