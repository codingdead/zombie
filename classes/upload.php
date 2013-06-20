<?php

class Upload{

	public static function files_to($folder = ''){

		for($i=0; $i < count($_FILES['file']['tmp_name']); $i++){

			$temp_file = file_get_contents($_FILES['file']['tmp_name'][$i]);

			$name = $_FILES['file']['name'][$i];

			file_put_contents("$folder/$name", $temp_file);

		}

	}
}