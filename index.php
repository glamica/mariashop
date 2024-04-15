<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<?php
    require("conexao.php");
    $sql = "SELECT * FROM produtos";
    $qr = mysql_query($sql) or die(mysql_error());
    while ($ln = mysql_fetch_assoc($qr)) {
        echo '<h2>$ln["nome"]</h2><br/>';
        echo 'Preço:  R$ '. number_format($ln["preco"],2,',','.'). '<br/>';
    
    }
?>
</html>