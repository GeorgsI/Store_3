<?php
namespace app\models;
//use core\ConnectDB;
use \PDO;
class PromoAll extends Model{

    function execute($action, $parameters)
    {
        parent::execute($action, $parameters);
        //$this->data = 'Данные страницы Promo';
        //include_once('settings.php');

        $sql = "SELECT DISTINCT id_goods,`title_goods`,`code`,`YN`,`priceRose`,`photo`, label,`promoPrise` FROM `goods`
            INNER JOIN kitpromo
            ON goods.id_goods = kitpromo.goods_id_goods
            INNER JOIN promolabel
            ON kitpromo.goods_id_goods = promolabel.id_promoLabel";
        $t = $this->connectDB->$action($sql);

        $this->data =  $t ;
    }
    
    
   

    public function getData()
    {
        
        return $this->data;
    }
    
}

