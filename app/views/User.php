<?php

namespace app\views;

class User implements View{
    public function render($data)
    {
        $header = new templates\Header();
        $header->render();
        
        echo 'PAGE User<br/>';
        echo "<main class='main'>";
        
        
      
        
        echo '</main>';
        
        $be = new templates\Footer();
        $be->render();

    }   
}
