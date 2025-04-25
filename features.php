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

	<style>
		  .game-container h4, h3
		  {
			  color: var(--white);
		  }

		  .feature-section div
		  {
			  padding: 0.5rem;
			  background-color: rgba(255, 255, 255, 0.1);
			  width: min-content;
			  min-width: 400px;
			  border-radius: 1rem;
			  margin: auto auto 0.5rem auto;
		  }
	</style>
</head>
<body id = "game-body">
	<nav>
		<div id = "navbar-container"></div>
		<div id = "game-nav" class = "container-fluid"></div>
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
		<div style = "max-width: 800px" class = "section">
			<h3>Project Description</h3>
			<p>The Most Likely To project is a web application that allows users to play in games with custom, or premade questions.
				The players vote on which player is most likely to match each question</p>

			<section class = "feature-section" id = "frontend-section">
				<h3>Frontend Features</h3>

				<div>
					<h4>Gameplay ✅</h4>
					<p>examples of gameplay</p>
				</div>

				<div>
					<h4>Custom Questions ✅</h4>
					<p>examples of custom questions</p>
				</div>

				<div>
					<h4>Login/logout/register ✅</h4>
					<p>examples of login/logout/register</p>
				</div>
			</section>

			<section class = "feature-section" id = "backend-section">
				<h3>Backend Features</h3>

				<div>
					<h4>Profile Statistics ✅</h4>
					<p>examples of profile statistics</p>
				</div>

				<div>
					<h4>Databases and Gameplay ✅</h4>
					<p>examples of databases and gameplay</p>
				</div>

				<div>
					<h4>Login/logout/register ✅</h4>
					<p>examples of login/logout/register</p>
				</div>
			</section>

			<section class = "feature-section" id = "incomplete-section">
				<h3>Planned Features</h3>

				<div>
					<h4>Custom Question Removal and Editing ❌</h4>
					<p>examples</p>
				</div>

				<div>
					<h4>Forgotten Password ❌</h4>
					<p>examples</p>
				</div>

				<div>
					<h4>Friends List ❌</h4>
					<p>examples</p>
				</div>
			</section>
		</div>

	</main>

	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script rel = "text/javascript" src = "scripts/includes.js"></script>

</body>