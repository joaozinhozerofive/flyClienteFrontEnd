<?php
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

<div class="content">

<div  class ='signUp hidden'>
    <h1>Crie sua conta</h1>
    <label for="name">
        Nome
        <input type="text" name="name" id="name" placeholder="Ex: Fulano da Silva">
    </label>

    <label for="email">
        E-mail
        <input type="email" name="email" id="email" placeholder="Ex: musicfly@musicfly.com.br">
    </label>
    <label for="password">
        Senha
        <input type="password" name="password" id="password" placeholder="No mínimo 6 caracteres">
    </label>

    <button class="come">
        Finalizar
    </button>
    <h1>Já tenho uma conta</h1>

</div>

<div  class ='signIn'>
    <h1>Faça login</h1>
    <label for="email">
        E-mail
        <input type="email" name="email" id="email" placeholder="Ex: musicfly@musicfly.com.br">
    </label>
    <label for="password">
        Senha
        <input type="password" name="password" id="password" placeholder="No mínimo 6 caracteres">
    </label>

    <button class="come">
        Entrar
    </button>
    <h1>Crie sua conta</h1>

</div>


</div>
</body>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    grid-area: content;
    height: 100%;
    width: 100vw;

    overflow-y: auto;
    overflow-x: hidden;

    padding-bottom: 2rem;
}


.content >div{
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 1rem;
    background-color: black;
    padding: 1rem;
    border-radius: 8px;
    width: 25rem;
    max-width: 100%;
    margin: 0 auto;
    font-size: 70%;
}

.content >div >h1{
  margin: 0 auto;
}

.content >div >h1:last-child:hover{
  cursor: pointer;
  text-decoration: underline;
}

.content > div > button{
    background-color: #8b020d;
    padding: 0.5rem 1rem;
    border-radius: 0.8rem;
    cursor: pointer;
}

input{
    background: rgb(0, 10, 15);
    padding: 0.5rem;
    border-radius: 5px;
    width: 100%;
    font-size: 70%;
}

.hidden{
    display: none !important;
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

    function openSignIn() {
        $("h1:last-child").click(function() {
            let signUp = $('.signUp');
            let signIn = $('.signIn');
            if(signUp.hasClass('hidden')){
                signUp.removeClass('hidden');
                signIn.addClass('hidden');
            }else{
                signIn.removeClass('hidden');
                signUp.addClass('hidden');
            }
           
        })
    }
    $(document).ready(()=> {
        openSignIn();
    });
</script>

</html>
