<?php
namespace app\models;
use \PDO;
class CardProduct extends Model{

    function execute($action, $parameters)
    {
        parent::execute($action, $parameters);
        //$this->data = 'Данные страницы Promo';
        //include_once('settings.php');
       
        
        
        
        
        
        
        $goods = "SELECT `id_goods`, `photo` ,`title_goods`, `code`, `YN`, `priceRose`, `promoPrise`, `infoAdd`, `brends_id_brends`, `category_id_category`, `rating`, `description`  FROM `goods` WHERE  id_goods = :num";

        $specifications = "SELECT * FROM  specificationsvalue
                INNER JOIN specificationscategory
                ON specificationscategory.id_specificationsCategory = specificationsvalue.specificationsCategory_id_specificationsCategory
                INNER JOIN specificationstitle
                ON specificationstitle.id_specificationsTitle = specificationscategory.specificationsTitle_id_specificationsTitle
                WHERE `goods_id_goods`=:num";
        
        $photoGoods = "SELECT photogoods.id_photoGoods, photogoods.photoLink, photogoods.photoTitle, photogoods.goods_id_goods FROM `photogoods` WHERE photogoods.goods_id_goods = :num";
        
        
         
        $allData = [];
        $sql = ["goods"=>$goods, "photoGoods"=>$photoGoods, "specifications"=>$specifications];
        $arguments = ['num'=> (int)$parameters[2]]; 
        

        /*for($i=0; $i<count($sql);$i++){
            //array_push($allData, $this->connectDB->$action($sql[$i], $arguments));  
            $request = $this->connectDB->$action($sql[$i], $arguments);
            $allData += [$i=>$request];
        }*/

        forEach($sql as $key => $value){
            $request = $this->connectDB->$action($value, $arguments);
            $allData += [$key => $request];
        }

        $this->data = $allData;
    }
    
    
   

    public function getData()
    {
        
        return $this->data;
    }
    
}
    

