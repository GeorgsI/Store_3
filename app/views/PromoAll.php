<?php
namespace app\views;

class PromoAll implements View{
    public function render($data)
    {
        
        /*echo $data . '<br/>';
        echo '<a href="index.php?page=page2">page 2</a> <a href="index.php?page=page3">page 3</a>';*/
        
        
        
        $header = new templates\Header();
        $header->render();
       
        
        echo "<main class = 'main'>";
        
       
        $content = new templates\PromoALL();
        $content->render($data);
        
        
        
        
        //var_dump($data);
        
        
       
        
        
        echo "</main>";
        
        $footer = new templates\Footer();
        $footer->render();
        
        echo "<script src='javaScript/ajax.js'></script>";
    }
}
