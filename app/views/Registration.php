<?php
namespace app\views;

class Registration implements View{
    public function render($data)
    {
        $header = new templates\Header();
        $header->render();
        
        echo 'PAGE 3<br/>';
        echo "<main class='main'>";
        
        
        $bee = new templates\FormRegistration();
        $bee->render();
        
        echo '</main>';
        
        $be = new templates\Footer();
        $be->render();

    }   
}
