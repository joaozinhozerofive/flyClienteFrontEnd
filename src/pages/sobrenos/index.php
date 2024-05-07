<?php
     require_once('../../templates/header/index.php');
     require_once('../../templates/menu/index.php');
     require_once('../../templates/over_info/index.php');
     require_once('../../templates/carousel_slide/index.php');
     require_once('../../templates/vitrine_home/index.php');
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

<h1>Ops... Ainda não tem nada por aqui 😞</h1>

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

::-webkit-scrollbar{
        width: 0.2rem;
        height: 0.2rem;
      }
      ::-webkit-scrollbar-thumb{
        background: black;
        border-radius: 10rem;
}
form input,form textarea{
    border: 1px solid gray;
    border-radius: 10px;
    width: 100%;
    margin-top: 0.5rem;
    padding: 1rem;
}

form textarea{
    height: 10rem;
    resize: none;
}
h1,h2,h3{
    font-family: 'Poppins', sans-serif;
}

i{
    cursor: pointer;
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
    display: flex;
    flex-direction: column;

    margin-top: 20%;

    grid-area: content;
    height: 100%;
    width: 100vw;

    overflow-y: auto;
    overflow-x: hidden;

    padding: 5rem 0 3rem 0;
}

h1{
    margin: 0 auto;
}

.footer{
    margin-top: 50%;
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
