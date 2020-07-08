<?php 
include("path.php");  
include(ROOT_PATH . "/app/database/db.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>blog</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<script src="https://kit.fontawesome.com/2f19188006.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnm0CqbT1WIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKKMHpvLbHG9Sr" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<body>
	<!-- INCLUDE HEADER FILE-->

	<?php include(ROOT_PATH. "/app/includes/header.php"); ?>

	<?php if(isset($_SESSION['message'])); ?>

	<div class="msg <?php echo $_SESSION['type']; ?>" >
		<li> 
			<?php 
				echo $_SESSION['message']; 
			?>
				
		</li>

		<?php
			unset($_SESSION['message']);
			unset($_SESSION['type']);
		?>
	</div>

		

	<!--page wrapper-->

	<div class="page-wrapper">


		<!-- post slider-->
		<div class="post-slider">
			<h1 class="slider-title">Trending Posts</h1>

			<i class="fas fa-chevron-left prev"></i>
			<i class="fas fa-chevron-right next"></i>

			<div class="post-wrapper">

				<div class="post">
					<img src="assets/images/download (1).JFIF" alt="" class="slider-image">
					<div class="post-info">
						<h4><a href="single.html">One day your life will flash before your eyes.</a></h4>
						<i class="far fa-user"> Awa Melvine</i>
						&nbsp;
						<i class="far fa-calender">Mar 8, 2019 </i>
					</div>
				</div>


				<div class="post">
					<img src="assets/images/download (1).JFIF" alt="" class="slider-image">
					<div class="post-info">
						<h4><a href="single.html">One day your life will flash before your eyes.</a></h4>
						<i class="far fa-user"> Awa Melvine</i>
						&nbsp;
						<i class="far fa-calender">Mar 8, 2019 </i>
					</div>
				</div>

				<div class="post">
					<img src="assets/images/download (1).JFIF" alt="" class="slider-image">
					<div class="post-info">
						<h4><a href="single.html">One day your life will flash before your eyes.</a></h4>
						<i class="far fa-user"> Awa Melvine</i>
						&nbsp;
						<i class="far fa-calender">Mar 8, 2019 </i>
					</div>
				</div>

				<div class="post">
					<img src="assets/images/download (1).JFIF" alt="" class="slider-image">
					<div class="post-info">
						<h4><a href="single.html">One day your life will flash before your eyes.</a></h4>
						<i class="far fa-user"> Awa Melvine</i>
						&nbsp;
						<i class="far fa-calender">Mar 8, 2019 </i>
					</div>
				</div>

				<div class="post">
					<img src="assets/images/download (1).JFIF" alt="" class="slider-image">
					<div class="post-info">
						<h4><a href="single.html">One day your life will flash before your eyes.</a></h4>
						<i class="far fa-user"> Awa Melvine</i>
						&nbsp;
						<i class="far fa-calender">Mar 8, 2019 </i>
					</div>
				</div>

				

				
			</div>
		</div>
		<!-- // POSTER SLIDER END -->

		<!-- CONTENT-->

		<div class="content clearfix">
			

			<div class="main-content">
				<h1 class="recent-post-title"> Recent Posts</h1>

				<div class="post">
					<img src="assets/images/download.JFIF" alt="" class="post-image">
					<div class="post-preview">
						<h2> <a href="single.html"> The strongest man sweetest songs yet remain to be sung.</a></h2>
						<i class=" far fa-user">Awa Melvine </i>
						&nbsp;
						<i class="far calender"> mar 11, 2019</i>
						<p class="preview-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam </p>
						<a href="single.html" class="btn read-more">Read more</a>
					</div>
				</div>

				<div class="post">
					<img src="assets/images/download.JFIF" alt="" class="post-image">
					<div class="post-preview">
						<h2> <a href="single.html"> The strongest man sweetest songs yet remain to be sung.</a></h2>
						<i class=" far fa-user">Awa Melvine </i>
						&nbsp;
						<i class="far calender"> mar 11, 2019</i>
						<p class="preview-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam </p>
						<a href="single.html" class="btn read-more">Read more</a>
					</div>
				</div>

				<div class="post">
					<img src="assets/images/download.JFIF" alt="" class="post-image">
					<div class="post-preview">
						<h2> <a href="single.html"> The strongest man sweetest songs yet remain to be sung.</a></h2>
						<i class=" far fa-user">Awa Melvine </i>
						&nbsp;
						<i class="far calender"> mar 11, 2019</i>
						<p class="preview-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam </p>
						<a href="single.html" class="btn read-more">Read more</a>
					</div>
				</div>

				<div class="post">
					<img src="assets/images/download.JFIF" alt="" class="post-image">
					<div class="post-preview">
						<h2> <a href="single.html"> The strongest man sweetest songs yet remain to be sung.</a></h2>
						<i class=" far fa-user">Awa Melvine </i>
						&nbsp;
						<i class="far calender"> mar 11, 2019</i>
						<p class="preview-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam </p>
						<a href="single.html" class="btn read-more">Read more</a>
					</div>
				</div>
			</div>

			<div class="sidebar">
				<div class="section search">
					<h2 class="section-title"> Search </h2>
				<form action="index.html" method="post">
					<input type="text" name="search-term" class="text-input" placeholder="search...">
				</form>
				</div>


				<div class="section topics">
				<h2 class="section-title">Topics</h2>
				<ul>
					<li><a href="#">Poems</a></li>
					<li><a href="#">Quotes</a></li>
					<li><a href="#">Fiction</a></li>
					<li><a href="#">Biography</a></li>
					<li><a href="#">Motivation</a></li>
					<li><a href="#">Inspiration</a></li>
					<li><a href="#">Life Lessons</a></li>
				</ul>
			</div>

		</div>

		<!-- // CONTENT END -->



	</div>
	<!--// PAGE WRAPPER END-->
	<?php include(ROOT_PATH. "/app/includes/footer.php"); ?>


	
	<!--JQUERY -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Slick carousel -->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<script src="assets/js/scripts.js"></script>

</body>
</html>