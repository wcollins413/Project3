<?php
session_start();
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "utf-8">
	<meta content = "width=device-width, initial-scale=1, shrink-to-fit=no" name = "viewport">
	<meta content = "ie=edge" http-equiv = "X-UA-Compatible">

	<link rel = "stylesheet" href = "css/style.css">
	<link href = "css/u_style.css" rel = "stylesheet">
	<link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel = "stylesheet">
	<title>Proposal | Most Likely To</title>

</head>
<body id = "game-body">
	<nav>
		<div id = "navbar-container"></div>

		<div id = "game-nav" class = "container-fluid">
			<div class = "d-flex justify-content-end py-2">
				<a class = "btn btn-primary mx-2" href = "game-landing.php">The Game</a>
				<a class = "btn btn-primary mx-2" href = "index.php">Proposal</a>
				<a class = "btn btn-primary mx-2" href = "features.php">Features</a>
                      <?php if (isset($_SESSION['username'])): ?>
				    <a class = "btn btn-primary mx-2" href = "profile.php">Profile</a>
				    <a class = "btn btn-primary mx-2" href = "user/logout.php">Logout</a>
                      <?php else: ?>
				    <a class = "btn btn-primary mx-2" href = "user/login.php">Login / Sign Up</a>
                      <?php endif; ?>
			</div>
		</div>
	</nav>

	<main class = "game-container" style = "max-width: 1000px;">

		<h1>Welcome <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
		<h2>Profile</h2>
		<p>Here is your profile placeholder! Isn't this excited? There are so many possibilities!</p>
	</main>

	<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

	<!--

            Just for our navbar, and footers we will have to switch these out on each end.

            <script>
                    fetch('/navbar.html')
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('navbar-container').innerHTML = data;
                        });
            </script>


                Replace my script below with yours!
        -->
	<script rel = "text/javascript" src = "/nav-foot.js"></script>

</body>