<?php
$target_dir = "../uploads/";
$target_file = $target_dir . basename($_FILES['photoss']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,  PATHINFO_EXTENSION));

if($_FILES['photoss']['size'] > 500000) {
	echo "Photo are too big";
	$uploadOk = 0;
}

if($uploadOk == 0) {
	echo "Your file is not uploaded";
} else {
	if (move_uploaded_file($_FILES['photoss']['tmp_name'], $target_file)) {
		header("location:fileuploaded.html");
	} else {
		echo "Error with upload.";
	}
}