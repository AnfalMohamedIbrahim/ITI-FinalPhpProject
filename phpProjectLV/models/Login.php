<?php



class  Login {

      private $email;
      private $password;
      
       
       function __constructor($email,$password){
       $this->$email = $email;
       $this->password =$password ;
      
       }
    //    ------------set Cookies ------------------
       private function setRemmeberCookie($email,$password){
        if(!empty($_POST['Remember'])){
            setcookie('email',$email,time()+3600*24*30);
            setcookie('Password',$password,time()+3600*24*30);
        }else{
            if(isset($_COOKIE['email'])) 
            { 
                 setcookie('email','');
            }
            if(isset($_COOKIE['Password']))
            { 
                 setcookie('Password','') ;
            }
        }
    }



// --------------------------check the user data --------------------------------
    public function checkUserData($dbEmail,$dbPassword)
    {
          if($this->email ==$dbEmail){
                        if( $this->password == $dbPassword){

                            $this->setRemmeberCookie($dbEmail, $dbPassword);
                           $_SESSION['userEmail']=$this->email;
                            header("Location:./index.php?view=payment");
                             exit;
                            }
                            else{
                                header("Location:./index.php?error = check your credintials &view=login   ");
                              exit;
                            }          
            }

    }




}