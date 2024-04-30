<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<div class="user-data container-active">
<h1>Seus Dados</h1>
<div class="ajusts-container">
 
 <div class="personal-data">
    <form>
    <h2>Dados pessoais</h2>
        <label for="name">
            Nome completo
            <input type="text" id="name" placeholder="Fulano da Silva">
        </label>
        <label for="birth">
            Data de nascimento
            <input type="text" id="birth" placeholder="04/04/2004">
        </label>

        <label for="CPF">
            CPF
            <input type="text" id="CPF" placeholder="112.226.339-08">
        </label>

        <label id="label-gender" for="gender">
            Sexo
        <select name="gender" id="gender">
            <option value="0">Masculino</option>
            <option value="0">Feminino</option>
        </select>
        </label>

        <label for="phone">
            Telefone
            <input type="text" id="phone" placeholder="(47) 90000-0000">
        </label>
    </form>
 </div>
 <div class="acess-data">
    <form>
        <h2>Dados de acesso</h2>
        <label for="email">
            E-mail atual
            <input type="text" id="email" value="joaovitormachadororato@gmail.com">
            <div class="buttons">
                <button>
                    ALTERAR E-MAIL
                </button>
                <button>
                    ALTERAR SENHA        
                </button>
            </div>
        </label>
    </form>
 </div>

<div class="save-data">


<button class="button-save">
    Salvar alterações
</button>

</div>
</div>

<style>
    .user-data{
    width: 100%;
    font-size: 70%;
}
.ajusts-container{
    display: flex;
    flex-direction: column;
    align-items: center;
    flex-wrap: nowrap;
    border: 1px solid #0a0f16;
    border-radius: 10px;
    padding: 1rem;
    max-width: 100%;
}

.personal-data{
    border-bottom: 1px solid #0a0f16;
}

.personal-data, .acess-data{
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
    width: 100%;
}

form{
    width: 100%;
    font-size: 150%;
}

.personal-data h2, .acess-data h2{
    font-size: 50%;
    margin-bottom: 1rem;
}

label .buttons{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    font-size: 1rem;
    gap: 1rem;
}

label button{
    background-color: #477d41;
    cursor: pointer;
    padding: 0.5rem 1rem;
    border-radius: 10px;
}
label button:hover{
    cursor: pointer;
    padding: 0.5rem 1rem;
    border-radius: 10px;
    opacity: 0.8;
}


.save-data{
    display: flex;
    flex-direction: row;
    justify-content: center;
    width: 100%;
    font-size: 1rem;
    
}
.button-save{
    background-color: #8b020d;
    cursor: pointer;
    padding: 0.5rem 1rem;
    border-radius: 10px;
    margin: 2rem 0 5rem 5% ;
}
.save:hover{
    opacity: 0.8;
}
</style>

<script>
  
</script>
</html>