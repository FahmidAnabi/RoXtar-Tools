<?php

	require_once 'app/init.php';

	$itemsQuery = $db->prepare("
		SELECT id, name, done
		FROM items
		WHERE user = :user
	");

	$itemsQuery->execute([
		'user' => $_SESSION['user_id']
	]);

	$items = $itemsQuery->rowCount() ? $itemsQuery : [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="img/favicon.png" href="http://localhost/RoXtar/favicon.ico"/>
    <title>To Do List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="<?php testParsing(); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
        body, html {
            height: 100%;
            width: 100%;
        }
        .bg {
            background-image: url("images/bg.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

		<style type="text/css">
		.topcorner{
		position:absolute;
		top:0;
		right:0;
		}
		</style>

		</head>
		<body class="bg">

		<div class="topcorner"><a href="http://localhost/RoXtar/"><button type="submit" class="btn btn-outline-success btn-lg"><strong>Back to Home</button></strong></a></div>
		<div class="list">
			<center> <h1 class="header"> .. To Do ..</h1> </center>

			<?php if(!empty($items)): ?>
			<ul class="items">
				<?php foreach($items as $item): ?>
				<li>
					<span class="item<?php echo $item['done'] ? ' done' : ''?>"> <?php echo parse($item['name']); ?></span>
					<a class="delete-button" href="mark.php?as=delete&item=<?php echo $item['id']; ?>">Delete</a>
					<?php if(!$item['done']): ?>
						<a class="done-button" href="mark.php?as=done&item=<?php echo $item['id']; ?>">Mark as done</a>
					<?php else: ?>
						<a class="undone-button" href="mark.php?as=undone&item=<?php echo $item['id']; ?>">Mark as undone</a>
					<?php endif; ?>
				</li>
				<?php endforeach; ?>
			</ul>
			<?php else: ?>
				<p>You haven't added any items yet.</p>
			<?php endif; ?>

			<form class="item-add" action="add.php" method="POST">
				<input type="text" name="name" placeholder="Type a new item here." class="input" autocomplete="off" maxlength="30" required>
				<input type="submit" value="Add" class="submit">
			</form>

		</div> <hr>

		<footer>
          <h4>  <center><p> To Do List || Copyright &copy; <a href="https://www.facebook.com/x.3xp1r3.x">Fahmid Hasan Anabi</a></p></center> </h4>
        </footer>

	</div>

	</body>

</html>
