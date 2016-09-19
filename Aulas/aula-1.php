<!DOCTYPE html>
<!--
Nessa aula aprendi como usar linhas e colunas no bootstrap
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link  href="../bootstrap/css/bootstrap.css" rel="stylesheet" />
    </head>
    <body>
        <?php
        // put your code here
        ?>
        <div class="row"> 
            <div  class="col-md-4"> 
                <span>
                    Dimitri Miranda
                </span>

            </div>

            <div  class="col-md-1"> 
                <a href="#" class="btn btn-success">Editar</a>
            </div>

            <div  class="col-md-1"> 
                <a href="#" class="btn btn-danger">Deletar</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <table class="table table-hover table-bordered">
                    <tr>
                         <th>Valor  1</th>
                         <th>Valor 2</th>
                    </tr>
                    <tr>
                        <td class="text-right">9.00</td>
                        <td class="text-right">10.00</td>
                    </tr>
                </table>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <table class="table table-hover table-bordered">
                    <tr>
                         <th>Valor  1</th>
                         <th>Valor 2</th>
                    </tr>
                    <tr>
                        <td class="text-right">9.00</td>
                        <td class="text-right">10.00</td>
                    </tr>
                </table>
            </div>
        </div>
        
    </body>
 </html>
