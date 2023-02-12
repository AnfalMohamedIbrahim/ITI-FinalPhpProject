# can we make the validation in an interface and the 
#email and password inherit from it , why ?!


interface Validation{

    function checkDataInDataBase($data);
    function validation();
}


<!-- email -->

class EmailValidation implements Validation{

    private $email;

    private $emailRegex = "^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$";

    function __constructor($email){
        $this->email = $email;
       
         }
    function checkDataInDataBase($data){
        if($data==$this->email ){
            header("Location:./index.php?view=productDetails");
            exit();
        }else{
            header("Location:./index.php?view=login &error=check your Credentials again");
        }
    }
    function validation(){
        if($this->email == $this->emailRegex){
            return $this->email;
         }
    }



<!-- password  -->


class PasswordValidation implements Validation{

    private $password;
 
    //   ------------------------------------//
      
      private $passwordRegex = "^(?=.\\d)(?=.[a-z])(?=.[A-Z])(?=.[#$^+=!*()@%&]).{8,16}$";
      //Between 8 & 16 characters
     // Has a lower case letter
     // Has an upper case letter
     // Has a number
     // And has a symbol

     
    function __constructor($password){
        $this->password = $password;
       
         }
    function checkDataInDataBase($data){


    }
    function validation(){
        
    }
}