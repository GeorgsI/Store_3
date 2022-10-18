

if(document.querySelector(".card-btn-add-basket")){
    const basketAddBtn = document.querySelector(".card-btn-add-basket");

    basketAddBtn.onclick = (e) => {
        
        console.log(e.target.getAttribute('data-idGoods'));
        console.log(e.target.getAttribute('data-imgfoGoods'));
        console.log(e.target.getAttribute('data-titleGoods'));
        
        let btn = e.target.getAttribute('data-idGoods');
        
        /*let requestData = {
            login : document.getElementById("login").value,
            password : document.getElementById("password").value
        };*/
       // sendAjax(requestData,'response.php','POST');  
    };   
}

    




