<?php include('assets/cidades.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melhores cidades para morar</title>
    <link rel="stylesheet" href="css/desafios.css">
</head>
<body>
    
    <i><u><h2>"As melhores cidades brasileiras para se morar"</h2></u></i>
    <table>
        <tr>
            <th>Cidade e Estados
            <a href='?tipo=nome&ordem=asc'>&#9650;</a>
            <a href='?tipo=nome&ordem=desc'>&#9660;</a>
            </th>

            <th>IDH
            <a href='?tipo=sigla&ordem=asc'>&#9650;</a>
            <a href='?tipo=sigla&ordem=desc'>&#9660;</a>
            </th>
        </tr>
        <?php
        foreach($cidades as $nome => $sigla) {
            echo "<tr><td>" .$nome. "</td>";
            echo "<td>" .$sigla. "</td></tr>"; 
        }

 ?>
   </table>
</body>
</html>