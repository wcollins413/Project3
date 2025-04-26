<?php
session_start();
?>
<style>
	@media (max-width: 600px)
	{
		#game-nav .subnav-btn
		{
			align-items: center;
			text-align: center;
		}
	}
</style>
<div id = "game-nav" style = " position: absolute; right: 0; top: 0;">
	<div class = "d-flex justify-content-end py-2">
		<a class = "btn btn-primary mx-2 subnav-btn" href = "/class-env/pages/project/Project/game-landing.php">The Game</a>
		<a class = "btn btn-primary mx-2 subnav-btn" href = "/class-env/pages/project/Project/index.php">Proposal</a>
		<a class = "btn btn-primary mx-2 subnav-btn" href = "/class-env/pages/project/Project/about.php">About</a>
		<a class = "btn btn-primary mx-2 subnav-btn" href = "/class-env/pages/project/Project/features.php">Features</a>
          <?php if (isset($_SESSION['username'])): ?>
		    <a class = "btn btn-primary mx-2 subnav-btn" href = "/class-env/pages/project/Project/create_set.php">Create Set</a>
		    <a class = "btn btn-primary mx-2 subnav-btn" href = "/class-env/pages/project/Project/profile.php">Profile</a>
		    <a class = "btn btn-primary mx-2 subnav-btn" href = "/class-env/pages/project/Project/user/logout.php">Logout</a>
          <?php else: ?>
		    <a class = "btn btn-primary mx-2 subnav-btn" href = "/class-env/pages/project/Project/user/login.php">Login / Sign Up</a>
          <?php endif; ?>
	</div>
</div>

<script>

</script>