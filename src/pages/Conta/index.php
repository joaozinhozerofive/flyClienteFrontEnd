<?php
     require_once('../../templates/header/index.php');
     require_once('../../templates/menu/index.php');
     require_once('../../templates/footer/index.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
 //HEADER
     $clickButtonMenu = 'menuClick()';
     $header = new Header();
     $header->printHTML($clickButtonMenu);

 //MENU
    $menu = new Menu();
    $menu->printHTML();
?>

<div class="content">

<main>

<div class="brand">
    <div class="brand-options active">
        <i class="bi bi-person-circle"></i>
        <p> Conta</p>
    </div>

    <div class="brand-options">
        <i class="bi bi-card-checklist"></i>
        <p>Pedidos</p>
    </div>
    <div class="brand-options">
        <i class="bi bi-house"></i>
        <p>Endereços</p>
    </div>
</div>

<?php 
$adressData  = require_once('../../templates/adress-data/index.php');
$orderData   = require_once('../../templates/order-data/index.php');
$userData    = require_once('../../templates/user-data/index.php');
?>

</main>

<?php
    $footer = new Footer();
    $footer->printHTML();
?>

</div>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script>
 
$(document).ready(function() {
    onClickBrand();
    addMask();
   });

function addMask() {
    addMaskBirth(); 
    addMaskCPF();
    addMaskPhone();
    addMaskCEP();
}

function addMaskBirth() {
    $("#birth").mask('00/00/0000');
}

function addMaskCPF() {
    $("#CPF").mask('000.000.000-00');
}

function addMaskPhone() {
    $("#phone").mask('(00) 00000-0000');
}

function addMaskCEP() {
    $("#CEP").mask('00000-000');
}

   function onClickBrand() {
    $(".brand-options").click(function(){
        let $this = $(this);
        if(!$this.hasClass('active')){
            let brandOptionsActive = $(".active");
            brandOptionsActive.removeClass('active');
            $this.addClass('active');
            
            let userData   = $(".user-data");
            let orderData  = $(".order-data");
            let adressData = $(".adress-data");
            let pElement = $this.find('p');
            let text = pElement.text().trim();
            let containerActive = $('.container-active');

            function alternateBrandOptions(element) {
                containerActive.removeClass('container-active');
                containerActive.addClass('hidden');
                if(element.hasClass('hidden')) {
                   element.removeClass('hidden')
                }
                element.addClass('container-active')
            } 

            switch(text){
                case 'Conta': 
                    alternateBrandOptions(userData);
                    break;
                case 'Pedidos': 
                    alternateBrandOptions(orderData);
                    break;
                case 'Endereços':
                    alternateBrandOptions(adressData);
            }
                        
        }
        
    })
   }


    function menuClick(){
     let menuButton =  $('#menuButton');

     if (menuButton.hasClass("bi-list")) {
        menuButton.removeClass("bi-list").addClass("bi-x"); 
    } else {
        menuButton.removeClass("bi-x").addClass("bi-list");
    } 

     let menuContainer = $("#menuContainer"); 

     if (menuContainer.hasClass("close")) {
        menuContainer.removeClass("close").addClass("open");
     }else{
        menuContainer.removeClass("open").addClass("close")
     }
    }
</script>


<style>
*{
    box-sizing: border-box;
    padding: 0;
    margin: 0;
    border: none;
    background: none;

    color: white;

    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    font-size: 120%;

}
.active{
    background-color: black;
}

::-webkit-scrollbar{
        width: 0.2rem;
        height: 0.2rem;
      }
      ::-webkit-scrollbar-thumb{
        background: black;
        border-radius: 10rem;
}

 h1,h2,h3{
    font-family: 'Poppins', sans-serif;
}

i{
    cursor: pointer;
}
form label{
    display: flex;
    flex-direction: column;
    gap: 0.5rem;
    font-size: 30%;
}
form input,form textarea{
    border: 1px solid gray;
    border-radius: 10px;
    width: 100%;
    padding: 0.5rem;
    margin-bottom: 1rem;
}
#email{
    padding: 1rem;;
}

#email, #phone, #CPF{
    background-color: black;
    border: none;
}
select{
    border: 1px solid #0a0f16;
    border-radius: 5px;
    margin-bottom: 1rem;
    padding: 0.2rem;
}
 select option{
    background-color: black;
}
body{
   display: grid;

   grid-template-areas: 
   "header header header"
   "content content content"
   ;
    grid-template-rows: 5vh 95vh ;
    grid-template-columns: 20% 80%;
    background: rgb(0,10,15);
    background: linear-gradient(90deg, rgb(2, 6, 8) 55%, rgb(1, 3, 6) 100%);

    overflow-y: auto;
    overflow-x: hidden;

    width: 100vw;
    height: 100vh;

    position: relative;
}

.content{
    grid-area: content;
    height: 100%;
    width: 100vw;

    overflow-y: auto;
    overflow-x: hidden;

    padding-bottom: 2rem;
}


.content > main{
    display: flex;
    gap: 1rem;
    margin: 8rem 2rem 5rem 2rem;
}

main .brand{
    max-height: 20rem;
    width: 15rem;
    max-width: 25%;
}


.brand .brand-options{
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 1rem;
    width: 100%;
    font-size: 60%;
    padding: 1rem;
    border-bottom: 1px solid #0a0f16;
    cursor: pointer;
}

.brand  div:last-child{
    border: none;
}

@media(max-width: 1024px){
    *{
          font-size: 115% ;
    }
}

@media(max-width: 768px){
    *{
          font-size: 105% ;
    }
}

@media(max-width: 500px){
    *{
          font-size: 100% ;
    }
}

</style>

</html>
