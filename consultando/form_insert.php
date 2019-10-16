<html lang="pt-br">
    <head>
        <title>Insert em PHP</title>
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
        <div class="container">           
                                <br>
            <div class="row"> 

                <div class="col col-sm-4 col-xs-1"></div> 
                <div class="col col-sm-4 col-xs-6">  
                    <img src="img/agenda.png" id="img1">
                </div> 
                <div class="col col-sm-4 col-xs-5"></div> 

            </div>

            <div class="row">   

                <div class="col col-sm-4"></div>

                <div class="col col-sm-4"> 

                    <h1>Cadastrar</h1>

                    <form action="insert.php" method="Post" class="form-group"><br>

                    Nome <br>
                    <input type="text" name="nome" class="form-control" placeholder="Digite o seu nome:" required><br><br>

                    Unidade de Saúde <br>
                    <input type="text" name="unidade" class="form-control" placeholder="Digite a sua unidade de saúde:" required> <br><br>

                    Número de Prontuário <br>
                    <input type="number" name="prontuario" class="form-control" placeholder="Digite o seu número de prontuário:" required> <br><br>

                    Senha <br>
                    <input type="password" name="senha" class="form-control" placeholder="Digite a sua senha:" required> <br><br>
                    
                    <input type="submit" class="btn btn-primary" value="Cadastrar"> <br><br>

                    <a href="index.php" class="btn btn-primary">Logar</a> 
                    </form>
                </div>

                <div class="col col-sm-4"></div>
            </div>
            
        </div>
        
    </body>
</html>

    
