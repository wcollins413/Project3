<?php
session_start();
/**
 * File: index.php
 * Description: Landing page for the game. Lets users choose a theme and create a new game room.
 *
 */
?>
<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "utf-8">
	<meta content = "width=device-width, initial-scale=1, shrink-to-fit=no" name = "viewport">
	<meta content = "ie=edge" http-equiv = "X-UA-Compatible">

	<link href = "css/style.css" rel = "stylesheet">
	<link href = "css/u_style.css" rel = "stylesheet">
	<link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel = "stylesheet">

	<title>The Game | Most Likely To</title>

	<style>
		  .game-container
		  {
			  max-width: 450px;
		  }
	</style>
</head>
<body>
	<nav>
		<div id = "navbar-container"></div>

		<div id = "game-nav" class = "container-fluid">
			<div class = "d-flex justify-content-end py-2">
				<a class = "btn btn-primary mx-2" href = "game-landing.php">The Game</a>
				<a class = "btn btn-primary mx-2" href = "index.php">Proposal</a>
                      <?php if (isset($_SESSION['username'])): ?>
				    <a class = "btn btn-primary mx-2" href = "../profile.html">Profile</a>
				    <a class = "btn btn-primary mx-2" href = "user/logout.php">Logout</a>
                      <?php else: ?>
				    <a class = "btn btn-primary mx-2" href = "user/login.php">Login / Sign Up</a>
                      <?php endif; ?>
			</div>
		</div>
	</nav>

	<main class = "game-container">
		<div class = "container">
			<h1>Most Likely To</h1>
			<form action = "actions/join.php" method = "GET">
				<input class = "form-control" type = "text" name = "room" placeholder = "Enter Room Code" required>
				<button type = "submit">Join Game</button>
			</form>

			<form action = "./actions/create.php" method = "POST">
				<div class = "form-group">
					<label for = "theme">Choose a theme:</label>

					<select class = "form-control" id = "theme" name = "theme" required>
						<option value = "0">General</option>
						<option value = "1">College</option>
						<option value = "2">Office</option>
						<!-- I think we should append player made options here. Instead of codes?-->z
					</select>
				</div>
				<button class = "btn btn-primary" type = "submit">Create Game</button>
			</form>
		</div>
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
</html>