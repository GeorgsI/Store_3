<?php
namespace app\controllers;
//header("Content-type: text/plain; charset=UTF-8");
class AjaxAuthorization {
    /*private $page = 'Page1';//имя страницы по умолчанию page1
    private $action = 'read'; //CRUD-операции, по умолчанию read
    private $parameters; //массив остальных параметров запроса
    public $method;*/
    
    public $parameters;
    
    

    
  
    
    
    
    
    public function __construct($arr)
    {
        
        $this->parameters = $arr;
        $this->analyzeRequest($this->parameters);
    }
    
    
    protected function analyzeRequest()
    { 
        //var_dump($this->parameters);
        if (!empty($this->parameters[0]))
        { 
            $this->page = $this->parameters[0];
            unset($this->parameters[0]);
        }
        if (!empty($this->parameters[1]))
        {    $this->method = $this->parameters[1];
            unset($this->parameters[1]);
        }

        /*var_dump($this->parameters);
        var_dump($this->action);
        var_dump($this->page);*/
        
        //var_dump($this->method);
        $method = $this->method;
        $this->$method('AjaxAuthorization', 'read', $this->parameters);
    }

    public function send($class, $action, $params )
    {
        
        var_dump($this->parameters);
        
        //Модель:
        $className = '\app\models\\'.$class;
        $model = new $className();
        $model->execute($action,$params);
        
        //Вид:
    /*    $className = '\app\views\\'.$class;//имя класса view с пространством имен (например /views/page1)
        $view = new $className();
        $view->render($model->getData());*/
    }
    
    
}
