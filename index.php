<?php 
require_once('classes/form.php');

$form = new Form();
 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Living Dead Adoptions</title>
	<link rel="stylesheet" href="assets/css/style.css"/>
	<link href='http://fonts.googleapis.com/css?family=Creepster' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="header">
		<div class="container">
			<h1>Living Dead Adoptions</h1>
		</div>
	</div>

	<div class="wrapper">

		<div class="sidenav">
			<ul class="menu">
				<li><a href="#">ZOMBIE 1</a></li>
				<li><a href="#">ZOMBIE 2</a></li>
				<li><a href="#">ZOMBIE 3</a></li>
				<li><a href="#">ZOMBIE 4</a></li>
				<li><a href="#">ZOMBIE 5</a></li>
				<li><a href="#">ZOMBIE 6</a></li>
				<li><a href="#">ZOMBIE 7</a></li>
				<li><a href="#">ZOMBIE 8</a></li>
				<li><a href="#">ZOMBIE 9</a></li>
				<li><a href="#">ZOMBIE 10</a></li>	
			</ul>
			<form action="">
				<input id="submit" type="submit" name="submit" value="View Cart"/>
			</form>
		</div>

		<div class="main">
		<h2>Zombie Name</h2>
		<div class="image">
		<img src="assets/images/dude-zombie.jpg" alt="">
			
		</div>		
		
		<?php  echo '<div class="info">';?>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iste natus nihil voluptate earum quibusdam tempora rem accusamus obcaecati doloribus voluptas deserunt cum aperiam! Ducimus earum neque non quia praesentium.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iste natus nihil voluptate earum quibusdam tempora rem accusamus obcaecati doloribus voluptas riam! Ducimus earum neque non quia praesentium.</p>
			<h3>Gender</h3><h3>Date of Death</h3><h3>$Price</h3>	
			<?php  	echo $form->submit('submit', 'adopt me');
			echo $form->close();
		echo '</div>';?>
		</div>

		<div class="footer">
			<p>&copy; 2013 The Coding Dead</p>
		</div>

	</div> 


	
</body>
</html>