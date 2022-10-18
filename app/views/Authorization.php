<?php
namespace app\views;

class Authorization implements View{
    public function render($data)
    {
    
       
      
        $header = new templates\Header();
        $header->render();
        
        echo 'PAGE 2<br/>';
        echo "<main class='main'>";
        
        
        $Authorization = new templates\FormAuthorization();
        $Authorization->render();
        
         echo '</main>';
        
        $footer = new templates\Footer();
        $footer->render();
   
    }
    
    
    
}
