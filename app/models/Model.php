<?php
namespace app\models;
use core\ConnectDB;


class Model {
    protected $action;
    protected $data;
    protected $parameters;
    public $connectDB;

    public function __construct()
    {
        
    }

    public function execute($action, $parameters)
    {
        include_once('settings.php');
       
        $this->connectDB = new ConnectDB(HOST, USER, PASSWORD ,DATABASE, CHARSET);
        $this->action = $action;
        $this->parameters = $parameters;
    }

    public function getData()
    {
        return $this->data;
    }
    
    
    
}
