

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<div id="payment-wrapper" class="hidden">
    <div>
        <nav>
            <h1>Pronto! Só falta o pagamento.</h1>
            <i id="close" class="bi bi-x"></i>
        </nav>
        
        <div>
            <div class="paymentForm">
                <div  id="payment_pix">
                    <i class="fa-brands fa-pix"></i>
                    <h3>PIX</h3>
                </div>

                <div  id="payment_card" class="paymentActive">
                    <i class="fa-solid fa-credit-card"></i>
                    <h3>Cartão</h3>
                </div>
            </div>

            <form class="form_payment_card">
                <div class="cardCode">
                    <label for="cardCode">
                    Número do cartão
                    <input type="text" id="cardCode" placeholder="5551 5568 6882 5458">
                    </label>

                    <label for="validity">
                    Validade
                    <input type="text" id="validity" placeholder="03/31">
                    </label>

                </div>

                <label for="nameOnCard">
                    Nome no cartão
                    <input type="text" id="nameOnCard" placeholder="Fulano da Silva"> 
                </label>

                <label for="holders_cpf">
                   CPF do titular
                    <input type="text" id="holders_cpf" placeholder="112.223.224-93"> 
                </label>
            </form>

            <form class="form_payment_pix hidden">
                <div>
                    <img src="../../../assets/images/pix.svg" alt="Imagem banner">
                </div>
            </form>
        </div>

        <div class="finalize_order">
            <button>
                Finalizar pedido
            </button>
        </div>

        
    </div>
</div>

<style>
    #payment-wrapper{
        width: 100vw;
        height: 100vh;
        position: absolute;
        padding: 0.5rem;
    }

    #payment-wrapper >div{
        width: 80%;
        max-height: 30rem;
        background-color: black;

        border-radius: 8px;
        font-size: 70%;
        padding: 0.5rem;

        box-shadow: 1px 2px 6px #0a0f16;
        margin: 0 auto;
    }

    #payment-wrapper >div >.finalize_order{
        margin-top: 1rem;
        width: 100%;
        display: flex;
        justify-content: center;
    }

    #payment-wrapper >div >.finalize_order >button{
        background-color: #8b020d;
        cursor: pointer;
        padding: 0.3rem 1rem;
        border-radius: 8px;
    }
    #payment-wrapper >div >.finalize_order >button:hover{
        opacity: 0.8;
    }



    #payment-wrapper >div >nav{
        font-size: 80%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 0.5rem;
    }

    #payment-wrapper >div >div{
        font-size: 80%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 1rem;
        border: 1px solid #0a0f16;
        border-radius: 8px;
        padding: 0.5rem;
    }

    #payment-wrapper >div >div >.paymentForm{
        display: flex;
        justify-content: center;
    }

    #payment-wrapper >div >div >form{
        border-radius: 10px;
        font-size: 200%;
        padding: 0.5rem;
    }


    #payment-wrapper >div >div >.paymentForm >div{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        gap: 0.2rem;

        width: 100%;
        padding: 0.5rem;
        cursor: pointer;
    }

    #payment-wrapper >div >div >.paymentForm >div:hover{
        opacity: 0.8;
    }


    #payment-wrapper >div >div >.paymentForm >div:nth-child(1){
      border-right: 1px solid #0a0f16;
        
    }

    #payment-wrapper >div >div >form > .cardCode{
        display: flex;
        flex-direction: row;
        align-items: center;
        gap: 0.5rem;
    }

    #payment-wrapper >div >div >form > .cardCode >label:nth-child(1){
        width: 90%;
    }

    form.form_payment_pix >div{
       width: 100%;
       display: flex;
       align-items: center;
       justify-content: center;
    }

    form.form_payment_pix >img{
        width: 10rem;
        position: absolute;
        left: 50%;
    }

    .paymentActive {
        background: white;
    }
    .paymentActive >i, .paymentActive >h3 {
        color: black;
    }

    .hidden{
        display: none;
    }
    
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    function handleClickPaymentForm() {
        let paymentAcitve = $('.paymentActive');
        let paymentPix    = $("#payment_pix");
        let paymentCard   = $("#payment_card");

        let formPaymentCard = $('form.form_payment_card');
        let formPaymentPix  = $('form.form_payment_pix');

        paymentPix.click(() =>{ 
            paymentCard.removeClass('paymentActive');
            paymentPix.addClass('paymentActive')

            if(formPaymentPix.hasClass('hidden')) {
                formPaymentPix.removeClass('hidden');
                formPaymentCard.addClass('hidden');
            }
        })

        paymentCard.click(() =>{ 
            paymentPix.removeClass('paymentActive');
            paymentCard.addClass('paymentActive');
            
            if(formPaymentCard.hasClass('hidden')) {
                formPaymentCard.removeClass('hidden');
                formPaymentPix.addClass('hidden');
            }
        })
    }

    $(document).ready(() => {

        $('#close').click(() => {
            $("#payment-wrapper").addClass('hidden');
        })
        handleClickPaymentForm();
    })
</script>
</html>