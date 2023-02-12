<?php


class Register {

    private $data;
    private $userName;
    private $email;
    private $password;
    private $passwordRegex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,16}$/";
    //Between 8 & 16 characters {8,16}
   // Has a lower case letter (?=.*?[a-z])
   // Has an upper case letter  (?=.*?[A-Z])
   // Has a number  (?=.*?[0-9])
   // And has a symbol  (?=.*?[#?!@$%^&*-])

    function __constructor($userName,$email,$password){
        $this->userName=$userName;
        $this->email=$email;
        $this->password=$password;

    }
    

    private function emailValidation(){
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
           return true;
          } else {
            header("Location:./index.php?emailError=email isnot valid & view=registeration");
          }
    } 
    private function passwordValidation(){
        if ( preg_match($this->passwordRegex,$this->password )) {
           return true;
          } else {

            header("Location:./index.php?passwordError=Password is weak & view=registeration");
          }
    } 

    private function getEmail(){
        return $this->email;

    }
    private function getPassword(){
        return sha1($this->password);
    }
private function saveUserName()
{
    $_SESSION['userName']=$this->userName;   
}
   
    public function insertIntoDataBase()
    {
        if($this->emailValidation() && $this->passwordValidation()){
         $dbEmail= $this->getEmail();
          $dbPassword=$this->getPassword();
          $this->data= ["email"=>$dbEmail,"password"=> $dbPassword];
          $this->saveUserName();
          return  $this->data;
        }
        
    }

}




