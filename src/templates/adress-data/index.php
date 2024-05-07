<?php ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div class="adress-data hidden">
    <h1>Seus Endereço</h1>
    <div class="adress-list">
        <div>
            <div class="cotainer-row-adress">
                <h1>Casa</h1>
                <i class="bi bi-pencil"></i>
            </div>

            <p>Rio do Sul - SC </p>
            <p>Rua Leopoldo Ledra, 121</p>
            <p>Santana</p>
        </div>
        <div>
            <div class="cotainer-row-adress">
                <h1>Casa</h1>
                <i class="bi bi-pencil"></i>
            </div>

            <p>Rio do Sul - SC </p>
            <p>Rua Leopoldo Ledra, 121</p>
            <p>Santana</p>
        </div>
        <div>
            <div class="cotainer-row-adress">
                <h1>Casa</h1>
                <i class="bi bi-pencil"></i>
            </div>

            <p>Rio do Sul - SC </p>
            <p>Rua Leopoldo Ledra, 121</p>
            <p>Santana</p>
        </div>
        <div>
            <div class="cotainer-row-adress">
                <h1>Casa</h1>
                <i class="bi bi-pencil"></i>
            </div>

            <p>Rio do Sul - SC </p>
            <p>Rua Leopoldo Ledra, 121</p>
            <p>Santana</p>
        </div>
   </div>

   <div id="div-wrapper-edit-adress" class="hidden">
    <div>
    <div class="div-header-form-adress">
        <h1>Informe um endereço válido</h1>
        <i class="bi bi-x"></i>
    </div>
    <form>

            <label for="CEP">
                CEP
                <input type="text" id="CEP"  placeholder="89160-306">
            </label>
            <label class="adress-label">
                <div>
                    Rua
                    <input type="text" id="adress" placeholder="Rua Jorge Lacerda">
                </div>

                <div>
                Número
                    <input type="text" id="number" placeholder="155">
                </div>
               
            </label>
            <label class="country-label">
                <div>
                    País
                    <input type="text" id="country" value="Brasil" readonly>
                </div>

                <div>
                    UF
                <input type="text" id="FU" placeholder="SC" maxlength="3">
                </div>
            </label>

            <label>
                Complemento
                <input type="text" id="complement" placeholder="Apartamento" >
            </label>
        </form>
       
        <div class="buttons-adress">
                <button class="button-save button-adress">
                    Salvar alterações
                </button>
                <button class="button-delete">
                    <i class="bi bi-trash"></i>
                    Excluir
                </button>
        </div>
    </div>    
  </div>
</div>



<style>
    div.adress-data{
        position: relative;
        width: 100%;
    }

    div.adress-data > div.adress-list{
        height: 25rem;
        overflow: auto;
    }
    div.adress-data > h1{
    font-size: 70%;
   }

    div.adress-data > div > div > p {
        font-size: 40%;
        color: gray;
    }
    div.adress-data > div > div {
        padding: 1rem 2rem 1rem 0;
        border-bottom: 1px solid #0a0f16;
    }


    .cotainer-row-adress{
        font-size: 50%;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
    }

    #div-wrapper-edit-adress {
        position: absolute;
        width: 100%;
        height: 100%;
        top: -4rem;
        font-size: 70%;
    }


    #div-wrapper-edit-adress >div {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 0.5rem;
        background: black;
        border: 1px solid #0a0f16;
        box-shadow: 1px 2px 6px #0a0f16;
        border-radius: 8px;
        padding: 1rem;
   }

    form label{
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        font-size: 30%;
    }
    form input,form textarea{
        border: 1px solid gray;
        border-radius: 10px;
        width: 100%;
        padding: 0.5rem;
        margin-bottom: 1rem;
    }

    .adress > form{
    padding: 1rem;
    border: 1px solid #0a0f16;
    border-radius: 10px;
    width: 20rem;
    max-width: 100%;
    }

    .adress-label, .country-label {
        display: flex;
        flex-direction: row;
    }

    .adress-label > div,.country-label > div {
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    label.adress-label > div:nth-child(1){
        width: 100%;
    }
    label.adress-label > div:nth-child(2){
        width: 30%;
    }

    label.label.adress-label > div:nth-child(1){
        width: 100%;
    }
    label.country-label > div:nth-child(2){
        width: 30%;
    } 
    label.country-label > div:nth-child(2){
        width: 30%;
    }

   

   .div-header-form-adress{
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-between;
        font-size: 70%;
   }

   .buttons-adress{
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: space-around;
    font-size: 50%;
   }

   .button-delete{
    background-color: gray;
    cursor: pointer;
    padding: 0.5rem 1rem;
    border-radius: 10px;
    margin: 2rem 0 5rem 5%;
   }

</style>


<script>
    function closeEditAdress() {
        $('#div-wrapper-edit-adress > div > div.div-header-form-adress > i').click(() => {
                 $('#div-wrapper-edit-adress').css('display', 'none');
        });

        $('#div-wrapper-edit-adress > div > div.buttons-adress > button.button-save.button-adress').click(() => {
                 $('#div-wrapper-edit-adress').css('display', 'none');
        });
        $('#div-wrapper-edit-adress > div > div.buttons-adress > button.button-delete').click(() => {
                 $('#div-wrapper-edit-adress').css('display', 'none');
        });
    }

    function openEditAdress() {
        $(".bi-pencil").click(() => {
            $('#div-wrapper-edit-adress').css('display', 'block');
        });
    }

    $(document).ready(() => {
        closeEditAdress();
        openEditAdress();
    });
</script>

</html>