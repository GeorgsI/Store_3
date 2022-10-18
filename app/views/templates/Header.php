<?php
namespace app\views\templates;

class Header {
    public function render(){
        echo"<!DOCTYPE html>
            <html>
                <head>
                    <meta charset='UTF-8'>
                    <title></title>
                    <link rel='stylesheet' href='../css/style.css'>
                    <link rel='stylesheet' href='css/style.css'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <link href='icon-fonts/css/all.css' rel='stylesheet'> 
                </head>
                <body>
        <div class='wrepper'>     
    
<div class='header'>
            <div class='header-blockFirst'>
                <div class='header__container  header-blockFirst-container'>
                    <span class='header-blockFirst-text'>Бесплатная доставка от 500 руб.</span>
                    <div class='header-menu'>
                        <ul class='menu__list'>
                            <li class='menu__item'><a href='#' class='menu__link'>О нас</a></li>
                            <li class='menu__item'><a href='#' class='menu__link'>Контакты</a></li>
                            <li class='menu__item'><a href='#' class='menu__link'>Категории</a></li>
                            <li class='menu__item'><a href='#' class='menu__link menu__link-phone'><span class='menu__item-text'>Звоните:</span> 000-00-00</a></li>
                        </ul>
                    </div>
                </div>
            </div>
           
            <div class='header-blockSecond'>

                <div class='header__container header-blockSecond-container'>
                    
                    <a href='index.php' class='header__logo'>LOGO</a>
                    <div class='wrepper-inner-blockSecond'>
                        <a href='index.php' class='header__logo-min'>LOGO</a>
                        <div class='search-wrepper'>
                            <form method='POST' class='search'>
                                <input type='search' class='search-input' placeholder='Поиск'>
                                <button class='search-btn btn'><i class='fa-solid fa-magnifying-glass'></i></button>
                            </form>
                        </div>
            
                    
                        <div class='header-subMenu'>
                            <ul class='subMenu__list'>
                                <li class='subMenu__item'><a href='#' class='subMenu__link'><i class='fa-regular fa-sun'></i></i></a></li>
                                <li class='subMenu__item'><a href='Authorization' class='subMenu__link'><i class='fa-regular fa-user'></i></a></li>       
                                <li class='subMenu__item'><a href='#' class='subMenu__link'><i class='fa-solid fa-cart-shopping'></i><span class='subMenu__link-countCart'>0</span></a></li>   
                                <li class='subMenu__item burger-top'>
                                    <div class='button__burger btn__burger'>
                                        <span class='btn__burger_elem0'></span>
                                        <span class='btn__burger_elem1'></span>
                                        <span class='btn__burger_elem2'></span>
                                        <span class='btn__burger_elem3'></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class='header-blockThird'>
                <div class='header__container'>
                    <div class='header-menuCategory'>
                        <ul class='menuCategory__list'>
                            <li class='menuCategory__item'><a href='#' class='menuCategory__link'>Телефоны</a></li>
                            <li class='menuCategory__item'><a href='#' class='menuCategory__link'>Планшеты</a></li>
                            <li class='menuCategory__item'><a href='#' class='menuCategory__link'>Аудио</a></li>
                            <li class='menuCategory__item'><a href='#' class='menuCategory__link'>Ноутбуки</a></li>
                        </ul>
                    </div>
                </div>        
            </div>
            
        </div> ";
    }
}
