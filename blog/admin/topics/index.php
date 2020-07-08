<!DOCTYPE html>
<html>
<head>
	<title>Admin section - manage Topics</title>
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
				<a href="create.html" class="btn btn-big">Add Topic</a>
				<a href="index.html" class="btn btn-big">Manage Topics</a>
				
			</div>

			<div class="content">
				<h2 class="page-title">Manage Topics</h2>

				<table>
					<thead>
						<th>SN</th>
						<th>Topic</th>
						<th colspan="2">Action</th>
					</thead>

					<tbody>
						<tr>
							<td>1</td>
							<td>poetry</td>
							<td><a href="#" class="edit">edit</a></td>
							<td><a href="#" class="delete">delete</a></td>
							
						</tr>
					</tbody>


					<tbody>
						<tr>
							<td>2</td>
							<td>Life lesson</td>
							<td><a href="#" class="edit">edit</a></td>
							<td><a href="#" class="delete">delete</a></td>
							
						</tr>
					</tbody>
				</table>
			</div>
			


		</div>

		<!-- END OF ADMIN CONTENT-->  




	</div>
				
			

	<!--JQUERY -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<script src="../../assets/js/scripts.js"></script>

</body>
</html>