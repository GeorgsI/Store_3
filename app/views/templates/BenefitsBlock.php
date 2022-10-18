<?php
namespace app\views\templates;


class BenefitsBlock {
    public function render(){
    echo "<section class='benefitsBlock'>
                <div class='benefits__container'>
                    <ul class='benefits__list'>
                        <li class='benefits__item'>
                            <i class='fa-solid fa-percent'></i>
                            <span class='benefits__item-title'>Скидки</span>
                        </li>
                        <li class='benefits__item'>
                            <i class='fa-solid fa-dolly'></i>
                            <span class='benefits__item-title'>Бесплатная доставка от 500руб.</span>
                        </li>
                        <li class='benefits__item'>
                            <i class='fa-solid fa-hand-holding-dollar'></i>
                            <span class='benefits__item-title'>Выгодные цены</span>
                        </li>
                        <li class='benefits__item'>
                            <i class='fa-solid fa-clock-rotate-left'></i>
                            <span class='benefits__item-title'>Доступны 24/7</span>
                        </li>
                    </ul>
                </div>
            </section>";
    
    }
}
