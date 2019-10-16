<html lang="pt-br"> 

    <head>
        <title>Marcar Consulta</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css" type="text/css"/>
        
        <style>
            body{
                background-color: #1cf;
            }        
            h1, h2, option{
                color: #00f;
                font-weight: bold;
            }
            #img1{
                border-radius: 10%;
            }
        </style>

        <script type="text/javascript">
                        function abreJanela(URL) {
                        location.href = URL; 
                        }
        </script>
    </head>

    <body>    

        <div class="container"> 
                    <br>
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

                    <form class="form-group">
                    <br><br>
                    <h1>Marcar Consulta</h1>   

                    <h2 style="text: center">Especialidades</h2>
                    <!--<select value="okay" okText="Okay" cancelText="Dismiss">-->
                    <select name="paginas" onchange="javascript: abreJanela(this.value)">
                        <option value="selecione">Selecione</option>
                        <option value="clinico.php">Clínica Médica</option>
                        <option value="cardio.php">Cardiologia</option>
                        <option value="endo.php">Endoclinologia</option>
                        <option value="geriatra.php">Geriatria</option>
                        <option value="gastro.php">Gastroenterologia</option>
                    
                    </select>
                        <br><br>  
                                <!--
                    <h2>Médico</h2>  
                            <?php 
                      /*       include "connect.php";
                            $sql = mysqli_query($link, "SELECT nome as 'Nome do medico' FROM tb_medico WHERE id_especialidade = 2");
                           # $linha = $sql-> fetch_assoc();
                            $linha = mysqli_fetch_assoc($sql);
                            $total= mysqli_num_rows($sql);
                            $cont=1;
    
                        var_dump($linha);

                            // se o número de resultados for maior que zero, mostra os dados
                                if($total >= 0) {
                                    // inicia o loop que vai mostrar todos os dados
                                    do {

                                        echo ("<p>{$linha['Nome do medico']}</p>");
                                        $cont++;
                                    // finaliza o loop que vai mostrar os dados
                                    }while($cont <= $total);
                                // fim do if 
                                }
                            ?>

                            <?php
                            echo ("
                            
                       <select value='okay' okText='Okay' cancelText='Dismiss'>
                        <option value='selecione'>Selecione</option>
                        <option value='1'>Paulo Alves</option>
                        <option value='2'>Eneida Sousa</option>
                        <option value='3'>Alessandra Pinheiro</option>
                        <option value='4'>Celso Furtado</option>
                        <option value='5'>Sonia Regina</option>
                        <option value='6'>Murilo Filho</option>
                        <option value='7'>Antonio Castro</option>
                        <option value='8'>Manoel Ribeiro</option>
                        <option value='9'>José filho</option>
                        <option value='10'>Mariana Rios</option>
                        <option value='11'>Mariano José</option>
                    
                    </select>
                            
                            ")     */
                            if(!isset($_SESSION))
                            {
                               echo("Não iniciou");
                            }else{
                                echo("Iniciou");
                            }



                        ?>
                  
                            <br><br>

                    <a href="comprovante.php" class="btn btn-primary">Comprovante</a> <br><br>
              -->
                    <a href="index.php" class="btn btn-primary">Voltar</a>

                    </form>   
                </div>

                <div class="col col-sm-4"></div> 
            </div>  

        </div>

    </body>

</html>