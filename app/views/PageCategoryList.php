<?php
namespace app\views;

class PageCategoryList implements View{
    public function render($data)
    {
        $header = new templates\Header();
        $header->render();
        
      
        echo "<main class='main'>";
        
      
        
        $cart = new templates\CategoryList();
        $cart->render($data);
       
        
        echo '</main>';
        
        $be = new templates\Footer();
        $be->render();
        
    }
}
