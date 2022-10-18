<?php
namespace app\views;

class CardProduct implements View{
    public function render($data)
    {
        $header = new templates\Header();
        $header->render();
        
       
        echo "<main class='main'>ррррррррррррррррррррррррррррррррррррррррррррр";
        
       // var_dump($data);
        
        $cart = new templates\CardProduct();
        $cart->render($data);
       
        
        echo '</main>';
        
        $be = new templates\Footer();
        $be->render();

    }   
    
    
    
    
}
