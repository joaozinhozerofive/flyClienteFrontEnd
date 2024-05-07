<?php
     require_once('../../templates/header/index.php');
     require_once('../../templates/menu/index.php');
     require_once('../../templates/footer/index.php');
     require_once('../../templates/card_item/index.php')
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


<select>
    <option value="0">Preço (maior - menor)</option>
    <option value="1">Preço (menor - maior)</option>
    <option value="2">Relevância</option>
</select>

<div class="filters-container">
<i class="bi bi-funnel-fill">Outros filtros</i>
    

    <div class="filters hidden">
        <form>
            Preço    
            <label>
                <input type="text" class="price" placeholder="Preço mínimo">
                <input type="text" class="price" placeholder="Preço máximo">
            </label>
            <div class="marking">
                <h1>Marca</h1>
                <p>Velotron <i class="bi bi-plus"></i></p>
                <p>Yamaha <i class="bi bi-plus"></i></p>
                <p>Tagima  <i class="bi bi-plus"></i></p>
                <p>Crafter  <i class="bi bi-plus"></i></p>
                <p>Strinberg <i class="bi bi-plus"></i></p>
                <p>Takamine  <i class="bi bi-plus"></i></p>
            </div>

            <button>
                Filtrar
                <i class="bi bi-search"></i>
            </button>
        </form>
    </div>

</div>

<div class="main-container-items">
<?php
   $itemCard = new ItemCard();              
   $itemCard->printHTML();
   $itemCard->printHTML();
   $itemCard->printHTML();
   $itemCard->printHTML();
   $itemCard->printHTML();
   $itemCard->printHTML();
   $itemCard->printHTML();
   $itemCard->printHTML();
?>

</div>
    

<?php
    $footer = new Footer();
    $footer->printHTML();
?>

</div>
</body>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

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
    grid-area: content;
    height: 100%;
    width: 100vw;

    overflow-y: auto;
    overflow-x: hidden;

    padding: 5rem 0;
}

.content select{
    font-size: 50%;
}
.content select option{
    background-color: black;
}

.content .filters-container{
    padding-left: 2rem;
    font-size: 65%;
    margin: 2rem 0 ;
    cursor: pointer;
}

form{
    width: 15rem;
    max-width: 100%;
    display: flex;
    flex-direction: column;
    background-color: black;
    padding: 2rem;
    border-radius: 10px;

    font-size: 80%;

    position: absolute;
    z-index: 500;

    box-shadow: 1px 1px 5px gray;
}
form label{
    font-size: 60%;

    display: flex;
    flex-direction: row;
    gap: 0.2rem;
    max-width: 100% ;
    margin-top: 0.2rem;
}

label input{
    border: 1px solid white;
    border-radius: 5px;
    padding: 0.5rem;
}
.marking{
    display: flex;
    flex-direction: column;
    gap: 0.2rem;
    margin-top: 1rem;
}
.marking p{
   display: flex;
   flex-direction: row;
   align-items: center;
   justify-content: space-between;
   font-size: 90%;
}

.main-container-items {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 2rem;
    flex-wrap: wrap;    

    margin-bottom: 5rem;
}  


form button {
    margin-top: 1rem;
    font-size: 90%;
    background-color: #8b020d;
    border-radius: 5px;
    padding: 0.3rem;
}
form button:hover {
   opacity: 0.8;
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

<script>

    function clickCardItemRedirection() {
        $('img').click(() => {
            window.location.href = 'http://localhost/projeto_php/src/pages/itemDetails';
        })
    }   

    function decrementQuantity() {
        $('.card_item_container').find('.fa-minus').click(function() {
            let $quantitySpan = $(this).closest('.card_item_container').find('#quantity');
            
            let currentValue = parseInt($quantitySpan.find('span').text());
            
            if(currentValue < 1) {
                return;
            }
            let newValue = currentValue - 1;

            

            $quantitySpan.find('span').text(newValue);
        });
    }

    function icrementQuantity() {
        $('.card_item_container').find('.fa-plus').click(function() {
            let $quantitySpan = $(this).closest('.card_item_container').find('#quantity');
            
            let currentValue = parseInt($quantitySpan.find('span').text());

            let newValue = currentValue + 1;

            $quantitySpan.find('span').text(newValue);
        });
    }

        function formatPrice(price) {
        // Remove todos os caracteres que não são dígitos ou vírgula
        price = price.replace(/[^\d,]/g, '');

        // Separa os números antes e depois da vírgula
        var parts = price.split(',');

        // Formata a parte inteira do preço (antes da vírgula)
        parts[0] = parts[0].replace(/\D/g, '').replace(/\B(?=(\d{3})+(?!\d))/g, '.');

        // Se houver parte decimal, limita a parte decimal a apenas um dígito após a vírgula
        if (parts[1]) {
            parts[1] = parts[1].substr(0, 2);
        }

        // Junta as partes novamente e retorna o preço formatado, adicionando a vírgula
        return parts.join(',');
    }

    function selectMarking(){
        $('.marking p').click(function() {
                let $this = $(this); 
                let icon  = $this.find('i');

                if(icon.hasClass('bi-plus')){
                    icon.css({
                        'color': 'green',
                    })
                    $this.css({
                        'color': 'green',
                    })
                    icon.removeClass('bi-plus');
                    icon.addClass('bi-check-lg');
                }else{
                    icon.css({
                        'color': 'white',
                    })
                    $this.css({
                        'color': 'white',
                    })
                    icon.removeClass('bi-check-lg');
                    icon.addClass('bi-plus');
                    
                }
            })
    }



    function openAndCloseFilters() {
            let filterForm = $('.filters');

            if(filterForm.hasClass('hidden')){
                filterForm.removeClass('hidden');
            }else{
                filterForm.addClass('hidden');
            }
    }

    function addMaskPrice() {
        $('.price').mask('R$ 000.000,00');
    }

    function addMask() {
        addMaskPrice();
    }


    $(document).ready(function(){
        selectMarking();
        addMask();
        decrementQuantity();
        icrementQuantity();
        clickCardItemRedirection();

        $(".bi-funnel-fill").click(function() {
            openAndCloseFilters();
         })

    })

</script>

</html>
