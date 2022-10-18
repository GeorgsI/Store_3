<?php

namespace app\views\templates;

class CategoryList {
  
  public $out;

   public function render($data){
        $out = '';
        
        
       $out .= "<section class='superPrise__Block'>
                <div class='superPrise__container'>
                    <div class='content-block'>";


        if(isset($data)){
            if(isset($data['goods'])){
                if($data['goods'][0]['promoPrise']!= 0.00)
                {
                    $out .= "<h2 class='superPrise__title head-title'>Супер цена</h2>";
                }else{
                     $out .= "<h2 class='head-title'>{$data['goods'][0]['title']}</h2>";
                }
                
                $out .= "<ul class='superPrise__list'>";
                forEach($data['goods'] as $value)
                { 
                    $out .= "<li class='superPrise__item'>ttttttttttttttttttttttttttttttttttttt
                            <!--a href='index.php?page=PageCardProduct&num={$value['id_goods']}'><span class='mark-wrepper'-->
                            <a href='CardProduct/{$value['id_goods']}'><span class='mark-wrepper'>";  
                            if((double)$value['priceRose'] != 0 &&  $value['promoPrise'] != 0.00){
                                $out .=" <span class='mark'>".round(((double)$value['priceRose']/(double)$value['promoPrise']-1)*100)."% </span>";
                            }
                            if(isset($data['labels'])){
                                forEach($data['labels'] as $label)
                                { 
                                    $out .=" <span class='mark'>{$label['label']}</span>";
                                }
                            }
                              //.pathinfo($value['photo'], PATHINFO_FILENAME).
                            $out .="</span> <span class='superPrise__item-photo-wrepper'>
                                <picture>
                              
                                    <source srcset='images//".strstr($value['photo'], '.', true).".webp' type='image/webp'>
                                    <img src='images/{$value['photo']}' class='superPrise__item-img' alt=''>
                                </picture>
                            </span>
                                <span class='superPrise__innertextWrepper'>
                                    <span class='superPrise__item-title'>
                                        {$value['title_goods']}
                                    </span>
                                    <ul class='list-price'>";
                                    if((double)$value['priceRose'] != 0 &&  $value['promoPrise'] != 0.00){
                                       $out .=" <li class='list-price__item-oldprise'>{$value['priceRose']}<span class='currency'>BYN<span></span></li>
                                        <li class='list-price__item-newprise'>{$value['promoPrise']}<span class='currency'>BYN<span></span></li>";
                                    } 
                                    else{
                                        $out .=" <li class='list-price'>{$value['priceRose']}<span class='currency'>BYN<span></span></li>";
                                    }
                                     $out .="</ul>
                                </span>
                                </a>
                            </li>";
                }                     
            }
        }
        else{
            $out = "<p>Товар добавляется!<p>";
        }
       
       
       
       
       
                  
                        
                $out .= "</ul>
                    <a href='index.php' class='superPrise-all__btn btn'>Назад</a>   
                </div>
                </div>
            </section>";
    echo $out;
}
    
}
