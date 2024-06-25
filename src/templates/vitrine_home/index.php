<?php
class Showcase {
    public function printHTML() {
        ?>
        <!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css' rel='stylesheet'>
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/swiper@11/.min.css'/>

        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    </head>


    <div id="showcase">
    </div>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/swiper@11/.min.js'></script>

    <script>
            const api = `http://localhost/fly-web-service/server/`;
            document.addEventListener('DOMContentLoaded', () => {
                getDataVitrine();
            });

            async function getDataVitrine(){
                let response =  await fetch(`${api}showcase/show`, {
                    method : 'GET'
                });
                
                let data = await response.json();
                data = data.filter(newData => newData.is_active == 1);
                let html = '';

                data && data.forEach(showcase => {
                    html += `<div class='tittle'>
                                <fieldset>
                                    <legend>${showcase.showcase_name}</legend>
                                </fieldset>
                             </div>
                             `;
                    html += ` <div class='showcase-container'>`

                    showcase.products && showcase.products.forEach(product => {
                      const defaultImage =  'https://img.freepik.com/vetores-gratis/violao_98292-4397.jpg'; 
                      const productImage = product.images[0]?.image ? `${api}files/show?image=${product.images[0]?.image}` : defaultImage;
                                                                    
                      html +=  `<div class=' productCard'>
                                        <img src='${productImage}' alt='product image'>
                                        <h2>Violino Proteron 7 cordas Naylon</h2>
                                        <strong>778,99</strong>
                                        <button>
                                            Comprar
                                            <i class='bi bi-cart-plus-fill'></i>
                                        </button>
                                </div>
                                `;

                      html +=  `<div class=' productCard'>
                                        <img src='${productImage}' alt='product image'>
                                        <h2>Violino Proteron 7 cordas Naylon</h2>
                                        <strong>778,99</strong>
                                        <button>
                                            Comprar
                                            <i class='bi bi-cart-plus-fill'></i>
                                        </button>
                                </div>
                                `;
                    });

                    html +=  `</div>`;
                });

               $('#showcase').html(html);
            }
    </script>

    <style>
            #showcase {
                display: flex;
                flex-direction: column;
                align-items: center;
            }   
            
            .tittle {
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 2rem;
            }

            .tittle fieldset {
                width: 30rem;
                max-width: 70%;
                border-top: 1px solid #4c4d4f;
                margin: 0 auto;
            }

            .tittle fieldset legend {
                margin: 0 auto;
                font-size: 85%;
                font-family: 'Poppins', sans-serif;
                padding: 0.5rem;
            }

            .showcase-container{
                width: 80rem;
                max-width: 100%;
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 5rem;
            }

            .productCard{
                width: 250px;
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
            .productCard strong{
                font-weight: 800;
            }
            .productCard img{
                width: 8rem;
                height: 8rem;

                border-radius: 50%;
                object-fit: cover;

                cursor: pointer;
            }

            .productCard button{
                width: 310px;
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

            .productCard button:hover{
                scale : 1.05;
                opacity: 0.7;

            }

        </style>

    </html>
    <?php
    }
}
