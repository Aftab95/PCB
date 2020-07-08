<header>
		<a href="<?php echo BASE_URL. '/index.php'?>" class="logo">
			<h1 class="logo-text"><span>Awa</span> Inspires</h1>
		</a>
		<i class="fa fa-bars menu-toggle"></i>
		<ul class="nav">
			<li><a href="<?php echo BASE_URL. '/index.php'?>">HOME</a>
				<ul style="left: 0px;">
					<li><a href="#">Landing Page</a></li>
					<li><a href="#">Team</a></li>
				</ul>

			</li>
			<li><a href="#">ABOUT</a></li>
			<li><a href="#">SERVICES</a></li>


			<?php if(isset($_SESSION['id'])): ?>
			<!--<li><a href="#">SIGN UP</a></li>
			<li><a href="#">LOGIN </a></li>-->
			<li><a href="#">
				<i class="fa fa-user"></i> 
				<?php echo $_SESSION['username']; ?>
				<i class="fa fa-chevron-down" style="font-size: .8em"></i>
			</a>
				<ul>
					<?php if($_SESSION['admin']): ?>

					<li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
				<?php endif ?>

					<li><a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout">Logout</a></li>
				</ul>

			</li>
			<?php else: ?>
				<li><a href="<?php echo BASE_URL . '/register.php' ?>">SIGN UP</a></li>
				<li><a href="<?php echo BASE_URL . '/login.php' ?>">LOGIN </a></li>


			<?php endif; ?>
		</ul>
	</header>