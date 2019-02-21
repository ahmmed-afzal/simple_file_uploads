<?php
if (isset($_FILES['file'])) {
  $file = $_FILES['file'];
  $name = $file["name"];
  if(!file_exists('uploads')){
  mkdir('uploads');
  }
  $destination = 'uploads/'.$name;
  $filename = $file["tmp_name"];
  move_uploaded_file($filename, $destination);
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Simple Image Uploads</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
        <form class="mt-5" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="file">Example file input</label>
            <input type="file" class="form-control-file" name="file" id="file">
          </div>

          <div class="form-group">
              <button type="submit" class="btn btn-warning">button</button>
          </div>
        </form>
    </div>
  </body>
</html>
