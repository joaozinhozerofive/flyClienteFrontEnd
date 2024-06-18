<?php 
class Footer{
    public function printHTML() {
        echo "
        <!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
</head>

<div class = 'footer'>


<div class='register-email'>

        <h1> DEIXE SEU E-MAIL AQUI E RECEBA NOSSAS OFERTAS  </h1>

        <div id='input_register_email'>

            <input placeholder='Digite seu e-mail.' type='text'>

            <p>
                Enviar
            </p>
        </div>
</div>
<footer>
    <div class='info-company'>
        <h1>AJUDA E SUPORTE</h1>
        <p>Trocar e devoluções</p>
        <p>Envios e pagamentos</p>
    </div>
    <div class='info-company'>
        <h1>INSTITUCIONAL</h1>
        <p>Quem somos</p>
        <p>Política de privacidade</p>
    </div>
    <div class='info-company'>
        <h1>FALE CONOSCO</h1>
        <p>(47) 98899-9988</p>
        <p>musicFly@gmail.com</p>
    </div>
</footer>

</div>


<style>

p {
 cursor : pointer;
}    

.register-email{
    display: flex;
    flex-direction: column;
    align-items: center;
    font-size: 0.8rem;
    gap: 0.5rem;
    margin-bottom: 2rem;
}

.register-email h1{
    font-size: 1.2rem;
    font-family: 'Roboto', sans-serif;
    font-weight: 800;
}

#input_register_email{
    display: flex;
    flex-direction: row;

    width: 30rem;
    max-width: 100%;
    margin: 0 auto;
}

#input_register_email input{
    font-size: 1rem;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;

    border-radius: 0.5rem 0 0 0.5rem;
    padding: 0.8rem;
    
    background-color: #0a0f16;
}

#input_register_email p{
    border-radius:  0 0.5rem 0.5rem 0 ;

    font-size: 1rem;
    
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    text-align: center;

    padding: 0.8rem;

    background-color: black;

}
    footer{
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: space-between;
        background-color: black;
        margin-bottom: -2rem;
        padding: 2rem;
    }

    footer .info-company{
        display: flex;
        flex-direction: column;
        gap: 1rem;
        text-align: left;
    }

    footer h1{
        font-size: 1.5rem;
        font-family: 'Roboto', sans-serif;
        font-weight: 800;
        cursor: pointer;

        margin-bottom: 1rem;
    }

    footer p{
        font-size: 1rem;
        cursor: pointer;
    }

    footer h1:hover, p:hover{
        opacity: 0.7;
    }


    @media(max-width: 500px){

        .footer{
            margin-top: 3rem;
        }
        footer h1{
            font-size: 1rem;
        }
    
        footer p{
            font-size: 0.8rem;
        }

        .register-email h1{
            font-size: 1rem;
        }
    }

</style>
</html>
        
        ";
    }
}

?>


