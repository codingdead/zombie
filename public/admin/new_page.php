<?php 
require_once('../../classes/form.php');

$form = new Form();

include('../../includes/header_admin.php');
include('../../includes/sidenav_admin.php');
//include('../../includes/page.php'); 
echo '<div class="main">';



	echo '<div class="form">';
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
	echo '</div>';
echo '</div>';

include('../../includes/footer.php');


