[33mcommit 8e10d9dcadb479b682a488e66c89c460d11dba65[m[33m ([m[1;36mHEAD -> [m[1;32mmain[m[33m, [m[1;31morigin/main[m[33m)[m
Author: joão <joaovitormachadororato@gmail.com>
Date:   Tue Jun 25 19:26:58 2024 -0300

    iniciando conexão com api

[1mdiff --git a/src/pages/index.php b/src/pages/index.php[m
[1mindex f922ab2..1422ae0 100644[m
[1m--- a/src/pages/index.php[m
[1m+++ b/src/pages/index.php[m
[36m@@ -44,8 +44,8 @@[m
     $overInfo->printHTML();[m
 [m
     #VITRINE HOME[m
[31m-    $vitrineHome = new VitrineHome();[m
[31m-    $vitrineHome->printHTML();[m
[32m+[m[32m    $showcase = new Showcase();[m
[32m+[m[32m    $showcase->printHTML();[m
 [m
     ?>[m
 [m
[1mdiff --git a/src/templates/carousel_slide/index.php b/src/templates/carousel_slide/index.php[m
[1mindex e0fbd9c..98fb295 100644[m
[1m--- a/src/templates/carousel_slide/index.php[m
[1m+++ b/src/templates/carousel_slide/index.php[m
[36m@@ -48,7 +48,7 @@[m [mclass CarouselSlide{[m
 [m
 <script>[m
 [m
[31m-const swiper = new Swiper('.swiper', {[m
[32m+[m[32mnew Swiper('.swiper', {[m
   direction: 'horizontal',[m
   loop: true,[m
   autoplay: {[m
[1mdiff --git a/src/templates/over_info/index.php b/src/templates/over_info/index.php[m
[1mindex f303f3e..d929fd3 100644[m
[1m--- a/src/templates/over_info/index.php[m
[1m+++ b/src/templates/over_info/index.php[m
[36m@@ -17,11 +17,11 @@[m [mclass OverInfo{[m
 [m
 <body>[m
 [m
[31m-<div class='swiperInfo'>[m
[32m+[m[32m<div class='info-container'>[m
 [m
[31m-  <div class='swiper-wrapperInfo'>[m
[32m+[m[32m  <div class='wrapper-info'>[m
 [m
[31m-    <div class='swiper-slideInfo'>[m
[32m+[m[32m    <div class='info'>[m
         <span>[m
         <i class='bi bi-credit-card'>[m
         </i>[m
[36m@@ -32,7 +32,7 @@[m [mclass OverInfo{[m
         </p>[m
     </div>[m
 [m
[31m-    <div class='swiper-slideInfo'>[m
[32m+[m[32m    <div class='info'>[m
         <span>[m
         <i class='bi bi-phone-vibrate'>[m
         </i>[m
[36m@@ -43,7 +43,7 @@[m [mclass OverInfo{[m
         </p>[m
     </div>[m
 [m
[31m-    <div class='swiper-slideInfo'>[m
[32m+[m[32m    <div class='info'>[m
         <span>[m
         <i class='bi bi-truck'>[m
         </i>[m
[36m@@ -60,20 +60,10 @@[m [mclass OverInfo{[m
 </div>[m
 [m
 <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>[m
[31m-<script src='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js'></script>[m
[31m-[m
[31m-<script>[m
[31m-[m
[31m-const swiper = new Swiper('.swiper', {[m
[31m-  direction: 'vertical',[m
[31m-  loop: true,[m
[31m-});[m
[31m-[m
[31m-</script>[m
 [m
 <style>[m
 [m
[31m-.swiperInfo{[m
[32m+[m[32m.info-container{[m
     display: flex;[m
     align-items: center;[m
     justify-content: center;[m
[36m@@ -82,7 +72,7 @@[m [mconst swiper = new Swiper('.swiper', {[m
 [m
 }[m
 [m
[31m-.swiper-wrapperInfo{[m
[32m+[m[32m.wrapper-info{[m
     width: 100%;[m
     padding: 0.8rem;[m
     display: flex;[m
[36m@@ -93,7 +83,7 @@[m [mconst swiper = new Swiper('.swiper', {[m
     [m
 }[m
 [m
[31m-.swiper-slideInfo{[m
[32m+[m[32m.info{[m
     display: flex;[m
     flex-direction: column;[m
     [m
[36m@@ -101,12 +91,12 @@[m [mconst swiper = new Swiper('.swiper', {[m
     width: 100%;[m
     font-size: 45%;[m
 }[m
[31m-.swiper-slideInfo span{[m
[32m+[m[32m.info span{[m
     display: flex;[m
     align-items: center;[m
     gap: 0.2rem;[m
 }[m
[31m-.swiper-slideInfo p{[m
[32m+[m[32m.info p{[m
     font-size: 80%;[m
     white-space: nowrap;[m
 }[m
[1mdiff --git a/src/templates/vitrine_home/index.php b/src/templates/vitrine_home/index.php[m
[1mindex b54b94e..5f9277d 100644[m
[1m--- a/src/templates/vitrine_home/index.php[m
[1m+++ b/src/templates/vitrine_home/index.php[m
[36m@@ -1,169 +1,178 @@[m
 <?php[m
[31m-class VitrineHome {[m
[32m+[m[32mclass Showcase {[m
     public function printHTML() {[m
[31m-        echo "[m
[32m+[m[32m        ?>[m
         <!DOCTYPE html>[m
[31m-<html lang='pt-br'>[m
[31m-<head>[m
[31m-    <link rel='preconnect' href='https://fonts.googleapis.com'>[m
[31m-    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>[m
[31m-    <link href='https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' rel='stylesheet'>[m
[31m-    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css' rel='stylesheet'>[m
[31m-    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'/>[m
[31m-[m
[31m-    <meta charset='UTF-8'>[m
[31m-    <meta name='viewport' content='width=device-width, initial-scale=1.0'>[m
[31m-</head>[m
[31m-[m
[31m-    [m
[31m-<div class='destach'>[m
[31m-    <fieldset>[m
[31m-        <legend>Em destaque</legend>[m
[31m-    </fieldset>[m
[31m-   [m
[31m-</div>[m
[31m-[m
[31m-<div class='swiper-container swiperVitrine'>[m
[31m-        <div class='swiper-wrapper swiperWrapperVitrine'>[m
[31m-            <div class='swiper-slide swiperSlideVitrine'>[m
[31m-                <img src='../../assets/images//bannerPadrao.avif' alt=''>[m
[31m-                <h2>Violino Proteron 7 cordas Naylon</h2>[m
[31m-                <strong>778,99</strong>[m
[31m-                <button>[m
[31m-                    Comprar[m
[31m-                    <i class='bi bi-cart-plus-fill'></i>[m
[31m-                </button>[m
[31m-            </div>[m
[31m-            <div class='swiper-slide swiperSlideVitrine'>[m
[31m-                <img src='../../assets/images//bannerPadrao.avif' alt=''>[m
[31m-                <h2>Violino Proteron 7 cordas Naylon</h2>[m
[31m-                <strong>778,99</strong>[m
[31m-                <button>[m
[31m-                    Comprar[m
[31m-                    <i class='bi bi-cart-plus-fill'></i>[m
[31m-                </button>[m
[31m-            </div>[m
[31m-            <div class='swiper-slide swiperSlideVitrine'>[m
[31m-                <img src='../../assets/images//bannerPadrao.avif' alt=''>[m
[31m-                <h2>Violino Proteron 7 cordas Naylon</h2>[m
[31m-                <strong>778,99</strong>[m
[31m-                <button>[m
[31m-                    Comprar[m
[31m-                    <i class='bi bi-cart-plus-fill'></i>[m
[31m-                </button>[m
[31m-            </div>[m
[31m-        </div>[m
[31m-</div>[m
[31m-[m
[31m-<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>[m
[31m-<script src='https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js'></script>[m
[31m-[m
[31m-<script>[m
[31m-    document.addEventListener('DOMContentLoaded', function() {[m
[31m-            const swiper = new Swiper('.swiper-container', {[m
[31m-            slidesPerView: 3, [m
[31m-            threshold: 50,[m
[31m-            autoplay: {[m
[31m-            delay: 3000, [m
[31m-            disableOnInteraction: false, [m
[31m-            },[m
[31m-            pagination: {[m
[31m-                el: '.swiper-pagination',[m
[31m-            },[m
[31m-});[m
[31m-    });[m
[31m-</script>[m
[31m-[m
[31m-<style>[m
[31m-        .destach {[m
[31m-            width: 100%;[m
[31m-            display: flex;[m
[31m-            flex-direction: column;[m
[31m-            align-items: center;[m
[31m-            justify-content: center;[m
[31m-            padding: 2rem;[m
[31m-        }[m
[31m-[m
[31m-        .destach fieldset {[m
[31m-            width: 30rem;[m
[31m-            max-width: 70%;[m
[31m-            border-top: 1px solid #4c4d4f;[m
[31m-            margin: 0 auto;[m
[31m-        }[m
[31m-[m
[31m-        .destach fieldset legend