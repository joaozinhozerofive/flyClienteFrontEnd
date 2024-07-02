<?php

class CarouselSlide {
    public function printHTML() {
?>
<div class='swiper'>

    <div class='swiper-wrapper' id='swiper-wrapper'>

        <div class='swiper-slide'>
            <img src='../../assets/images//bannerPadrao.avif' alt=''>
            <h1>Os melhores e mais sofisticados.</h1>
        </div>

    </div>

    <div class='swiper-scrollbar'></div>
</div>


<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js'></script>

<style>
    .swiper {
        width: 100%;
        height: 45%;
        cursor: pointer;
    }

    .swiper-wrapper {
        width: 100%;
        height: 100%;
    }

    .swiper-slide {
        position: relative;
        width: 100%;
    }

    .swiper-slide h1 {
        position: absolute;
        top: 40%;
        margin: 0 10rem;
        font-size: 75%;
        z-index: 990;
    }

    .swiper-slide img {
        width: 100%;
        max-height: 100%;
        opacity: 0.3;
        object-fit: cover;
    }

    @media(max-width: 1024px) {
        .swiper {
            height: 35%;
        }
    }
</style>


<script>
    $(async () => {
        await getDataBanners();
        loadSwiper();
    });

    function loadSwiper() {
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
    }

    async function getDataBanners() {
        let response = await fetch(`${api}banner/show?page_name=home`, {
            method: 'GET'
        });

        let data = await response.json();
        inserHtmlBannerOnPage(data);
    }

    function inserHtmlBannerOnPage(data) {
        let html = '';
        data && data.forEach(banner => {
            html += `<div class='swiper-slide'>
                        <img src='${api}files/show?image=${banner.image}' alt='Image Banner ${banner.banner_title}'>
                        <h1>${banner.banner_title}</h1>
                    </div>`;
        });

        $('#swiper-wrapper').html(html);
       
    }
</script>

</html>

<?php
    }
}

?>
