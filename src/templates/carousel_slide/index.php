<?php

class CarouselSlide{

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


<div class='swiper'>

  <div class='swiper-wrapper'>

    <div class='swiper-slide'>
        <img src='../../assets/images//bannerPadrao.avif' alt=''>
        <h1>Os melhores e mais sofisticados.</h1>
    </div>

    <div class='swiper-slide'>
        <img src='../../assets/images//bannerPadrao.avif' alt=''>
        <h1>Os melhores e mais sofisticados.</h1>
    </div>

    <div class='swiper-slide'>
        <img src='../../assets/images//bannerPadrao.avif' alt=''>
        <h1>Os melhores e mais sofisticados.</h1>
    </div>

  </div>
  
  <div class='swiper-scrollbar'></div>
</div>


<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js'></script>

<script>

new Swiper('.swiper', {
  direction: 'horizontal',
  loop: true,
  autoplay: {
    delay: 3500, 
    disableOnInteraction: false, 
},
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});

</script>


<style>
.swiper{
    width: 100%;
    height: 45%;
    cursor: pointer;
}

.swiper-wrapper{
    width: 100%;
    height: 100%;
}

.swiper-slide{
    position: relative;
    width: 100%;
}

.swiper-slide h1{
    position: absolute;
    top: 40%;
    margin: 0 10rem;

    font-size: 75%;

    z-index: 990

}
.swiper-slide img {
    width: 100%;
    height: 100%;
    opacity: 0.3;


    z-index: 19805186751;
    object-fit: cover;
}

@media(max-width: 1024px){
    .swiper{
        height: 35%;
    }

@media(max-width: 500px){
  
  }
</style>
</html>

        ";
    }
}

?>

