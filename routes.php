<?php

$return = [
    "#^index.php$#" => ["Page1", "render"],
    "#^PromoAll$#" => ["PromoAll", "render"],
    "#^Authorization$#" => ["Authorization", "render"],
    "#^Registration$#" => ["Registration", "render"],
    
    
    
    
    /*"#^Catalog$#" => ["Catalog", "action", []],
   /* "#^Catalog/(\d+)$#" => ["Catalog", "action", []],*/
   
   /* "#^Promo/(\d+)$#" => ["Promo", "action", []],
    "#^Cabinet$#" => ["Promo", "action", ["num" => 1]],*/
    "#^CardProduct/(\d+)$#" => ["CardProduct", "render", 1],
    
    "#^PageCategoryListRender/(\d+)$#" => ["PageCategoryList", "render", 1],
    "#^AjaxAuthorization$#" => ["AjaxAuthorization", "send", $_POST ],
    "#^Admin$#" => ["Admin", "send" ],
    "#^User$#" => ["User", "render" ],
   /* "#^PageCategoryList/CardProduct/(\d+)$#" => ["CardProduct", "read", 1]*/
    
 
   
];



