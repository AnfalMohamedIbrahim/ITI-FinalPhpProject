<?php



?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/logIn.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>

        <section class="vh-1000" style="background-color: #9A616D;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                  <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                      <div class="col-md-6 col-lg-5 d-none d-md-block">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                          alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                      </div>
                      <div class="col-md-6 col-lg-7 d-flex align-items-center">
                        <div class="card-body p-4 p-lg-5 text-black">
          
                          <form action="./index.php?view=login" method="post">
                      
                            <div class="d-flex align-items-center mb-3 pb-1">
                              <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                              <span class="h1 fw-bold mb-0">Logo</span>
                            </div>
          
                            <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Join Us NOW!</h5>

                            <div class="form-outline mb-4">
                              <input type="text" id="form2Example17" class="form-control form-control-lg" name="userName" placeholder="Name"/>
                              <!-- <label class="form-label" for="form2Example17">Name</label> -->
                            </div>

                            <div class="form-outline mb-4">
                                <p style="color: red;"><?php echo isset($_GET['emailError'])?$_GET['emailError']:""?></p>
                              <input type="email" id="form2Example17" name="email" class="form-control form-control-lg" placeholder="Email address"/>
                              <!-- <label class="form-label" for="form2Example17">Email address</label> -->
                            </div>
          
                            <div class="form-outline mb-4">
                            <p style="color: red;"><?php echo isset($_GET['passwordError'])?$_GET['passwordError']:""?></p>
                              <input type="password" id="form2Example27" name="password" class="form-control form-control-lg" placeholder="Password"/>
                              <!-- <label class="form-label" for="form2Example27">Password</label> -->
                            </div>
          
                            <div class="pt-1 mb-4">
                              </div>
                              
                              <button type="submit" class="btn btn-dark btn-lg btn-block" >register</button>
                          </form>
          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>    
</body>
</html>