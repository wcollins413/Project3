<?php
session_start();
?>

<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "utf-8">
	<meta content = "width=device-width, initial-scale=1, shrink-to-fit=no" name = "viewport">
	<meta content = "ie=edge" http-equiv = "X-UA-Compatible">

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
                      <?php if (isset($_SESSION['username'])): ?>
				    <a class = "btn btn-primary mx-2" href = "../settings.html">Profile</a>
				    <a class = "btn btn-primary mx-2" href = "user/logout.php">Logout</a>
                      <?php else: ?>
				    <a class = "btn btn-primary mx-2" href = "user/login.php">Login / Sign Up</a>
                      <?php endif; ?>
			</div>
		</div>
	</nav>

	<main style = "margin-top: 3rem;">

          <?php if (isset($_SESSION['username'])): ?>
		    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1><p>
			    <a href = "user/logout.php">Logout</a>
		    </p>
          <?php else: ?>
		    <h1>Most Likely To | Proposal </h1><p><a href = "user/login.php">Login</a> |
			    <a href = "user/register.php">Register</a>
		    </p>
          <?php endif; ?>
		<h1>Team Project Proposal</h1>
		<h2>CPSC 3750 – Web App Development</h2>

		<div class = "section">
			<h3>Team Members</h3>
			<ul>
				<li>Wilson Collins</li>
				<li>Sean Slaughter</li>
			</ul>
		</div>

		<div class = "section">
			<p>
				<strong>We are proposing an original app:</strong> Most Likely To? It is a game where users can vote on which player is most likely to do a given statement.
			</p>
			<p> Our web app is inspired by popular online games, and card games, such as
				<a href = "https://www.jackboxgames.com/games/quiplash" target = "_blank">Quiplash</a> and
				<a href = "https://dycegames.com/collections/the-voting-game" target = "_blank">The Voting Game</a>.
			</p>
		</div>

		<div class = "section">
			<h3>Project Overview</h3>
			<p>Our application will allow users to log in, create custom games and questions and participate with friends live. These questions will allows users to vote on which player is most likely to do a given statement.
		</div>

		<div class = "section">
			<h3>Proposed Enhancements</h3>
			<p>In addition to implementing the base app, we plan to make the following improvements and changes:</p>
			<ul>
				<li>
					<strong>HTML:</strong> Add new pages for profile, login, game creation, and custom questions.
				</li>
				<li>
					<strong>CSS:</strong> Fix styling issues and consistency. Ensuring a responsive design. Implementing Smooth Transitions between pages and scenes.
				</li>
				<li>
					<strong>JavaScript:</strong> Ensuring dynamic buttons. Adding Dynamic Friends list.
					<strong>TENTATIVE</strong>
				</li>
				<li><strong>PHP:</strong> Connection to DB, user authentication, and user inputed questions.
				</li>
				<li><strong>Database:</strong> Create user tables and questions tables. (User inputed questions)
				</li>
				<li>
					<strong>Authentication:</strong> Login/Logout with password hashing and optional user roles (e.g., user/admin)
				</li>
			</ul>
		</div>

		<div class = "section">
			<h3>Division of Labor</h3>
			<ul>
				<li><strong>Wilson:</strong>
					<ul>
						<li>PHP: Database connection, user authentication (Login/logout/password hashing) (Already/Mostly implemented), handling user input for custom questions</li>
						<li>JavaScript: Dynamic Friends list (backend integration)
							<strong>TENTATIVE
							</strong></li>
						<li>Database: Create and manage User and Questions tables</li>
					</ul>
				</li>
				<li><strong>Sean:</strong>
					<ul>
						<li>HTML: Create Profile and Custom Questions pages</li>
						<li>CSS: Overhaul CSS (Fix modularity of CSS and DOM Elements), ensuring responsive design and consistent styling across pages</li>
						<li>JavaScript: Dynamic buttons (frontend interactions)</li>
						<li>PHP: Assist in implementing frontend interaction with backend for user profile and custom questions</li>
					</ul>
				</li>
			</ul>
		</div>

		<div class = "section">
			<h3>Timeline</h3>
			<ul>
				<li>Week 1 (due April 10 2PM): Base app implemented, proposal presented✅</li>
				<li>Week 3 (due April 22 2PM): Complete enhancements, demo to instructor</li>
				<li>Week 4 (due April 27 EOD): Polish UI and prepare for class demo</li>
				<li>Week 5 (due Final Exam): Give a polished demo of your team's app</li>
			</ul>
		</div>

		<div class = "section">
			<h3>Questions or Risks</h3>
			<p></p>
		</div>

	</main>

	<footer id = "footer-container"></footer>

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