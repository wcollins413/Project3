<?php
/**
 * File: index.php
 * Description: Landing page for the game. Lets users choose a theme and create a new game room.
 *
 */ 
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<title>Most Likely To</title>
</head>
<body>
    <div class="game-container">
        <div class="container">
            <h1>Most Likely To</h1>
            <form action="join.php" method="GET">
                <input type="text" name="room" placeholder="Enter Room Code" required>
                <button type="submit">Join Game</button>
            </form>
            <form action="create.php" method="POST">
                <label for="theme">Choose a theme:</label>
                <select name="theme" required>
                    <option value="general">General</option>
                    <option value="college">College</option>
                    <option value="office">Office</option>
                </select>
                <div>
                    <label for="mode_code" style="margin: 10px;"> Secret Game:</label>
                    <input type="text" name="mode_code" />
                </div>
                <button type="submit">Create Game</button>
            </form>
        </div>
    </div>

    <script>
        document.querySelector("select[name='theme']").addEventListener("change", function () {
            document.getElementById("custom-questions").style.display =
                this.value === "custom" ? "block" : "none";
        });
    </script>
</body>
</html>
