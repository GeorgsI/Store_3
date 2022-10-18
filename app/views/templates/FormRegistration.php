<?php
namespace app\views\templates;


class FormRegistration {
  
    public function render(){
        echo"<section class='form-Block'>
                <form action='' class='form formRegistration' id='formRegistrationUser'>
                    <div id='autherror'></div>
                    <div id='auth'></div>
                    <div class='form-innerWrepper'>
                        <div class='form-elementWrepper'>
                            <h2 class='form-title'>Регистрация</h2>
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='field formRegistration' placeholder='Имя' name='name' id='name' type='text'>
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='field formRegistration' placeholder='Фамилия' name='surname'  id='surname' type='text'>
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='field formRegistration' placeholder='Отчество' name='patronymic'  id='patronymic' type='text'>
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='field formRegistration' placeholder='e-mail' name='email'  id='email' type='email'>
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='field formRegistration' placeholder='телефон' name='phone'  id='phone' type='tel' >
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='field formRegistration' placeholder='адрес' name='address'  id='address' type='text'>
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='field field-password' type='password' name='password'  id='password' placeholder='Пароль'>
                            <button type='button' class='field_showBtn btn'>
                                <i class='fa fa-eye ' aria-hidden='true'></i>
                            </button>
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='field formRegistration' placeholder='Логин'  name='login'  id='login' type='text'>
                        </div>
                        <div class='form-elementWrepper'>
                            <input class='btn form-btn formRegistration Registration-btn' type='button' value='Зарегистрироваться' title='Зарегистрироваться'>
                        </div>
                        <div class='form-elementWrepper' >
                            <a class='btn form-btn' href='Authorization' title='Назад'>Назад</a>
                        </div> 
                    </div>
                </form>
            </section>";
    }
    
    
    
    
}
