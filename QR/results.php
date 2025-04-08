<?php
/**
 * File: results.php
 * Description: Shows voting results. Host can proceed to next round; others wait for the host.
 *
 */
ini_set('display_errors', 1);
error_reporting(E_ALL);

$room = $_GET['room'] ?? '';
$name = $_GET['name'] ?? '';

$path = "rooms/$room.json";
if (!file_exists($path)) {
    die("Room not found.");
}

$data = json_decode(file_get_contents($path), true);

if (!($data['results_ready'] ?? false)) {
    die("Results not ready yet.");
}

$questions = $data['questions'] ?? [];
$current_index = $data['question_index'] ?? 0;
$is_host = ($data['host'] === $name);
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Round Results</title>
  <link rel="stylesheet" href="style.css">
</head>
<canvas id="confetti-canvas" class="confetti"></canvas>
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<script>
  setTimeout(() => {
    confetti({
      particleCount: 150,
      spread: 80,
      origin: { y: 0.6 }
    });
  }, 500);
</script>
<body>

  <h2>🎉 Results for This Round</h2>

  <?php if (!empty($data['votes'])): ?>
    <ul>
      <?php
      arsort($data['votes']);
      foreach ($data['votes'] as $player => $count): ?>
        <li><strong><?= htmlspecialchars($player) ?></strong>: <?= $count ?> vote(s)</li>
      <?php endforeach; ?>
    </ul>
  <?php else: ?>
    <p><em>No votes recorded.</em></p>
  <?php endif; ?>

  <?php if ($current_index + 1 < count($questions)): ?>
    <?php if ($is_host): ?>
      <form action="next_round.php" method="POST">
        <input type="hidden" name="room" value="<?= htmlspecialchars($room) ?>">
        <input type="hidden" name="name" value="<?= htmlspecialchars($name) ?>">
        <button type="submit">➡️ Next Question</button>
      </form>
    <?php else: ?>
      <p><em>Waiting for the host to start the next round...</em></p>
      <script>
        function checkRoundStart() {
          fetch('get_status.php?room=<?= $room ?>')
            .then(res => res.json())
            .then(data => {
              if (data.round_started) {
                window.location.href = "game.php?room=<?= $room ?>&name=<?= urlencode($name) ?>";
              }
            });
        }
        setInterval(checkRoundStart, 1000);
      </script>
    <?php endif; ?>
  <?php else: ?>
    <h3>🏁 Game Over! Thanks for playing 🎉</h3>
    <form action="index.php" method="GET">
      <button type="submit">🔁 Back to Start</button>
    </form>
    <?php
    // Optional: delete room file
    // unlink($path);
    ?>
  <?php endif; ?>
  <form action="leave_game.php" method="POST" style="margin-top: 20px;">
    <input type="hidden" name="room" value="<?= htmlspecialchars($room) ?>">
    <input type="hidden" name="name" value="<?= htmlspecialchars($name) ?>">
    <button type="submit" class ="leave-btn">Leave Game</button>
  </form>
</body>
</html>
