<?php

?>
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