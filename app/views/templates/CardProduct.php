<?php
namespace app\views\templates;

class CardProduct {
    public function render($data)
    {
        $out = "";
        
            
        //out goods
        if(isset($data['goods']))
        {
            //.pathinfo($data['goods'][0]['photo'], PATHINFO_FILENAME). 
            $out .= "<section class='cardProduct-Block'>
                        <div class='cardProduct__container'>
                            <div class='cardProduct-goods-1block'>
                            <div class='cardProduct-goods-1block-innerWrepper'>
                            <div class='cardProduct-goods-1block__img'>    
                                <picture>
                                    <source srcset='images//".strstr($data['goods'][0]['photo'], '.', true).".webp' type='image/webp'>
                                    <img src='images/{$data['goods'][0]['photo']}' class='superPrise__item-img' alt='{$data['goods'][0]['title_goods']}' title='{$data['goods'][0]['title_goods']}'>
                                </picture>
                            </div>"; 
                                    
            $out.= "<div class='Wrapper-goodsList-info'><ul class='goodsList-info'>";
            forEach($data['goods'] as $value)
            {
                
                $out.= "<li class='goodsList-info-item'> 
                            <span class='title_goods-main'>{$value['title_goods']}</span>
                        </li>
                        <li class='goodsList-info-item'>
                            <span>Артикул:</span>
                            <span>{$value['code']}</span>
                        </li>
                        <li class='goodsList-info-item'>
                            <span>Штрих-код:</span>
                            <span>{$value['YN']}</span>
                        </li>";

                if(isset($value['promoPrise']) && $value['promoPrise'] !=0.00 || $value['promoPrise'] !=''){
                    $out.= "<li class='goodsList-info-item'> 
                                <span>Старая цена: </span>
                                <span class='list-price__item-oldprise'>{$value['priceRose']}</span>
                            </li>
                            <li class='goodsList-info-item'>
                                <span class='goodsList-info-item'>Акция:</span>
                                <span class='goodsList-info-item'>{$value['promoPrise']}</span>
                            </li>";
                }
                else{
                    $out.= "<li>
                                <span class='goodsList-info-item'>{$value['priceRose']}</span>
                            </li>";
                }
                if(isset($value['infoAdd']))
                {
                    $out.= "<li>
                                <span class='goodsList-info-item'>{$value['infoAdd']}</span>
                            </li>";
                }
            } 
            $out.= "</ul></div>";
        } 
        $out.= "<button class='btn card-btn card-btn-add-basket' data-idGoods='".$value['id_goods']."'  data-imgfoGoods='".'images/'.$value['photo']."' data-titleGoods='{$value['title_goods']}' >В корзину</button> </div></div>";
        
        //out Photo
        if(isset($data['photoGoods']))
        {
            $out.= "<div class='cardProduct-photoGoods-2block'><ul class='cardPhotoGoods-list'>";
            forEach($data['photoGoods'] as $value)
            {//.pathinfo($value['photoLink']).
                $out.= "<li class='cardPhotoGoods-item'>   
                            <picture>
                                <source srcset='images//".strstr($value['photoLink'], '.', true).".webp' type='image/webp'>
                                <img src='images/{$value['photoLink']}' class='superPrise__item-img' alt='{$value['photoTitle']}' title='{$value['photoTitle']}'>
                            </picture> 
                        </li>";         
            }
            $out.= "</ul></div>";
        }
        
        
        //out specifications
        if(isset($data['specifications'])){
            $out.= "<div class='cardProduct-specifications-3block'><ul class='cardSpecifications-list'>";
            forEach($data['specifications'] as  $value)
            {
                $out.=  "<li class='cardSpecifications-item'>
                            <span class='cardSpecifications-bold'>{$value['title']}: </span>
                            <span class='cardSpecifications-text'>{$value['value'] }</span>
                        </li>"; 
            }  
            $out.= "</ul></div>"; 
        }
    $out.= "</div>
            </section>"; 
    echo $out ;
    //var_dump($data);
    }
}
