<?php
 $validerror ="";
if($_POST){
  $email = $_POST['email'];
  $password =$_POST['password'];


  $login = new Login;
  
  $login->__constructor($email,$password);
  
  // -------get user data from data base -----------
  
  $data = new SqlHandler;
  $data->setTable("users");
  $arrayUserData=$data->selectRecord($email);
  // ---------check user credentials ---------------------
  $login->checkUserData($arrayUserData['email'],$arrayUserData['password']);

  $date=isset($_POST['date_expiration'])?$_POST['date_expiration']:"";
  $cvv=isset($_Post['cvv'])?$_Post['cvv']:"";
  $cardNumber= isset($_POST['credit'])?$_POST['credit']:"";
  
   $payment=new Payment;
   $payment->__constructor($cardNumber,$date,$cvv);
   $validerror=$payment->paymentValidation();

}
// unset($_SESSION['purchased']);




  
 ?>
<html lang="en">

<body>

<form action="" method="POST">
<section class="gradient-custom">
        <div class="container my-5 py-5">
          <div class="row d-flex justify-content-center py-5">
            <div class="col-md-7 col-lg-5 col-xl-4">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-4">
                  <form>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <div class="form-outline">
                        <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                          placeholder="Card Number" minlength="19" maxlength="19"/>
                        <!-- <label class="form-label" for="typeText">Card Number</label> -->
                      </div>
                      <img src="https://img.icons8.com/color/48/000000/visa.png" alt="visa" width="64px" />
                    </div>
                    <div class="d-flex justify-content-between align-items-center pb-2">
                      <div class="form-outline">
                        <!-- <label class="form-label" for="typeExp">Expiration</label> -->
                        <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YYYY"
                          size="7" id="exp" minlength="7" maxlength="7" />
                      </div>
                      <div class="form-outline">
                        <!-- <label class="form-label" for="typeText2">Cvv</label> -->
                        <input type="password" id="typeText2" class="form-control form-control-lg"
                           size="1" minlength="3" maxlength="3" placeholder="Cvv"/>
                           <!-- placeholder="&#9679;&#9679;&#9679;" -->
                      </div>
                      <br>
                      <div class="form-outline">
                        <label class="form-label" for="typeText2">  </label>
                        <button type="button" class="btn btn-info btn-lg btn-rounded">
                        <i class="fas fa-arrow-right"></i>
                      </button>
                      </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center pd-2" >
                        <!-- <p class="form-label" for="typeExp">Scan QR Code</p> -->
                        <!-- <br><br> -->
                        <?php
   use chillerlan\QRCode\QRCode;
   use chillerlan\QRCode\QROptions;

    $data = 'http://localhost/phpProjectLV/index.php?view=download';
// quick and simple:
// print_r((new QRCode)->render("hi")) ;
echo '<img src="'.(new QRCode)->render($data).'" alt="QR Code" />'."<br>";
?>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</form>

    
</body>
</html>



















