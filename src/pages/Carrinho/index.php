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
  
    <div class="cart">
        <h1>Revise seu pedido</h1>
        <div class="items-container">
            <div class="item">
                     <img src="../../../assets/images/bannerPadrao.avif" alt="Imagem do produto">
                     <div>
                    <h1>Violão Proteron</h1>
                    <span>R$ 250,99</span>
                    <p>Remover</p>
                    </div>
           </div>
            <div class="item">
                     <img src="../../../assets/images/bannerPadrao.avif" alt="Imagem do produto">
                     <div>
                    <h1>Violão Proteron</h1>
                    <span>R$ 250,99</span>
                    <p>Remover</p>
                    </div>
           </div>
            <div class="item">
                     <img src="../../../assets/images/bannerPadrao.avif" alt="Imagem do produto">
                     <div>
                    <h1>Violão Proteron</h1>
                    <span>R$ 250,99</span>
                    <p>Remover</p>
                    </div>
           </div>
            <div class="item">
                     <img src="../../../assets/images/bannerPadrao.avif" alt="Imagem do produto">
                     <div>
                    <h1>Violão Proteron</h1>
                    <span>R$ 250,99</span>
                    <p>Remover</p>
                    </div>
           </div>
            <div class="item">
                     <img src="../../../assets/images/bannerPadrao.avif" alt="Imagem do produto">
                     <div>
                    <h1>Violão Proteron</h1>
                    <span>R$ 250,99</span>
                    <p>Remover</p>
                    </div>
           </div>
        </div>

        <h2>Total <span>R$ 499,98</span></h2>
    </div>

    <div class="adress">
        <h1>Selecione um endereço ou cadastre um novo.</h1>
        <select id="adress-options">
            <option value="1">Selecione um endereço</option>
            <option value="1">Casa</option>
            <option value="1">Trabalho</option>
        </select>

        <form>
            <label for="CEP">
                CEP
                <input type="text" id="CEP" placeholder="89160-306">
            </label>
            <label class="adress-label">
                <div>
                    Rua
                    <input type="text" id="adress" placeholder="Rua Jorge Lacerda">
                </div>

                <div>
                Número
                    <input type="text" id="number" placeholder="155">
                </div>
               
            </label>
            <label class="country-label">
                <div>
                    País
                    <input type="text" id="country" value="Brasil" readonly>
                </div>

                <div>
                    UF
                <input type="text" id="FU" placeholder="SC" maxlength="3">
                </div>
            </label>

            <label>
                Complemento
                <input type="text" id="complement" placeholder="Apartamento" >
                
            </label>
            
        </form>

        <button class="openPayment">
            Ir para o pagamento
        </button>
    </div>

    <?php 
    $payment_wrapper = require_once('../../templates/payment-wrapper/index.php');
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

    function openPayment() {
        $('.openPayment').click(() => {
            $('#payment-wrapper').removeClass('hidden');
        });
    }
    
    function addMask() {
        addMaskCEP();
    }

    function addMaskCEP() {
        $("#CEP").mask('00000-000');
    }

    $(document).ready(() => {
        openPayment();
        addMask();
    })

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

select{
    border: 1px solid #0a0f16;
    border-radius: 5px;
    margin-bottom: 1rem;
    padding: 0.2rem;
    font-size: 50%;
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
    position: relative;
    margin: 10rem 0;
    padding: 1rem;
    display: flex;
    flex-direction: row;
    align-items: baseline;
    justify-content: center;
    gap: 2rem;
}

.cart{
    border-bottom: 1px solid #0a0f16;
    border-radius: 10px;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.cart > h1{
    font-size: 65%;
}

.cart span{
    color: #128703;
    font-size: 70%;
}

.cart h2{
    font-size: 70%;
}

.cart > .items-container{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 1rem;
    max-height: 25rem;
    overflow: auto;
}

.items-container > .item {
    padding: 1rem;
    width: 100%;
    font-size: 50%;
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 1rem;
    border-bottom: 1px solid #0a0f16;
}

.item > div{
    display: flex;
    flex-direction: column;
    gap: 0.2rem;
}
.item h1{
    font-size: 80%;
}

.item p{
    cursor: pointer;
    font-size: 60%;
    color: red;
}

.items-container > .item > img{
    width: 4rem;
    height: 4rem;
    border-radius: 50%;
}

.adress{
    display: flex;
    flex-direction: column;
    gap: 1rem;
    padding: 1rem;
    border: 1px solid #0a0f16;
    border-radius: 10px;
}

.adress > button{
    font-size: 50%;
    background-color: black;
    cursor: pointer;
    padding: 0.5rem 1rem;
    border-radius: 10px;
}

.adress > h1{
    font-size: 50%;
}

.adress > form{
    padding: 1rem;
    border: 1px solid #0a0f16;
    border-radius: 10px;
    width: 20rem;
    max-width: 100%;
}

.adress-label, .country-label {
    display: flex;
    flex-direction: row;
}

.adress-label > div, .country-label > div{
    width: 100%;
    display: flex;
    flex-direction: column;
}

label.adress-label > div:nth-child(1){
    width: 100%;
}
label.adress-label > div:nth-child(2){
    width: 30%;
}

label.country-label > div:nth-child(2){
        width: 30%;
    } 
label.country-label > div:nth-child(2){
    width: 30%;
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
