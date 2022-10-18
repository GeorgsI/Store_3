<?php
namespace app\views\templates;


class Brends {
    public function render(){
       echo "<section class='brends-Block'>
                <div class='brends__container'>
                    <div class='content-block'>
                        <h2 class='brends__title head-title'>
                            Бренды
                        </h2>
                        <ul class='brends__list'>
                            <li class='brends__item'>
                                <picture>
                                    <source srcset='images/brends/lenovo.webp' type='image/webp'>
                                    <img src='images/brends/lenovo.jpg' class='brends__item-img' alt=''>
                                </picture>
                            </li>
                            <li class='brends__item'>
                                <picture>
                                    <source srcset='images/brends/asus.webp' type='image/webp'>
                                    <img src='images/brends/asus.png' class='brends__item-img' alt=''>
                                </picture>
                            </li>
                            <li class='brends__item'>
                                <picture>
                                    <source srcset='images/brends/huawei.webp' type='image/webp'>
                                    <img src='images/brends/huawei.png' class='brends__item-img' alt=''>
                                </picture>
                            </li>
                            <li class='brends__item'>
                                <picture>
                                    <source srcset='images//brends/sony.webp' type='image/webp'>
                                    <img src='images/brends/sony.png' class='brends__item-img' alt=''>
                                </picture>
                            </li>
                        </ul>

                    </div>
                </div>      
            </section>";
    }
}