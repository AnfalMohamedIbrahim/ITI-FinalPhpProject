<?php


if($_POST){

    $email = $_POST['email'];
    $password=sha1($_POST['password']);
    $login = new Login;
    $login->__constructor($_POST['email'],sha1($_POST['password']));
    
    // -------get user data from data base -----------
    
    $data = new SqlHandler;
    $data->setTable("users");
    $arrayUserData=$data->selectRecord($email);

    print_r($_POST);
    
    echo $arrayUserData['password'] ,$arrayUserData['email'];

    // ---------check user credentials ---------------------
    $login->checkUserData($arrayUserData['email'],$arrayUserData['password']);
    $userEmail= isset($_SESSION['email'])?$_SESSION['email']:"";


    // ----------------check if user has the availability or not ------------
    if(!empty($userEmail)){

  $orderArray=$data->selectOrder($userEmail);
  $count= $_SESSION["count"]= $orderArray['downloadsCounter'];
      
  $verified = $_SESSION['purchased'];
$table='products';
$data->setTable($table);
$product= $data->selectRecordById(1);
$productName=$product['name'];
$fileDbContent= $product['content'];

$download = new download;
$download->__constructor($count,$verified,$fileDbContent);
$download->verified();
$count= $download->setNewCount();
$_SESSION["count"]=$count;




}

 
 

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <table class="table table-dark table-striped">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">File Name</th>
                    <th scope="col">Size</th>
                    <th scope="col">your Number Of download</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $productName ?></th>
                    <td><?php echo $product['size']?></td>
                    <td><?php echo $count?></td>
                  </tr>
                </tbody>
              </table>
    </div>
    
      </table>
</body>
</html>