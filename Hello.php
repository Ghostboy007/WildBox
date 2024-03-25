<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Greeting Form</title>
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
      font-size: 1.5em;
      text-align: center;
      background-color: yellow;
    }

    form {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

<form method="post" action="">
  <label for="userTime">Enter a time (in 24-hour format, e.g., 14:30):</label>
  <br>
  <input type="text" id="userTime" name="userTime" required>
  <br>
  <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $userTime = $_POST["userTime"];
  
  if (preg_match("/^([01]?[0-9]|2[0-3]):[0-5][0-9]$/", $userTime)) {
    $t = intval(substr($userTime, 0, 2));

    if ($t < 10) {
      $greeting = "🌅 Good morning!";
    } elseif ($t < 20) {
      $greeting = "☀️ Have a good day!";
    } else {
      $greeting = "🌙 Have a good night!";
    }

    echo "<p>{$greeting}</p>";
  } else {
    echo "<p>Please enter a valid time in 24-hour format (HH:MM).</p>";
  }
}
?>

</body>
</html>
