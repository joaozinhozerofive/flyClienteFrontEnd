<?php 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<div class="order-data hidden">
    <h1>Seus Pedidos</h1>
    <div>
        <div>
            <h2>Pedido <span>#101888428</span></h2>
            <i data-situation="4" class="bi bi-truck">Cancelado/Devolvido</i>
            <p>1- Violão Teletom, 2- Suporte Americano Arterial, 1 - Bolsa violão personalizada</p>
            <strong>R$ 1.000,00</strong>
        </div>
        <div>
            <h2>Pedido <span>#101888428</span></h2>
            <i data-situation="3" class="bi bi-truck">Pendente/A caminho</i>
            <p>1- Violão Teletom, 2- Suporte Americano Arterial, 1 - Bolsa violão personalizada</p>
            <strong>R$ 1.000,00</strong>
        </div>
        <div>
            <h2>Pedido <span>#101888428</span></h2>
            <i data-situation="2" class="bi bi-truck">Em rota de entrega</i>
            <p>1- Violão Teletom, 2- Suporte Americano Arterial, 1 - Bolsa violão personalizada</p>
            <strong>R$ 1.000,00</strong>
        </div>
        <div>
            <h2>Pedido <span>#101888428</span></h2>
            <i data-situation="1" class="bi bi-truck">Entregue</i>
            <p>1- Violão Teletom, 2- Suporte Americano Arterial, 1 - Bolsa violão personalizada</p>
            <strong>R$ 1.000,00</strong>
        </div>
        
    </div>


    <style>
        .order-data{
            font-size: 70%;
            max-height: 25rem;
            width: 100%;
        }
        .order-data h2{
            font-size: 65%;
        }
        .order-data span{
            color: gray;
        }
        .order-data p{
            font-size: 50%;
            color: #d4caca;
            word-wrap: break-word;
        }

        .bi-truck {
            display: flex;
            flex-direction: row;
            gap: 0.5rem;
        }

        [data-situation="1"]{
            color: #128703;
        }

        [data-situation="2"]{
            color: blue;
        }

        [data-situation="3"]{
            color: yellow;
        }
        [data-situation="4"]{
            color: red;
        }


        .bi
        .order-data strong{
            font-size: 65%;
            color: #128703;
            font-weight: bold;
        }
        .order-data i {
            font-size: 60%;
        }
        .order-data > div{
            overflow-y: auto;
            max-height: 25rem;
        }

        .order-data > div > div{
            cursor: pointer;
            padding: 1rem 2rem 1rem 0;
            border-bottom: 1px solid #0a0f16;
        }
    </style>
</div>
</html>