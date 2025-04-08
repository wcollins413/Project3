<?php
/**
 * File: join.php
 * Description: Allows players to join an existing room by entering their name.
 *
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

$room = $_GET['room'] ?? '';

if (!$room) {
    die("Room code missing.");
}

$path = "rooms/$room.json";
if (!file_exists($path)) {
    die("Room not found.");
}

$data = json_decode(file_get_contents($path), true);
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Join Game - <?= htmlspecialchars($room) ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <h2>🎮 Join Game</h2>
  <p>Room Code: <strong><?= htmlspecialchars($room) ?></strong></p>

  <form action="lobby.php" method="POST">
    <input type="hidden" name="room" value="<?= htmlspecialchars($room) ?>">
    <input type="text" name="name" placeholder="Enter your name" required>
    <button type="submit">Join Room</button>
  </form>

  <p><a href="index.php">⬅️ Back to Start</a></p>

</body>
</html>
