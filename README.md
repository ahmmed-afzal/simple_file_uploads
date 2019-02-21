To upload file in php you have to follow some rule....

	1. One of the building function to upload file is , 
	move_uploaded_file($filename, $destination);
	first parameter is the temporary name and second one is the destination where we want to upload.

	2. we have to caught  the file input file by
	isset($_FILES['file'] and put into $file = $_FILES['file'] ['file' is the name where given into form];
	
	3.we have to caught the upload file name by 
	$name = $file["name"];

	4. we have to decide where want to upload our file
	$destination = 'uploads/'.$name; [uploads is the folder name];

	5. now last one is we need make temporary name given input file
	$filename = $file["tmp_name"];