<?php 
class OverInfo{
    public function printHTML(){
        echo "
        <!DOCTYPE html>
<html lang='pt-br'>
<head>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css' rel='stylesheet'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'/>
    <meta charset='UTF-8'>
    <title>MusicFly</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head>

<body>

<div class='info-container'>

  <div class='wrapper-info'>

    <div class='info'>
        <span>
        <i class='bi bi-credit-card'>
        </i>
        PAGAMENTO 
        </span>
        <p>
            Toda loja em até 12x sem juros
        </p>
    </div>

    <div class='info'>
        <span>
        <i class='bi bi-phone-vibrate'>
        </i>
        100% SEGURO 
        </span>
        <p>
            Suas compras protegidas.
        </p>
    </div>

    <div class='info'>
        <span>
        <i class='bi bi-truck'>
        </i>
        ENTREGAS
        </span>
        <p>
            Entregamos para todo o Brasil.
        </p>
    </div>

  </div>
 

</div>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>

<style>

.info-container{
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0 2rem;
    background-color: rgb(2, 7, 8);

}

.wrapper-info{
    width: 100%;
    padding: 0.8rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1rem;

    
}

.info{
    display: flex;
    flex-direction: column;
    
    align-items: center;
    width: 100%;
    font-size: 45%;
}
.info span{
    display: flex;
    align-items: center;
    gap: 0.2rem;
}
.info p{
    font-size: 80%;
    white-space: nowrap;
}




</style>

</body>
</html>

        ";
    }
}
?>

