<?php

namespace app\models;

class AjaxAuthorization extends Model{
    
   
    function execute($action, $parameters)
    {
        parent::execute($action, $parameters);
       // $this->data = 'Данные страницы page1';
        
        $login =  $parameters[2]['login'] ;
        $password =  $parameters[2]['password'] ;
        
         header("Content-type: text/plain; charset=UTF-8");


        if (!empty($login) && !empty($password))
        {
           // echo '<p>' . $login . ', здравствуйте' . '</p>';


          /*  if(mb_strlen($password) > 10){
                $answer['error'] = 'Ошибка.';
                $answer['message'] = 'Длинный пароль.';
            }
            elseif(mb_strlen($password) < 8){
                $answer['error'] = 'Ошибка.';
                $answer['message'] = 'Короткий пароль не меншье 8.';
            }
            elseif(!preg_match("/^[A-Za-z0-9\_\*\.]{8,10}$/", $password)){
                $answer['error'] = 'Ошибка.';
                $answer['message'] = 'В поле пароль не допустимый символ.';
            }
            elseif(mb_strlen($login) > 10){
                $answer['error'] = 'Ошибка.';
                $answer['message'] = 'Длинный логин';
            }
            elseif(mb_strlen($login) < 3){
                $answer['error'] = 'Ошибка.';
                $answer['message'] = 'Короткий логин не меншье 3';
            }
            elseif(!preg_match("/^[A-Za-z0-9]{3,10}$/", $login)){
                $answer['error'] = 'Ошибка.';
                $answer['message'] = 'В поле логин не допустимый символ.';
            }
            else{*/

                $sql = "SELECT `id_user`, `Name`, `patronymic`, `surname`, `email`, `login`, `password`, `userPhoto_id_userPhoto`, `userStatus_id_userStatus` FROM `user` WHERE `login` = :login";


                $arguments = ['login'=>$login];   
                $result = $this->connectDB->read($sql, $arguments);

                var_dump($result);




               if(isset($result[0]['login']) == $login && password_verify($password, $result[0]['password'])){

                    $status = (int)$result[0]['userStatus_id_userStatus'];

                    if($status == 1){
                        //echo "user";
                        $_SESSION['statusUser'] = "user";
                       header('Location: '.'User');
                    }
                    elseif($status == 2){
                        $_SESSION['statusUser'] = "manager";
                        header('Location: '.'Manager');
                    }
                    elseif($status == 3){

                       $_SESSION['statusUser'] =  "admin";
                       header('Location: '.'Admin');
                    }
                    //echo 4444;  
                }
                else{
                     echo "Ошибка";
                }


            }   

       /* } else {
            echo '<p>Ошибка при авторизации, заполниете поля.</p>';
        }*/

    }       

    public function getData()
    {
        return $this->data;
    }
    
    
    
    
}