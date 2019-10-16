<html lang="pt-br">
    <head>
        <title>Select em PHP</title>
        <meta charset="utf-8">    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css"/>

     <style>
        body{
            background-color: #1cf;
        }
        form, h1{
            color: #00f;
            font-weight: bold;
        }
        </style>
    </head>
	
    <body>

        <div class="container">        <br>

            <div class="row"> 

                <div class="col col-sm-4"></div> 
                <div class="col col-sm-4">  
                    <img src="img/agenda.png" id="img1">
                </div> 
                <div class="col col-sm-4"></div> 

            </div>

            <div class="row">   

                <div class="col col-sm-4"></div>

                <div class="col col-sm-4"> 

                    <h1>Fazer Login</h1>

                    <form action="select.php" method="POST" class="form-group"><br><br>

                        Número de Prontuario <br>
                        <input type="number" name="prontuario" class="form-control" placeholder="Digite o seu prontuario:" required> <br><br>

                        Senha <br>
                        <input type="password" name="senha" class="form-control" placeholder="Digite a sua senha:" required> <br><br>

                        <input type="submit" value="Entrar" class="btn btn-primary">
                        <br> 
                      
                        <h2>Não é cadastrado???</h2>   

                        <a href="form_insert.php" class="btn btn-primary">Cadastre-se</a>

                    </form> 
                </div>
                <div class="col col-sm-4"></div>
            </div>
         
        </div>

    </body>
</html>
