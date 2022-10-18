<?php
namespace Core;

class ServiceOut {
    public $incomingData;
    public $mode;

    public static function out($incomingData, $mode){
 
        switch ($mode){
            case 1:
                echo "<pre>";
                var_dump($incomingData);    
                echo "</pre>"; 
                break;
            case 2:
                echo "<pre>";
                print_r($incomingData);    
                echo "</pre>";    
            default:
                echo "<pre>";
                echo($incomingData);    
                echo "</pre>";             
        }
    }
}
