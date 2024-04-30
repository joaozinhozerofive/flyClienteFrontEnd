<?php 
class ItemCard{
    public function printHTML() {
        echo" <!DOCTYPE html>
        <html lang='pt-br'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
        </head>
                    <div class='card_item_container'>

                    <div class = 'percent-off hidden'> 
                        33% OFF 
                    </div>

                        <img src='../../../assets/images/bannerPadrao.avif' alt=''>
                        <p>
                        <h2>Violino Proteron 7 cordas Naylon</h2>
                        <p>1.259,99</p>
                        <strong>778,99</strong>
                        <div id='quantity'>
                        <i class='fas fa-minus'></i>
                        <span>0</span>
                        <i class ='fas fa-plus'></i>
                        </div>
                        <button>
                            Comprar
                            <i class='bi bi-cart-plus-fill'></i>
                        </button>
                    </div>

                    <style>

                  .card_item_container{
                    position: relative;
                    width: 12rem;
                    max-width: 100%;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    text-align: center;
        
                    padding: 0.5rem;
        
                    gap: 2rem;
                    font-size: 1rem;
        
                    font-family: 'Roboto';
        
                    border-radius: 0.8rem;
                }
                .card_item_container > p {
                    color: gray;
                    display: inline-block;
                    position: relative;
                }
                
                .card_item_container >p::after{
                    content: '';
                    position: absolute;
                    left: 0;
                    bottom: 50%;
                    width: 100%;
                    height: 1px;
                    background: red;
                    transform: rotate(15deg);
                }

                .card_item_container >p::before{
                    content: '';
                    position: absolute;
                    left: 0;
                    bottom: 50%;
                    width: 100%;
                    height: 1px;
                    background: red;
                    transform: rotate(342deg);
                }

                .percent-off{
                    position: absolute;
                    background-color: orange;
                    padding: 5px;
                    border-radius: 8px;

                    right: 0;
                    top:0;
                    z-index: 1;
                }
                .card_item_container strong{
                    font-weight: 800;
                }
                .card_item_container img{
                    width: 8rem;
                    height: 8rem;
        
                    border-radius: 50%;
                    object-fit: cover;
        
                    cursor: pointer;
                }
        
                .card_item_container button{
                    all: unset;
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
        
                .card_item_container button:hover{
                    scale : 1.05;
                    opacity: 0.7;
        
                }

                #quantity{
                    display:flex;
                    flex-direction: row;
                    align-items:center;
                    gap: 0.5rem;
                    font-size: 90%;
                }

                #quantity >span{
                    width: 1.5rem;
                }
                
                .hidden{
                    display: none
                }
                    </style>

                <script>
                    $(document).ready(function(){
                        let cardItem = $('.card_item_container');

                        cardItem.mouseenter(function(){
                            $(this).find('.percent-off').removeClass('hidden');
                        });

                        cardItem.mouseleave(function(){
                            $(this).find('.percent-off').addClass('hidden');
                        })
                    });
                </script>   
        
        </html>";

    }
}

?>


