<?php
namespace app\views;


class Page1 implements View{
    public function render($data)
    {
        
        /*echo $data . '<br/>';
        echo '<a href="index.php?page=page2">page 2</a> <a href="index.php?page=page3">page 3</a>';*/
        
        
        
        $header = new templates\Header();
        $header->render();
        echo 'PAGE 1<br/>';
        
        echo "<main class = 'main'>";
        
       
        $Slider= new templates\Slider();
        $Slider->render();
        
        $BenefitsBlock = new templates\BenefitsBlock();
        $BenefitsBlock->render();
        
        $SuperPrise = new templates\SuperPrise();
        $SuperPrise->render();
        
        
        $CategoryBlock = new templates\CategoryBlock();
        echo $CategoryBlock->render($data);
        
        $Brends= new templates\Brends();
        $Brends->render();
        
        
        echo "</main>";
        
        $footer = new templates\Footer();
        $footer->render();
        
        
    }
}
