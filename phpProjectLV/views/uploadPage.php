<?php
if($_FILES){

  $fileName=$_FILES['myfile']['name'];
  $destination=SITE_ROOT .'\\'.$fileName;
  $extension=pathinfo($fileName, PATHINFO_EXTENSION);
  $temp=$_FILES['myfile']['tmp_name'];
  $size=$_FILES['myfile']['size'];
 $content=!empty(file_get_contents($fileName))?file_get_contents($fileName):"";
  $uploading = new Upload;
  $uploading->__constructor($fileName,$destination,$extension,$temp,$size,$content);
  
  $uploading->checkZipFile();
  $uploading->transferFileFromTempAndUpload();
  $connection = new SqlHandler;
  $connection->insertNewProduct($fileName, $size, $content);
   

}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form action="./index.php?view=uploadPage" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>
        </form>
      </div>
    </div>
  </body>
</html>