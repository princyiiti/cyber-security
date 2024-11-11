<?php 
namespace App\Libraries;


class Hash
{

    public static function check($enter_pass ,$db_password){
        if(password_verify($enter_pass ,$db_password)){
            return true;
        }else{
            return false;
        }
    }
}
?>