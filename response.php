<?php
namespace store;
///use core\ConnectDB;
header("Content-type: text/plain; charset=UTF-8");



class response{
    public $login;
    public $password;
    
    
    public function __construct($login,$password) {
       $this->login = $login;
       $this->password = $password;
       
       $this->verf($this->login, $this->password );
    }
    
    
    public function verf(){
        
        if (!empty($this->login) && !empty($this->password)) 
        {
                echo '<p>'.$this->login.', здравствуйте' . '</p>';


        }
    }
    
}
    





















/*
header("Content-type: text/plain; charset=UTF-8");
include_once './Core/ConnectDB.php';

if (!empty($_POST['login']) && !empty($_POST['password'])) 
{
   // echo '<p>' . $_POST['login'] . ', здравствуйте' . '</p>';
    
   /* include_once './settings.php';*/
   //include_once './Core/ConnectDB.php';
    
    
    
 /*   if(mb_strlen($_POST['password']) > 10){
        $answer['error'] = 'Ошибка.';
        $answer['message'] = 'Длинный пароль.';
    }
    elseif(mb_strlen($_POST['password']) < 8){
        $answer['error'] = 'Ошибка.';
        $answer['message'] = 'Короткий пароль не меншье 8.';
    }
    elseif(!preg_match("/^[A-Za-z0-9\_\*\.]{8,10}$/", $_POST['password'])){
        $answer['error'] = 'Ошибка.';
        $answer['message'] = 'В поле пароль не допустимый символ.';
    }
    elseif(mb_strlen($_POST['login']) > 10){
        $answer['error'] = 'Ошибка.';
        $answer['message'] = 'Длинный логин';
    }
    elseif(mb_strlen($_POST['login']) < 3){
        $answer['error'] = 'Ошибка.';
        $answer['message'] = 'Короткий логин не меншье 3';
    }
    elseif(!preg_match("/^[A-Za-z0-9]{3,10}$/", $_POST['login'])){
        $answer['error'] = 'Ошибка.';
        $answer['message'] = 'В поле логин не допустимый символ.';
    }
    else{*/
    
    
        
    /*
      
        $db = new ConnectDB('localhost', 'root', 'root' ,'store', 'utf8');

        $sql = "SELECT `id_user`, `Name`, `patronymic`, `surname`, `email`, `login`, `password`, `userPhoto_id_userPhoto`, `userStatus_id_userStatus` FROM `user` WHERE `login` = :login";

            
        $arguments = ['login'=>$_POST['login']];   
        $result = $db->read($sql, $arguments);
       // echo "rows:".(int)$result;
        var_dump($result);
       
        
        
        
       if(isset($result[0]['login']) == $_POST['login'] && password_verify($_POST['password'], $result[0]['password'])){
           
            $status = (int)$result[0]['userStatus_id_userStatus'];
            
            if($status == 1){
                echo "user";
                $_SESSION['statusUser'] = "user";
            }
            elseif($status == 2){
                $_SESSION['statusUser'] = "manager";
            }
            elseif($status == 3){
                
               $_SESSION['statusUser'] =  "admin";
            }
            //echo 4444;  
        }

       else{
            echo "Ошибка";
        }

} else {
    echo '<p>Ошибка при авторизации, заполниете поля.</p>';
/*}*/

