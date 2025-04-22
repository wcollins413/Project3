<?php
session_start();
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "utf-8">
	<meta content = "width=device-width, initial-scale=1, shrink-to-fit=no" name = "viewport">
	<meta content = "ie=edge" http-equiv = "X-UA-Compatible">

	<title>Features | Most Likely To</title>

	<link href = "css/style.css" rel = "stylesheet">
	<link href = "css/u_style.css" rel = "stylesheet">
	<link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel = "stylesheet">

</head>
<body id = "game-body">
	<nav>
		<div id = "navbar-container"></div>

	</nav>

	<main class = "game-container" style = "max-width: 1000px;">

		<h1>Team Project | Features</h1>
		<h2>CPSC 3750 – Web App Development</h2>

		<div class = "section">
			<h3>Team Members</h3>
			<ul>
				<li>Wilson Collins</li>
				<li>Sean Slaughter</li>
			</ul>
		</div>

	</main>

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
	<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script rel = "text/javascript" src = "/nav-foot.js"></script>

</body>