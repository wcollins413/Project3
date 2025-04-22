<?php
session_start();
/**
 * File: lobby.php
 * Description: Shows who has joined the room. Host can start the game from here.
 *
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Make sure we have the game room in the session
if (!isset($_SESSION['game_room'])) {
    header("Location: ./game-landing.php");
    exit;
}

$room = $_SESSION['game_room'];
$player_name = $_SESSION['player_name'] ?? 'Unknown Player';
$player_entry_id = $_SESSION['player_entry_id'] ?? null;

require_once __DIR__ . '/db/db_connect.php';
require_once __DIR__ . '/db/queries.php';

// Check if room exists
$stmt = $conn->prepare("SELECT * FROM games WHERE id = ? AND is_active = TRUE");
$stmt->bind_param("s", $room);
$stmt->execute();
$game_result = $stmt->get_result();

if ($game_result->num_rows === 0) {
    echo '<script>
            alert("This room does not exist or is no longer active.");
            window.location.href = "./game-landing.php";
          </script>';
    exit;
}

// Get game information
$game = $game_result->fetch_assoc();
$host_user_id = $game['host_user_id'];

// Determine if current player is the host
$is_host = false;
if (isset($_SESSION['user_id']) && $_SESSION['user_id'] == $host_user_id) {
    $is_host = true;
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href = "css/style.css">
	<link rel = "stylesheet" href = "css/u_style.css">
	<link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel = "stylesheet">
	<title>Lobby - Room <?= substr(htmlspecialchars($room), 0, 3) . "-" . substr(htmlspecialchars($room), 3) ?></title>
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
		<h2 style = "color: white;">Room Code:
			<strong><?= substr(htmlspecialchars($room), 0, 3) . "-" . substr(htmlspecialchars($room), 3) ?></strong>
		</h2>
		<h3>Welcome, <?= htmlspecialchars($player_name) ?>!</h3>
		<p style = "color: white;">Waiting for players to join...</p>

		<ul id = "player-list">

		</ul>

          <?php if ($is_host): ?>
		    <form action = "./actions/start_game.php" method = "POST">
			    <input type = "hidden" name = "room" value = "<?= htmlspecialchars($room) ?>">
			    <button type = "submit">Start Game</button>
		    </form>
          <?php else: ?>
		    <p style = "color: white;">Waiting for host to start the game...</p>
          <?php endif; ?>

	</main>

	<!-- TODO Add a Leave Game Button and a Kick Player Button -->

	<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script rel = "text/javascript" src = "/nav-foot.js"></script>
	<script>

          function fetch_players() {
              $.ajax({
                  url: './actions/check_players.php',
                  data: {
                      room: "<?= $room ?>"
                  },
                  success: function (data) {
                      $('#player-list').html(data);
                  }
              });
          }


          // Initial fetch
          fetch_players();

          // Set up polling intervals
          setInterval(fetch_players, 3000);
          setInterval(checkGameStart, 3000);
	</script>
</body>
</html>