<?php 
class Menu{
    public function printHTML(){
        echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
                    <link rel='stylesheet' href='style.css'>
                    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css' rel='stylesheet'>
        </head>
        
        <menu class='close' id='menuContainer'>
            <div class='menu'>
                <main class='options'>
        
                       <p>
                       <a href = 'http://localhost/projeto_php/src/pages/ajuda'>
                            Ajuda
                        </a>
                       </p>

                       <p>
                       <a href = 'http://localhost/projeto_php/src/pages/sobrenos'>
                            Sobre nós
                        </a>
                       </p>
        
                       <p>
                       <a href = 'http://localhost/projeto_php/src/pages/contatos'>
                        Contatos
                        </a>
                       </p>
                </main>
        
                    
            </div>
        </menu>
        
        
        <style>
            menu {
                position: fixed;
                top: 8%;
                display: flex;
                flex-direction: column;
                align-items: center;
        
                grid-area: menu;
        
                position: absolute;

                z-index:1000;
            }
        
            menu div{
        
                width: 100%;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
        
                padding: 10px;
        
                box-shadow: 0.1px 0.1px 3px gray;
                grid-area: menu;
        
                background: black;
        
                margin-top: 4px;
        
                border-radius: 8px;;
            }
        
            .menu{
                display: flex;
                flex-direction: column;
                align-items: start;
        
                gap: 10px ;
            }
        
            .menu i{
                font-size: 45%;
            }
        
            .menu p{
                font-size: 45%;
                font-family: 'Poppins', sans-serif;     
        
                cursor: pointer;
            }

            .menu p a{
                text-decoration: none;
            }
            .menu a:hover, .menu i:hover{
                color: #410b0e ;
            }
        
            .menu .options{
                display: flex;
                flex-direction: column;
                align-items: start;
        
                gap: 0.8rem;
            }
        
            .close{
                animation: menuToClose 0.5s linear forwards;
            }
        
            .open{
              animation: menuToOpen 0.3s linear forwards;
            }
        
            @keyframes menuToOpen{
                from{
                    left: -100%;
                }
                to{
                    left: 2%;
                }
            }
        
            @keyframes menuToClose{
                from{
                    left: 0;
                }
                to{
                    left: -100%;
                    display: none;
                }
            }
        </style>
        
        </html>
        ";
    }
}


?>





       

