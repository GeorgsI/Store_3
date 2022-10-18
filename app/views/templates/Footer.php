<?php
namespace app\views\templates;

class Footer {
    public function render(){
       echo"<footer class='footer'>
            <div class='footer__container'>
                <div class='footer__content'>
                    <a href='#' class='footer__logo'>LOGO</a>
                    <div class='footer-contacts'>
                        <p class='footer-title'>Контакты</p>
                        <p class='footer-contact'>Адрес</p>
                        <p class='footer-contact'>Mail@mail</p>
                        <p class='footer-contact'><a href='#' class='footer-contacts__link footer-contacts__link-phone'>000-00-00</a></p>
                        <ul class='footer-contacts__list'>
                            <li class='footer-contacts__item'><a href='#' class='footer-menu__link'><i class='fa-brands fa-viber'></i></a></li>
                            <li class='footer-contacts__item'><a href='#' class='footer-menu__link'><i class='fa-brands fa-instagram'></i></a></li>
                            <li class='footer-contacts__item'><a href='#' class='footer-menu__link'><i class='fa-brands fa-youtube'></i></a></li>
                        </ul>
                    </div>
                    <div class='footer-menu'>
                        <p class='footer-title'>Покупателям</p>
                        <ul class='footer-menu__list'>
                            <li class='footer-menu__item'><a href='#' class='footer-menu__link'>О нас</a></li>
                            <li class='footer-menu__item'><a href='#' class='footer-menu__link'>Контакты</a></li>
                            <li class='footer-menu__item'><a href='#' class='footer-menu__link'>Категории</a></li>
                            <li class='footer-menu__item'><a href='#' class='footer-menu__link'>Акции!</a></li>
                        </ul>
                    </div>
                    <div class='footer-menu'>
                        <p class='footer-title'>О компании</p>
                        <ul class='footer-menu__list'>
                            <li class='footer-menu__item'><a href='#' class='footer-menu__link'>Партнёрам</a></li>
                            <li class='footer-menu__item'><a href='#' class='footer-menu__link'>Вакансии</a></li>
                            <li class='footer-menu__item'><a href='#' class='footer-menu__link'></a></li>
                        </ul>
                    </div>
                </div> 
                <p class='copy'>ES.Коvalёv</p>
            </div> 
            
        </footer>
           </div>    
                <script src='javaScript/script.js'></script>
                <script src='javaScript/ajax.js'></script>
                <script src='javaScript/ajaxBasket.js'></script>
            </body>
        </html>";
        
        
    }
    
    
}
