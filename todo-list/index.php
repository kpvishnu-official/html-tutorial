<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$subject = $_POST['subject'];
	$start_time = $_POST['start-time'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo list</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  <h1>Todo List</h1>
  <form class="p-2 bordered shadow" action="" method="post">
  	<input type="text" name="subject" placeholder="Enter your Subject">
  	<input type="datetime-local" name="start-time">
  	<input type="submit" value="Submit">
  </form>

  <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>

  	<div class="p-3 shadow">
  		<?= $start_time ?>: <?= $subject ?>
  	</div>

  <?php endif; ?>

</body>
</html>