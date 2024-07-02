<?php
class Showcase {
    public function printHTML() {
        ?>
    <div id="showcase">
    </div>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/swiper@11/.min.js'></script>

    <script>
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
                                        <img src='${productImage}' alt='Image product ${product.product_name}'>
                                        <h2>${product.product_name}</h2>
                                        <strong>${product.product_price}</strong>
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
