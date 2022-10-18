<?php
namespace router;

class Router implements IRouter{
    private $routes;
    private $url;
    
    public function __construct($url, $routes) {
        $this->routes = $routes;
        $this->url = $url;

    }
    public function getRoute(){
        
        //var_dump($this->routes);
       var_dump($this->url);
       
       
       
       
      
       
       
       
       //Выбор массива
        foreach($this->routes as $reg => $value) {

           if(preg_match($reg, $this->url)){

               
               
                 if(substr_count($this->url, '/') > 0 ){

                   $res = explode('/', $this->url);
                   $varUrl = array_slice($res, 1);
                   $value2 =  array_slice($value, 0, 2);
                   $value = array_merge($value2,  $varUrl);
  
                }
                var_dump($value);
                
                return $value;

            }     
       }
       exit(404);
    }
    
    
    
    
    
    
    
    
}
