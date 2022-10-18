<?php session_start();
include_once('routes.php');
        spl_autoload_register(function($class){
            $class =  str_replace('\\', '/', strtolower($class)).'.php';
                    
           
            //echo $class;
            if (file_exists($class))
                return include_once($class);
                //echo 1;
            else
               //echo 2;
                return false;
            
            
        });

        
    
     
     
     
     
     
    $url = $_SERVER['REQUEST_URI'];
    $baseURL = dirname($_SERVER['SCRIPT_NAME']);
    if(strpos($url, $baseURL) === 0){
        $url = substr($url, strlen($baseURL));
    }
  
    $url = trim($url, '/');
  
    
  
     
    if(substr_count($url, '/') > 1 ){
        
       // echo "substr". strpos($url, '/').'</br>';
        $url = trim(substr($url,  strpos($url, '/')), '/');
        
    }
      
 

    
    echo "url".$url.'</br>';
     
   
     //echo "substr_count".substr_count($url, '/').'</br>';
    echo "Чистый ".$url.'</br>';
    
    
    echo "REQUEST_URI:".$_SERVER['REQUEST_URI'].'</br>';
    echo "SERVER:".dirname($_SERVER['SCRIPT_NAME']);
    
    $r = new router\Router($url, $return);
    $x = $r->getRoute(); 
    //var_dump($x);
    $class = 'app\controllers\\'.$x[0]; 
    $controller = new $class($x);
  

    
  
   
   
  