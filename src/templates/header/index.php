<?php

class Header {

    private static $instance;

    public function __construct() {
    }

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }



    public function printHTML(string $clickMenu, string $clickProfile = ''){
        
         $optionsProfile = [
            (object) [
                 'title'   => 'Conta', 
                 'class'  => 'bi bi-person-circle option', 
             ], 
            (object) [
                 'title'   => 'Carrinho', 
                 'class'  => 'bi bi-cart option', 
             ], 
            (object) [
                 'title'   => 'Sair', 
                 'class'  => 'bi bi-box-arrow-right option', 
             ]
         ];
         $biggestCategories = [
            'Cordas',
            'Áudio e tecnologia', 
            'Baterias e percussão', 
            'Teclas', 
            'Sopros', 
            'Kids',
         ];

         $categories  = [
            (object)[
                'title'          => 'Madeira', 
                'subCategories'  => [
                    'Violão',
                    'Guitarra', 
                    'Baixo', 
                    'Cavaco', 
                ] 
            ], 
            (object)[
                'title'          => 'Madeira', 
                'subCategories'  => [
                    'Violão',
                    'Guitarra', 
                    'Baixo', 
                    'Cavaco', 
                ] 
            ], 
            (object)[
                'title'          => 'Madeira', 
                'subCategories'  => [
                    'Violão',
                    'Guitarra', 
                    'Baixo', 
                    'Cavaco', 
                ] 
            ], 
            (object)[
                'title'          => 'Madeira', 
                'subCategories'  => [
                    'Violão',
                    'Guitarra', 
                    'Baixo', 
                    'Cavaco', 
                ] 
            ], 
            (object)[
                'title'          => 'Madeira', 
                'subCategories'  => [
                    'Violão',
                    'Guitarra', 
                    'Baixo', 
                    'Cavaco', 
                ] 
            ], 
            (object)[
                'title'          => 'Madeira', 
                'subCategories'  => [
                    'Violão',
                    'Guitarra', 
                    'Baixo', 
                    'Cavaco', 
                ] 
            ], 
            (object)[
                'title'          => 'Madeira', 
                'subCategories'  => [
                    'Violão',
                    'Guitarra', 
                    'Baixo', 
                    'Cavaco', 
                ] 
            ], 
            (object)[
                'title'          => 'Madeira', 
                'subCategories'  => [
                    'Violão',
                    'Guitarra', 
                    'Baixo', 
                    'Cavaco', 
                ] 
            ], 
            (object)[
                'title'          => 'Madeira', 
                'subCategories'  => [
                    'Violão',
                    'Guitarra', 
                    'Baixo', 
                    'Cavaco', 
                ] 
            ], 
            (object)[
                'title'          => 'Madeira', 
                'subCategories'  => [
                    'Violão',
                    'Guitarra', 
                    'Baixo', 
                    'Cavaco', 
                ] 
            ], 
            (object)[
                'title'          => 'Madeira', 
                'subCategories'  => [
                    'Violão',
                    'Guitarra', 
                    'Baixo', 
                    'Cavaco', 
                ] 
            ], 
            (object)[
                'title'          => 'Madeira', 
                'subCategories'  => [
                    'Violão',
                    'Guitarra', 
                    'Baixo', 
                    'Cavaco', 
                ] 
            ], 
            (object)[
                'title'          => 'Madeira', 
                'subCategories'  => [
                    'Violão',
                    'Guitarra', 
                    'Baixo', 
                    'Cavaco', 
                ] 
            ], 
            (object)[
                'title'          => 'Madeira', 
                'subCategories'  => [
                    'Violão',
                    'Guitarra', 
                    'Baixo', 
                    'Cavaco', 
                ] 
            ], 
        ];


         $categoriesHTML  = '';

         foreach($categories as $category)  {
            $categoriesHTML .= "
                <div class= 'subcategories'>
                    <h1><a href = 'http://localhost/projeto_php/src/pages/categoria?id=5'>$category->title</a> </h1>
            ";

                $categoriesHTML .= "<div>";

                foreach($category->subCategories as $subCategorie) {
                    $categoriesHTML .= "
                    <p><a href = 'http://localhost/projeto_php/src/pages/categoria?id=5'>$subCategorie</a> </p>
                    ";
                }

                $categoriesHTML .= "</div>";


                $categoriesHTML .= "</div>";
         }

         $biggestCategoriesHTML = '';

         foreach($biggestCategories as $biggestCategory) {
            $biggestCategoriesHTML .= "
            <div  class='category'>
              <p> $biggestCategory </p>  
              <i class='bi bi-chevron-down'></i>
            </div>
            ";
         }

         $optionsProfileHTML = '';

         foreach ($optionsProfile as $option) {
            $optionRoute = $option->title == 'Sair' ? '' : $option->title;
            $optionsProfileHTML .= "
            <li>
            <a href = '/projeto_php/src/pages/$optionRoute'>
            $option->title
            </a>
            <i class='$option->class'>
            </i>
            </li>";
        }

        echo "
        <!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <link rel='stylesheet' href='style.css'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css' rel='stylesheet'>
        </head>
        <div class = 'header'>
            <header>
                <div class='logo'>
                    <i
                    onclick=$clickMenu; 
                    id='menuButton' 
                    class='bi bi-list btn cursor-pointer'>
                    </i>
                    
                    <i class='bi bi-music-note'>
                    </i>
                    <h1><a href ='http://localhost/projeto_php/src/pages/'>MusicFly</a></h1>
                </div>
                <i class='bi bi-search bi-lg search'>
                    <input width='100%' type='text' placeholder='Pesquise por um produto...'>
                </i>
                <div 
                id='profileAndOptions'
                class='profile'>
                    <h1> J </h1>

                    <div> 
                        <ul
                        class='listClose'
                        id='orderedList'>
                    
                    $optionsProfileHTML                 

                    
                        </ul>
                    </div>

                </div>

            </header>

            <div class = 'categories'> 

                <div class = 'div-container-categories'>

                $biggestCategoriesHTML

                </div>

                <div id = 'div-container-subcategories' class = 'div-container-subcategories hidden'> 

                $categoriesHTML

                </div>
            </div>
        </div>
            <style>

                a{
                    text-decoration: none;
                }
                
                .header {
                    position: fixed;
                    width: 100vw;
                    z-index : 900;
                    grid-area: header;


                }

                header {
                    width: 100%;
                    display: flex;
                    flex-direction: row;
                    justify-content: space-between;
                    align-items: center;

                    padding: 0.5rem 1.5rem;

                    background: black;
                    gap: 1rem;
                }

                
    
                header .logo {
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                }
                
                header h1 {
                    margin-left: 10px;
                    cursor: pointer;
                }

                .logo {
                    display: flex;
                    gap: 5px;
                }
    
                .search {
                    display: flex;
                    align-items: center;

                    gap: 0.5rem;
                    background-color: #0a0f16;
                    padding: 10px 0 10px 15px;
                    font-size: 0.6rem;
                    color: gray;
                    border-radius: 20px;
                    width: 20rem;
                    max-width: 70%;
                }
    
                input {
                    font-family: 'Poppins', sans-serif;
                    outline: none;
                    width: 100%;
                }

                .profile{
                    display: flex;
                    align-items: center;
                    text-align: center;
                    justify-content: center;

                    position: relative;

                    padding: 0.3rem 0.6rem;

                    border: 0.3rem solid white;

                    border-radius: 50%;

                    width:2rem;
                    height:2rem;

                    background-color: gray;

                    cursor: pointer;
                }

                .profile h1{
                    margin: 0 auto;
                    font-family: 'Roboto', sans-serif;
                    font-size: 60%;

                    -webkit-touch-callout: none; 
                    -webkit-user-select: none; 
                    -khtml-user-select: none; 
                    -moz-user-select: none; 
                    -ms-user-select: none; 
                     user-select: none;
                }

                ul{
                  position: absolute;  
                  background: black; 
                  right: 2%; 
                  top: 140%; 

                  display: flex;
                  flex-direction: column;

                  border-radius: 0.8rem;

                  box-shadow: 1px 2px 4px gray;

                  animation: rightToLeft 0.5s linear;

                  z-index:1000;

                }  
                
                .listClose{
                    animation: leftToRight 0.5s linear forwards;

                }
                
                ul li{
                    display: flex;
                    align-items: center;
                    justify-content: space-between;
                    gap : 0.2rem;

                    font-size : 0.6rem;

                    padding: 0.8rem 1rem;

                    border-bottom: 1px solid #263241;

                    color: white;

                    font-family: 'poppins';

                    cursor: pointer;

                }

                 ul li:hover{
                    opacity: 0.5;
                 }

                ul li i{
                    color: white;
                }

                ul li:last-child{
                    border-bottom: none;
                }

                .bi-x{
                    animation: rotatePlus 0.3s linear;
               }
               .bi-list{
                    animation: rotateList 0.3s linear;
               }
               
               .bi-music-note:hover{
                    animation: animationShadow 2s linear infinite;
               }
               
               li{
                    text-decoration: none;
                    list-style: none;
               }

               .categories{
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                }

                .categories .div-container-categories{
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                    gap: 1rem;
                    flex-wrap: wrap;
                    background-color:black;
                }

               .category {
                    display: flex;
                    flex-direction: row;
                    justify-content: center;
                    align-items: center;
                    gap: 0.5rem;
                    font-size:40%;
                    cursor: pointer;
                    padding-bottom: 0.5rem;
              }

              .category i{
                font-size : 80%;
              }

              .subcategories {
                display: flex;
                flex-direction: column;
              }

              .div-container-subcategories{
                margin-top: 2px;
                width: 100vw;
                max-height: 15rem;
                padding: 0.6rem ;
                background-color: rgba(0,5,5, 0.99);
                display: flex;
                flex-wrap: wrap;
                flex-direction: row;
                justify-content: center;
                gap:2rem;

                overflow-y: auto;

                animation: openCategories 0.2s linear forwards;

              }
              .subcategories div{
                display: flex;
                flex-direction: column;
                gap: 0.5rem;
              }

              .subcategories h1 a {
                cursor:pointer;
                font-size: 50%;
                font-weight: 700;
              }

              .subcategories p a{
                color:#cbc6c6;
              }
              .subcategories p{
                cursor:pointer;
                font-size: 30%;
              }

              .hidden {
                display: none;
              }

               
               @keyframes rotateList {
                   from {
                       transform: rotate(360deg); /* Começando a rotação de 0 graus */
                   }
                   to {
                       transform: rotate(0deg); /* Finalizando a rotação de 360 graus (uma volta completa) */
                    }
               }
               
               @keyframes rotatePlus {
                   from {
                       transform: rotate(0deg); /* Começando a rotação de 0 graus */
                   }
                   to {
                       transform: rotate(360deg); /* Finalizando a rotação de 360 graus (uma volta completa) */
                    }
               }
               

                @keyframes rightToLeft {

                    from {
                        right: -1000%;
                    }

                    to {
                        right: -2%; 
                    }
                }

                @keyframes leftToRight {

                    from {
                        right: -2%;
                         
                    }

                    to {
                        right: -1000%;
                        display: none;
                    }
                }


                @keyframes openCategories {



                    0%{
                        opacity: 0.0;
                        transform: scale(0.0);
                    }

                    20% {
                        opacity: 0.2;
                        transform: scale(0.2);
                    }
                    40% {
                        opacity: 0.4;
                        transform: scale(0.4);
                    }
                    60% {
                        opacity: 0.6;
                        transform: scale(0.6);
                    }

                    80% {
                        opacity: 0.8;
                        transform: scale(0.8);
                    }

                    100% {
                        opacity: 1;
                        transform: scale(1);
                    }

                }

                @media(max-width: 768px){
                    .search {
                       width: 15rem;
                    }
                }

                @media(max-width: 500px){
                    .search {
                       width: 12rem;
                    }
                }
            </style>

            <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
            <script src='./comportamentos.js'></script>

            <script>

            $(document).ready(function() {
                $('.category').mouseenter(function() {
                    openCategories();
                });

                $('.div-container-subcategories').mouseenter(function() {
                        openCategories();
                });

                $('.div-container-subcategories').mouseleave(function() {
                    closeCategories();
                });

                $('.categories').mouseleave(function() {
                    closeCategories();
                });
               
            });

            function closeCategories() {
                let subCategoriesContainer = $('#div-container-subcategories');
                    subCategoriesContainer.addClass('hidden');
            }
            
            function openCategories() {
                let subCategoriesContainer = $('#div-container-subcategories');

                if (subCategoriesContainer.hasClass('hidden')) {
                    subCategoriesContainer.removeClass('hidden');
                }
            }
            $('#profileAndOptions').click(() => {
                $('#orderedList').toggleClass('listClose');
            })


            </script>    
        </html>
        ";
    }
}
?>



       

