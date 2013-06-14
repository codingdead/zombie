<?php 
require_once('../classes/form.php');

$form = new Form();




 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Living Dead Adoptions</title>
	<link rel="stylesheet" href="../assets/css/style.css"/>
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
				<input id="submit" type="submit" name="submit" value="Add Zombie"/>
			</form>
		</div>

		<div class="main">
		<h2>New Zombie</h2>
		<div class="image">
			
		<h3><a href="">upload Image</a></h3>
			
		</div>	
		<?php  echo '<div class="form">';
			$genders_array = array();
			$genders_array[] = 'Male';
			$genders_array[] = 'Female';
			
			echo $form->open('save_new_page.php', 'post');
				echo $form->label('name', 'Zombie Name');
				echo $form->text('name','','');

				echo $form->label('description', 'Description');
				echo $form->textarea('description');

				echo $form->label('gender', 'Gender');
				echo $form->select('gender', $genders_array);
						

				
				echo $form->label('dod', 'Date of Death');
				echo $form->text('dod','','yyyy-mm-dd');

				echo $form->label('price', 'Price');
				echo $form->text('price','','');

				// echo $form->hidden('cat', $_GET['id']);

				echo $form->submit('submit', 'Create');
			echo $form->close();
		echo '</div>';?>
		</div>

		<div class="footer">
			<p>&copy; 2013 The Coding Dead</p>
		</div>

	</div> 


	
</body>
</html>