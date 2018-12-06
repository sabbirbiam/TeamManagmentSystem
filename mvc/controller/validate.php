<?php
session_start();
     
    function is_valid_mobile($mobile){
        $mobile = str_replace(" ","",$mobile);
        $mobile = str_replace("-","",$mobile);
        if(preg_match('/^(0088|\+88)?(01)[156789]{1}[0-9]{8}$/',$mobile))
            return true;
        else
            return false;
    }

    function is_valid_email($email){
        if(preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/',$email))
            return true;
        else
            return false;
    }

    function is_valid_birthdate($date,$month,$year){
        if($month=="Jan" || $month=="Mar" || $month=="May" || $month=="Jul" || $month=="Aug"  || $month=="Oct"  || $month=="Dec"){
            if($date<=31){
                return true;        
            }
        }
        if($month=="Apr" || $month=="Jun" || $month=="Sep" || $month=="Nov" ){
            if($date<=30){
                return true;           
            }
        }
        if($month=="Feb"){
            if(($year%400==0 || $year%100!=0) && ($year%4==0)){
                if($date<=29){
                    return true;
                }    
            }
            else if($date<=28)
                return true;
        }
        return false;
    }

    function is_valid_password($p1){
        $len=strlen($p1);
        if($len<9){
            return false;
        }
        if(preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $p1)){
             return true;
        }
        else
            return false;        
    }

     

		
        if (!empty($_POST)){
        $firstname = $_REQUEST['firstname'];
        $lastname = $_REQUEST['lastname'];
        $email = $_REQUEST['email'];
        $p1 = $_REQUEST['passone'];
        $p2 = $_REQUEST['passtwo'];
        $phone = $_REQUEST['phone'];
        $dob_day = $_REQUEST['day'];
        $dob_month = $_REQUEST['month'];
        $dob_year = $_REQUEST['year'];
        $gender=null;
        if (isset($_POST['gender'])) {
             $gender = $_REQUEST['gender'];
        }
        else{
            $gender=null;
        }

    if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($p1) && !empty($p2) && !empty($phone) && $gender!=null) { 
        if(is_valid_birthdate($dob_day,$dob_month,$dob_year)){
            $dob=$dob_day."-".$dob_month."-".$dob_year;
            if (is_valid_mobile($phone)) {
                if (is_valid_email($email)){
                    if ($p1==$p2) {
                        if(is_valid_password($p1)){
                             $response_message = "Registration Successfully Done!!!";
							 $_SESSION["fn"]=$firstname;
                             $_SESSION["ln"]=$lastname;
                             $_SESSION["em"]=$email;
                             $_SESSION["pass"]=$p1;
                             $_SESSION["ph"]=$phone;
                             $_SESSION["dob"]=$dob;
                             $_SESSION["gen"]=$gender;
                            
                            header("Location: ../model/save_reg.php");
                        }
                        else{
                            $_SESSION["response_message"] = "Passwords Should have more than 8 charcters and at least one special Character";
                            header("Location: ../view/registration.php");
                        }
                    }
                    else{
                        $_SESSION["response_message"] = "Passwords did not match!";
                        header("Location: ../view/registration.php");
                    }
                }
                else{
                    $_SESSION["response_message"] = "The given email is not valid!";
                    header("Location: ../view/registration.php");
                }
            }
            else{
                $_SESSION["response_message"] = "The given mobile is not valid!";
                header("Location: ../view/registration.php");
            }
        }
        else{
            $_SESSION["response_message"] = "The given Birthdate is not Correct!";
            header("Location: ../view/registration.php");
        }  
    } 
    else{
            $_SESSION["response_message"] = "Required data missed!";
            header("Location: ../view/registration.php");
        }
    }
?>

