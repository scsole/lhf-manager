		<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
			<div class="container">
				<a class="navbar-brand" href="#">LHF Manager</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link <?php echo ($page == "index" ? "active" : "")?>" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php echo ($page == "register" ? "active" : "")?>" href="register.php">Register</a>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php echo ($page == "registrations" ? "active" : "")?>" href="registrations.php">Registration numbers</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
