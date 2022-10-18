<?php
namespace app\models;


class Authorization extends Model{
    function execute($action, $parameters)
    {
        parent::execute($action, $parameters);
        $this->data = 'Данные страницы Authorization';
    }
    


    public function getData()
    {
        return $this->data;
    }
}
