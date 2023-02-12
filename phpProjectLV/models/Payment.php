
<?php
//validation on credit card [visa,master] == 16
//valid date    current date =< input date 
//cvv == 3
       

class  Payment {
    private $date;
    private $cvv;
    private $cardNumber;
    public $error="";


    function __constructor($cardNumber,$date,$cvv)
    {
        $this->cardNumber= $cardNumber;
        $this->date = $date;
        $this->cvv =$cvv;
    }

//_____________________________cvv______________________
    public function cvvValidation(){
        if(strlen($this->cvv) != 3  || $this->cvv<0  || empty($this->cvv) ||!is_numeric($this->cvv) )
        {
         return $this->error="cvv is invalid";
        }
        else return true;
     
    }
//________________________date expiration_______________
    public function dateExpiration(){
    if(!empty($this->date)){
 
     $date_valid=explode("/", $this->date);
     $current_date=explode("/", date("m/y"));

     if(  $date_valid[1] = $current_date[1] )
     {
         if( !($date_valid[0]>= $current_date[0]))
      
         return $error="invalid expiration date";
     }

    else if ($date_valid[1] < $current_date[1] ) 
    { 
    return $this->error="please enter date expiration";
    }
    else return true;
 }
}
//________________________validate card_________________
public function cardValidation()
{  
   $cardtype = array(
       "visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
       "mastercard" => "/^5[1-5][0-9]{14}$/",
   );
    if(strlen($this->cardNumber) == 16 && $this->cardNumber>0  && !empty($this->cardNumber) && is_numeric($this->cardNumber))
   {

    //  if (preg_match($cardtype['visa'],$cardNumber))
    //  {
    //   $type='visa';
    //    return $_SESSION['purchased']="true";
    //   }
    //   else if (preg_match($cardtype['mastercard'],$cardNumber))
    //  { $type='mastercard';
    //    return $_SESSION['purchased']="true";
    //  }
    //  else
    //  { 
    //      return $_SESSION['purchased']="false";
    //  } 
    return true;
     } 
     else{ 
        return $this->error="enter valid card number";

         }   
 }

public function paymentValidation(){
    if($this->cardValidation() && $this->dateExpiration() && $this->cvvValidation())
{
    $_SESSION['purchased']="true";
    
    header("location:./index.php?view=download");
}
else{
    $_SESSION['purchased']="false";
    header("location:./index.php?view=payment");
    return $this->error;
}
}
}
   

?>


















