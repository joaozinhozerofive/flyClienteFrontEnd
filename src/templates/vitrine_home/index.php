<?php
class VitrineHome {
    public function printHTML() {
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
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head>

    
<div class='destach'>
    <fieldset>
        <legend>Em destaque</legend>
    </fieldset>
   
</div>

<div class='swiper-container swiperVitrine'>
        <div class='swiper-wrapper swiperWrapperVitrine'>
            <div class='swiper-slide swiperSlideVitrine'>
                <img src='../../assets/images//bannerPadrao.avif' alt=''>
                <h2>Violino Proteron 7 cordas Naylon</h2>
                <strong>778,99</strong>
                <button>
                    Comprar
                    <i class='bi bi-cart-plus-fill'></i>
                </button>
            </div>
            <div class='swiper-slide swiperSlideVitrine'>
                <img src='../../assets/images//bannerPadrao.avif' alt=''>
                <h2>Violino Proteron 7 cordas Naylon</h2>
                <strong>778,99</strong>
                <button>
                    Comprar
                    <i class='bi bi-cart-plus-fill'></i>
                </button>
            </div>
            <div class='swiper-slide swiperSlideVitrine'>
                <img src='../../assets/images//bannerPadrao.avif' alt=''>
                <h2>Violino Proteron 7 cordas Naylon</h2>
                <strong>778,99</strong>
                <button>
                    Comprar
                    <i class='bi bi-cart-plus-fill'></i>
                </button>
            </div>
        </div>
</div>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js'></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper-container', {
            slidesPerView: 3, 
            threshold: 50,
            autoplay: {
            delay: 3000, 
            disableOnInteraction: false, 
            },
            pagination: {
                el: '.swiper-pagination',
            },
});
    });
</script>

<style>
        .destach {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .destach fieldset {
            width: 30rem;
            max-width: 70%;
            border-top: 1px solid #4c4d4f;
            margin: 0 auto;
        }

        .destach fieldset legend {
            margin: 0 auto;
            font-size: 85%;
            font-family: 'Poppins', sans-serif;
            padding: 0.5rem;
        }
        .swiper-container{
           width: 100%;
        }

        .swiperWrapperVitrine{
           width: 100%;
           display: flex;
           gap: 1rem;
        }

        .swiperSlideVitrine{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;

            padding: 0.5rem;

            gap: 2rem;
            font-size: 1rem;

            font-family: 'Roboto';

            cursor:grab;

            border-radius: 0.8rem;
        }
        .swiperSlideVitrine strong{
            font-weight: 800;
        }
        .swiperSlideVitrine img{
            width: 8rem;
            height: 8rem;

            border-radius: 50%;
            object-fit: cover;

            cursor: pointer;
        }

        .swiperSlideVitrine button{
            width: 100%;
            display: flex;
            flex-direction: row;
            align-items: center;
            text-align: center;
            justify-content: center;

            background-color: #8b020d;
            padding: 0.5rem 1rem;
            border-radius: 0.8rem;

            cursor: pointer;
        }

        .swiperSlideVitrine button:hover{
            scale : 1.05;
            opacity: 0.7;

        }

    </style>

</html>

    ";
    }
}
?>
