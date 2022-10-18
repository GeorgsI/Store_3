<?php
namespace app\models;
use \PDO;
class Page1 extends Model{
    
   
    function execute($action, $parameters)
    {
        parent::execute($action, $parameters);
        $this->data = 'Данные страницы page1';
        
        
        
        
        
        $categories = "SELECT closureTable.id_closureTable, closureTable.descendant_id_category, closureTable.ansestor, category.title, category.photoGoods_id_photoGoods, photogoods.photoLink, photogoods.photoTitle, category.id_category FROM `closuretable`
            INNER JOIN category
            ON closuretable.ansestor = category.id_category 
            INNER JOIN photogoods
            ON  category.photoGoods_id_photoGoods = photogoods.id_photoGoods";
        $t = $this->connectDB->$action($categories);
        
        
        $this->data =  $t ;
        
        var_dump($t);
        
        
    }
    

   

    public function getData()
    {
        return $this->data;
    }
    
}
