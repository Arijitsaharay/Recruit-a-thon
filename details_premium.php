<?php
session_start();
  error_reporting(E_ERROR | E_WARNING | E_PARSE);

if(isset($_SESSION['uid'])){
  include_once('dbclass.php');
  $db=new db;

  $res=$db->getUserData();
  $row=mysqli_fetch_array($res,MYSQLI_ASSOC);
   $radio=$row['radio'];
}
else{
  /*header("location:login.php");
  exit;*/
}

include_once('header.php');
include('connection.php');

if (isset($_GET['job_id'])) {
	$id=$_GET['job_id'];
	
}
else
{
	echo "Not done";
}
$db=$conn;
	global $db;
	$get_product="SELECT * FROM premium_table WHERE job_id='$id' ";
	$run_products=mysqli_query($db,$get_product);
	 if (mysqli_num_rows($run_products)>0) 
	 {
	 	while ($row_product=mysqli_fetch_array($run_products)) {
		$job_id=$row_product['job_id'];
		$user_id = $row_product['user_id'];
        $name = $row_product['name'];
		$email = $row_product['email'];
		$phone = $row_product['phone'];
        $description = $row_product['description'];
		$requirement = $row_product['requirement'];
        $skill = $row_product['skill'];
        $location = $row_product['location'];
        $experience = $row_product['experience'];
		$salary=$row_product['salary'];
        $apply = $row_product['apply'];
        $job_img1=$row_product['img1'];
        $job_img2=$row_product['img2'];
        $job_img3=$row_product['img3'];
        
      }
	 }
	else
	 {
	 	echo "No Data Available";
	 }
?>

<!-- Page info -->
	<div class="page-top-info">
		<div class="container">
			<h4>Find your Dream Job</h4>
			<div class="site-pagination">
				<!--a href="">Home</a> /
				<a href="">Shop</a-->
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- product section -->
	<section class="product-section">
		<div class="container">
			<div class="back-link">
				<a href="index.php"> &lt;&lt; Back to Homepage</a>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="product-pic-zoom">
						<img class="product-big-img" src="img/form_img/<?php echo $job_img1 ?>" alt="">
					</div>
					<div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
						<div class="product-thumbs-track">
							<div class="pt active" data-imgbigurl="img/form_img/<?php echo $job_img1 ?>"><img src="img/form_img/<?php echo $job_img1 ?>" alt=""></div>
							<div class="pt" data-imgbigurl="img/form_img/<?php echo $job_img2 ?>"><img src="img/form_img/<?php echo $job_img2 ?>" alt=""></div>
							<div class="pt" data-imgbigurl="img/form_img/<?php echo $job_img3 ?>"><img src="img/form_img/<?php echo $job_img3 ?>" alt=""></div>
							
						</div>
					</div>
				</div>
				<div class="col-lg-6 product-details">
					<h2 class="p-title"><?php echo $name ?></h2>
					<p><?php echo $description ?></p>
					<!--h3 class="p-price">$39.90</h3>
					<h4 class="p-stock">Available: <span>In Stock</span></h4>
					<div class="p-rating">
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o"></i>
						<i class="fa fa-star-o fa-fade"></i>
					</div>
					<div class="p-review">
						<a href="">3 reviews</a>|<a href="">Add your review</a>
					</div>
					<div class="fw-size-choose">
						<p>Size</p>
						<div class="sc-item">
							<input type="radio" name="sc" id="xs-size">
							<label for="xs-size">32</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="s-size">
							<label for="s-size">34</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="m-size" checked="">
							<label for="m-size">36</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="l-size">
							<label for="l-size">38</label>
						</div>
						<div class="sc-item disable">
							<input type="radio" name="sc" id="xl-size" disabled>
							<label for="xl-size">40</label>
						</div>
						<div class="sc-item">
							<input type="radio" name="sc" id="xxl-size">
							<label for="xxl-size">42</label>
						</div>
					</div>
					<div class="quantity">
						<p>Quantity</p>
                        <div class="pro-qty"><input type="text" value="1"></div>
                    </div-->
					
					<div id="accordion" class="accordion-area">
						<div class="panel">
							<div class="panel-header" id="headingOne">
								<button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Job Requirements</button>
							</div>
							<div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="panel-body">
                                    
									<p><?php echo $requirement ?></p>																		
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingTwo">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Skill Requirement </button>
							</div>
							<div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="panel-body">
									<!--img src="./img/cards.png" alt=""-->
									<p><?php echo $skill ?></p>
								</div>
							</div>
						</div>
						<div class="panel">
							<div class="panel-header" id="headingThree">
								<button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Details</button>
							</div>
							<div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="panel-body">
									<h6>Location</h6>
									<p><?php echo $location ?></p>
									
									<h6>Experience</h6>
									<p><?php echo $experience ?></p>
									<h6>Salary</h6>
									<p><?php echo $salary ?>Lakhs/annum</p>
								</div>
							</div>
						</div>
					</div><br><br>
					<?php 
                  error_reporting(E_ERROR | E_WARNING | E_PARSE);
                  $id=$_SESSION['uid'];
                  /*echo $id;
                  echo $user_id;*/
                  if ($id!=$user_id) {
                            if($radio == 'recruiter')
                  	 {      echo "<div><a href='warning.php' class='site-btn' target='blank'>APPLY HERE</a></div><br>";
                     }
                    else
                     {
                            echo "<div><a href='$apply' class='site-btn' target='blank'>APPLY HERE</a></div><br>";
                  	 }
                        }else{
                            echo "<div><a href='editForm_premium.php?mode=edit&job_id=$job_id' class='site-btn'>Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='allfunction1.php?mode=delete_premium&job_id=$job_id' class='site-btn'>Delete</a></div>";
                        }  
                ?>
					<div class="social-sharing">
						<a href=""><i class="fa fa-google-plus"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- product section end -->


	



<?php include_once('footer.php'); ?>


<!-- src="img/form_img/<?php echo $job_img1 ?>" -->