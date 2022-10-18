<?php
namespace app\views\templates;


class CategoryBlock {
    public function render($data){
        
        
        //var_dump($data);
        
    
        $out = "";
        $out .="<section class='category-Block'>
                <div class='category__container'>
                    <div class='content-block'>
                        <h2 class='head-title'>
                            Категории
                        </h2>
                        <ul class='category__list'>";
        
 
       
        foreach ($data as $value){
           
            
            //.pathinfo($value['photoLink'], PATHINFO_FILENAME).        
            $out .= "<li class='category__item'>
                    <!--a href='index.php?page=PageCategoryList&num={$value['id_category']}' class='category__linck'-->
                    <a href='PageCategoryListRender/{$value['id_category']}' class='category__linck'>
                        <span class='category__item-photo-wrepper'>
                            <picture>
                                <source srcset='images//".strstr($value['photoLink'], '.', true).".webp' type='image/webp'>
                                <img src='images/{$value['photoLink']}' class='category__item-img' alt=''>
                            </picture>
                        </span>
                    <span class='category-title'>{$value['title']}</span>
                    </a>
                </li>";     
        }
        $out .= "</ul>
                </div>
                </div>
            </section>";

       echo $out;
       
       
    
     
    }
}
