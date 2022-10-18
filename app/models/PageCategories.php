<?php

namespace app\models;

class PageCategories extends Model{

    function execute($action, $parameters)
    {
        parent::execute($action, $parameters);
        //$this->data = 'Данные страницы Promo';
        //include_once('settings.php');
       
      
        
        
    $sql = "SELECT `id_closureTable`, `descendant_id_category`, `ansestor` FROM `closuretable` ";
    $t = $this->connectDB->$action($sql);

    $this->data =  $t ;
    }
    
    
   

    public function getData()
    {
        
        return $this->data;
    }
}