<?php
namespace app\views\templates;


class Slider {
     public function render(){ 
         echo " <section class='firstBlock'>
                <div class='tagline'>
                    <div class='tagline-wrepper'>
                        <span class='tagline-mark-1'>
                            Лучшие цены
                        </span >
                        <h2 class='tagline-title-2'>
                            Невероятные цены 
                            на все Ваши 
                            любимые товары
                        </h2>
                        <h3 class='tagline-title-3'>
                            Получите больше за меньшие деньги от выбранных брендов
                        </h3>
                        <a href='#' class='tagline-btn btn'>
                            Купить
                        </a> 
                    </div>
                </div>
                <picture>
                    <source srcset='images/mainPhoto.webp' type='image/webp'>
                    <img src='images/mainPhoto.jpg' class='firstBlock-img' alt=''>
                </picture>
           

            </section>";
     }
}
