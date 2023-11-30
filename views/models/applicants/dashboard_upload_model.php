<?php
session_start();


function image_Upload()
{
	$Insert_file_name = NULL;
	$file_name = $_FILES['passport']['name'];
	$file_temp = $_FILES['passport']['tmp_name'];
	$file_size = $_FILES['passport']['size'];
	$file_type = $_FILES['passport']['type'];

	$file_extension = strtolower(pathinfo(
		$file_name,
		PATHINFO_EXTENSION
	));
	$valid_extension = array("png", "jpeg", "jpg");

	if (in_array($file_extension, $valid_extension)) {


		$newfilename = $_SESSION['auth']['username'] . "_passport." . $file_extension;
		$location = "../../../public/images/passport/" . $newfilename;

		if ($file_size < 5242880) {
			if (move_uploaded_file($file_temp, $location)) {

				$Insert_file_name = $newfilename;
			}
		} else {
			$Insert_file_name = NULL;
			$_SESSION['error'] = 'invalid passport or too large to upload!';
		}
	} else {

		$Insert_file_name = NULL;
		$_SESSION['error'] = 'passport not accepted';
		// print('file not accepted ');
	}

	return $Insert_file_name;
}

function Document_upload($input)
{

	

	$file_extension = strtolower(pathinfo(
		$file_name,
		PATHINFO_EXTENSION
	));



	$newfilename = $_SESSION['auth']['username'] . "_" . $input . "." . $file_extension;
	$location = "../../../public/documents/" . $newfilename;

	if ($file_size < 5242880) {
		if (move_uploaded_file($file_temp, $location)) {

			$Insert_file_name = $newfilename;
		}
	} else {
		$Insert_file_name = NULL;
		$_SESSION['error'] = 'passport too large to upload!';
	}
	return $Insert_file_name;
}
