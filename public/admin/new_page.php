<?php 
require_once('../../classes/form.php');

$form = new Form();

include('../../includes/admin_header.php');
include('../../includes/admin_sidenav.php');
 ?>
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
		<?php include('../../includes/footer.php');?>
		

