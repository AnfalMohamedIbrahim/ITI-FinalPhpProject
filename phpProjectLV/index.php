<?php
require_once("./vendor/autoload.php");
use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
$router  = new Router;
$router->route();
















// tried settings

// $page=isset($_GET["view"])?$_GET["view"]:"./views/notFoundPage.php";


// $connection = new SqlHandler;
// $connection->__construct();


// # using chillerlan\QRCode but there is an error i don't know why is that 
// # i tried it before it was working but now it is not ?!!
// #the problem was an extension that is not found 
// $data = 'localhost/phpProject';
// // quick and simple:
// // print_r((new QRCode)->render("hi")) ;
// echo '<img src="'.(new QRCode)->render($data).'" alt="QR Code" />'."<br>";


// $uploadFile = new upload;
// $uploadFile->__constructor();
// $uploadFile->checkZipFile();
// $fileName=$uploadFile->transferFileFromTempAndUpload();
// $size=$uploadFile->getSize();
// $content=$uploadFile->getContent();


// // uploading to Data base 
// $connection->insertNewProduct($fileName,$size,$content);




