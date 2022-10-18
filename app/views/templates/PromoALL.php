<?php
namespace app\views\templates;


class PromoALL {
    public $out;

    public function render($data){
        $out = '';
        
        
       $out .= "<section class='superPrise__Block'>
                <div class='superPrise__container'>
                    <div class='content-block'>
                    <h2 class='superPrise__title head-title'>
                        Супер цена
                    </h2>
                    <ul class='superPrise__list'>";
       //var_dump($data);
        
                if(isset($data))
                {
                    
                    
                    forEach($data as $value)
                    { 
                        //echo gettype((double)$value['priceRose']);
                        $out .="
                            
                            <li class='superPrise__item'>
                            <!--a href='index.php?page=PageCardProduct&num={$value['id_goods']}'-->
                              <a href='CardProduct/{$value['id_goods']}'> 
                                <span class='mark'>".round(((double)$value['priceRose']/(double)$value['promoPrise']-1)*100)."% {$value['label']}</span>
                                <span class='superPrise__item-photo-wrepper'>
                                    <picture>
                                        <source srcset='images//".strstr($value['photo'], '.', true).".webp' type='image/webp'>
                                        <img src='images/{$value['photo']}' class='superPrise__item-img' alt=''>
                                    </picture>
                                </span>
                                <span class='superPrise__innertextWrepper'>
                                    <span class='superPrise__item-title'>
                                        {$value['title_goods']}
                                    </span>
                                    <ul class='list-price'>
                                        <li class='list-price__item-oldprise'>{$value['priceRose']}<span class='currency'>BYN<span></span></li>
                                        <li class='list-price__item-newprise'>{$value['promoPrise']}<span class='currency'>BYN<span></span></li>
                                    </ul>
                                </span>
                                </a>
                            </li>";    
   
                    }
                }
                
                else{
                     $out = "<p>Пока акций нет<p>";
                }
                    
                    
                      /*  "<li class='superPrise__item'>
                            
                            <span class='mark'>%</span>
                            <span class='superPrise__item-photo-wrepper'>
                                <picture>
                                    <source srcset='images//ASUS Vivobook 14 X409FA-BV625/ASUS Vivobook 14 X409FA-BV625-1.webp' type='image/webp'>
                                    <img src='images/ASUS Vivobook 14 X409FA-BV625/ASUS Vivobook 14 X409FA-BV625-1.jpg' class='superPrise__item-img' alt=''>
                                </picture>
                            </span>
                            <span class='superPrise__innertextWrepper'>
                                <span class='superPrise__item-title'>
                                    Ноутбук ASUS Vivobook 14 X409FA-BV625/ASUS Vivobook 14 X409FA-BV625
                                </span>
                                <ul class='list-price'>
                                    <li class='list-price__item-oldprise'>1800.99<span class='currency'>BYN<span></span></li>
                                    <li class='list-price__item-newprise'>1699.00<span class='currency'>BYN<span></span></li>
                                </ul>
                            </span>
                        </li>*/
                        
                        
                $out .= "</ul>
                    <a href='index.php' class='superPrise-all__btn btn'>Назад</a>   
                </div>
                </div>
            </section>";
    echo $out;
}
}