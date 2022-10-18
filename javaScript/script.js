





let btn__burger = document.querySelector('.btn__burger');
const MENU = document.querySelector('.header-menu');
const HTML = document.querySelector('html');
const HTMLcontainer = document.querySelector('.header-blockFirst-container');





btn__burger.onclick = () => {
  console.log(1);
  MENU.classList.toggle('_activeMenu');
  HTML.classList.toggle('hidden');
  btn__burger.classList.toggle('btn__burger_active');
  HTMLcontainer.style.padding = 0;
};




if(document.querySelector('.field-password')){
const FIELDINput = document.querySelector('.field-password'); 
//const FIELDINput2 = document.querySelector('.field2'); 

const BNT_SHOWPASSWORD = document.querySelector('.field_showBtn'); 
const BNT_ICONEYE = document.querySelector('.field_showBtn .fa'); 



BNT_SHOWPASSWORD.onclick=()=>{
  if (FIELDINput.type === "password") {
    FIELDINput.type = "text";
   // FIELDINput2.type = "text";
    BNT_ICONEYE.classList.add('active');
  } else {
    FIELDINput.type = "password";
   // FIELDINput2.type = "password";
    BNT_ICONEYE.classList.remove('active');  
  }
};

}