<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">Not Found or You re not Authorized anymore to download the file </h1>
    <br>
    <h2 align="center">Try to contact the admins to join Us again want to hear from u soon :) </h2>
 <div align="center"> <?php
   use chillerlan\QRCode\QRCode;
   use chillerlan\QRCode\QROptions;

    $data = 'send an email to : anfal.mohamed38@gmail.com';
// quick and simple:
// print_r((new QRCode)->render("hi")) ;
echo '<img src="'.(new QRCode)->render($data).'" alt="QR Code" />'."<br>";
?>
    </div> 
</body>
</html>