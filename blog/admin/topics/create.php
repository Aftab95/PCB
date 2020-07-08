<?php include("../../path.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin section - Add Topics</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<script src="https://kit.fontawesome.com/2f19188006.js" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnm0CqbT1WIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKKMHpvLbHG9Sr" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">

	<!--admin styling-->

	<link rel="stylesheet" type="text/css" href="../../assets/css/admin.css">

</head>
<body>
	
	<?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?> 


	<!-- Admin page wrapper-->

	<div class="admin-wrapper"> 

		<!-- LEFT SIDEBAR -->

			<?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?> 
		<!--// END OF LEFT SIDE BAR-->

		<!-- ADMIN CONTENT-->  

		<div class="admin-content">
			<div class="button-group">
				<a href="create.php" class="btn btn-big">Add Topic</a>
				<a href="index.php" class="btn btn-big">Manage Topics</a>
				
			</div>

			<div class="content">

				<h2 class="page-title">Add Topic</h2>

				<form action="create.html" method="post">
					<div>
						<label>Name</label>
						<input type="text" name="name" class="text-input">
					</div>

					<div>
						<label>Description</label>
						<textarea name="Description" id="body"></textarea>
					</div>

					<div>
						<button type="submit" class="btn btn-big">Add Topic</button>
					</div>

				</form>
			</div>
			


		</div>

		<!-- END OF ADMIN CONTENT-->  




	</div>
				
			

	<!--JQUERY -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- ckeditor-->

	<script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>



	<script src="../../assets/js/scripts.js"></script>

</body>
</html>