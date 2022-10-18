<?php
namespace app\views\templates;


class SuperPrise {
    public function render(){
        echo "<section class='superPrise__Block'>
                <div class='superPrise__container'>
                    <div class='content-block'>
                    <h2 class='superPrise__title head-title'>
                        Супер цена
                    </h2>
                    <ul class='superPrise__list'>
                        <li class='superPrise__item'>
                            
                            <span class='mark'>%</span>
                            <span class='superPrise__item-photo-wrepper'>
                                <picture>
                                    <source srcset='images//ASUSVivobook14X409FA-BV625/ASUS-Vivobook-14-X409FA-BV625-1.webp' type='image/webp'>
                                    <img src='images/ASUSVivobook14X409FA-BV625/ASUS-Vivobook-14-X409FA-BV625-1.jpg' class='superPrise__item-img' alt=''>
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
                        </li>
                        <li class='superPrise__item'>
                            <span class='mark'>%</span>
                            <span class='superPrise__item-photo-wrepper'>
                                <picture>
                                    <source srcset='images//LenovoTabP11PlusTB-J616F64GBZA940029RU/lenovo-tab-m10-plus-gen-3-feature-1.webp' type='image/webp'>
                                    <img src='images/LenovoTabP11PlusTB-J616F64GBZA940029RU/lenovo-tab-m10-plus-gen-3-feature-1.jpg' class='superPrise__item-img' alt=''>
                                </picture>
                            </span>
                            <span class='superPrise__innertextWrepper'>
                                <span class='superPrise__item-title'>
                                    Планшет Lenovo Tab P11 Plus TB-J616F 64GB ZA940029RU/lenovo-tab-m10-plus
                                </span>
                                <ul class='list-price'>
                                    <li class='list-price__item-oldprise'>2200.74<span class='currency'>BYN<span></span></li>
                                    <li class='list-price__item-newprise'>1799.99<span class='currency'>BYN<span></span></li>
                                </ul>
                            </span>
                        </li>
                        <li class='superPrise__item'>
                            <span class='mark'>%</span>
                            <span class='superPrise__item-photo-wrepper'>
                                <picture>
                                    <source srcset='images//WH-1000XM4/sony-wh-1000xm4-black-1.webp' type='image/webp'>
                                    <img src='images/WH-1000XM4/sony-wh-1000xm4-black-1.jpg' class='superPrise__item-img' alt=''>
                                </picture>
                            </span>    
                            <span class='superPrise__innertextWrepper'>
                                <span class='superPrise__item-title'>
                                    Наушники WH-1000XM4
                                </span>
                                <ul class='list-price'>
                                    <li class='list-price__item-oldprise'>999.89<span class='currency'>BYN<span></li>
                                    <li class='list-price__item-newprise'>99.99<span class='currency'>BYN<span></span></li>
                                </ul>
                            </span>
                        </li>
                    </ul>
                    <a href='PromoAll' class='superPrise-all__btn btn'>Все акции</a>   
                </div>
                </div>
            </section>";
    }
    
}
