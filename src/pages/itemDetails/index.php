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

        <div class="imgList">
          <img src="../../../assets/images/bannerPadrao.avif" alt="Imagem exemplo">
          <img src="../../../assets/images/bannerPadrao.avif" alt="Imagem exemplo">
          <img src="../../../assets/images/bannerPadrao.avif" alt="Imagem exemplo">
          <img src="../../../assets/images/bannerPadrao.avif" alt="Imagem exemplo">
          <img src="../../../assets/images/bannerPadrao.avif" alt="Imagem exemplo">
        </div>

        <div class="infoItem">
            <h1>Violino Proteron 5 Cordas Envernizado 4K Nylon</h1>

            <img src="../../../assets/images/bannerPadrao.avif" alt="Imagem exemplo">
            <button>R$ 789,99 <i class="bi bi-cart-plus-fill"></i> </button>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus ad perspiciatis praesentium ea necessitatibus voluptas dignissimos!
            Aut qui asperiores in odit, minima perspiciatis tempora. Consectetur assumenda at impedit ratione nihil.
            </p>

        </div>

</main>

<?php
    $footer = new Footer();
    $footer->printHTML();
?>

</div>

</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
 
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

.imgList{
    display: flex;
    flex-direction: column;
    align-items: center;
    max-height: 35rem;
    width: 30rem;
    overflow-y: auto;
}

.imgList > img{
    object-fit: cover;
    cursor: pointer;
    height: 100%;
    width: 100%;
}

.infoItem{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    width: 105rem;
    max-width: 100%;
    gap: 1rem;
}

.infoItem img{
    object-fit: cover;
    max-width: 100%;
}

.infoItem > h1{
    font-size: 80%;
}
.infoItem > p {
    font-size: 50%;
}
.infoItem > button {
    font-size: 60%;
    width: 50%;
    display: flex;
    flex-direction: row;
    align-items: center;
    text-align: center;
    justify-content: center;
    gap: 0.5rem;
    background-color: #8b020d;
    padding: 0.5rem;
    border-radius: 0.8rem;
    cursor: pointer;
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
