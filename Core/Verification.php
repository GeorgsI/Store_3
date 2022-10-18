<?php
namespace Core;


class Verification {
    public $data;
   

    public static function out($data){
        $data = trim($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);
        
        return $data;
        
       
    }
}
