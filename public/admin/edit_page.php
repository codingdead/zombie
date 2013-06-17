<?php

require_once('../../classes/page.php');
require_once('../../classes/form.php');

$page = new Page($_GET['id']);
$form = new Form();

include('../../includes/admin_header.php');

include('../../includes/admin_sidenav.php');

echo '<div class="main">';
 	echo '<h2>Update Zombie</h2>';

 	echo '<div class="image">';?>
 	<img src="../../assets/images/<?php echo $page->image; ?>" alt=""> 	
	<?php echo '<h3><a href="">upload new Image</a></h3>';	
	echo '</div>';		
	echo '<div class="form">';
	echo $form->open('update_page.php', 'post');
		echo $form->label('name', 'Zombie Name');
		echo $form->text('name', $page->name, '');

		echo $form->label('description', 'Description');
		echo $form->textarea('description', $page->description);
		$genders_array = array();
		$genders_array[] = 'Male';
		$genders_array[] = 'Female';

		echo $form->label('gender', 'Gender');
		echo $form->select('gender', $page->gender, $genders_array);

		echo $form->label('dod', 'Date of Death');
		echo $form->text('name', $page->dod, '');

		echo $form->label('price', 'Price');
		echo $form->text('name', $page->price, '');
		

		echo $form->submit('submit', 'Update');
		// echo '<a href="delete_page.php?id='.$page->id.'">Delete</a>';
	echo $form->close();
echo '</div>';
echo '</div>';

include('../../includes/footer.php');