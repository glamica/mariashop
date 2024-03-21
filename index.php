<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MariaShop</title>
        <style>
            .tabulado * {
    display: flex;
    justify-content: space-between;
    width: 50%;
}
.tabulado .center > * {
    margin: 5px 28.571%;
}
.tabulado .center button {
    background-color: lightgreen;
    color: white;
    border-radius: 15px;
    padding: 5px;
    font-weight: 600;
    margin-top: 10px;
    border: none;
    box-shadow: 2px 2px 3px 3px rgba(0, 0, 0, 0.513);
}
.tabulado .center button:not(:hover) {
    background-color: chartreuse;
    scale: 90%;
    box-shadow: none;
}
.weird {
    transform: rotate(-90deg);
    width: 400px
}
        </style>
    </head>
    <body>
        <header>
            <h1>MariaShop</h1>
        </header>
        <form action="" method="post" class='tabulado'>
            <div>
                <label for="#nome">Codigo</label>
                <input type="text" name="codigo" id="nome">
            </div>
            <div>
                <label for="#quantidade">Quantidade</label>
                <input type="number" name="qtvenda" id="quantidade">
            </div>
            <div class='center'>
                <button type="submit">buscar/"adicionar ao carrinho"</button>
            </div>
        </form>
        <div class='weird'>
            <h1>Treta</h1>
            <input>
        </div>
    </body>
</html>
<?php
 $conexao = mysqli_connect("localhost","root" ,"", "3PPP");
     if (isset($_POST['baixar'])){
      $codigo=$_POST['codigo'] ; 
    $qtvendida=$_POST["qtvendida"];        
     
    $sql="SELECT * FROM movimento WHERE codigo='$codigo' ";
     $result= mysqli_query($conexao,$sql);
     while ($linha=mysqli_fetch_array($result)) {  
      $qtdade=$linha['qtdade'];
         if ($qtdade>= $qtvendida){
      $novaqtdade= $qtdade-  $qtvendida; 
    $baixa="UPDATE movimento SET qtdade='$novaqtdade' WHERE codigo='$codigo'";
     $resultado=mysqli_query($conexao,$baixa);
     if ($resultado) {
         $vlvenda=$qtvendida*$linha['valor'];
       echo "descrição  " . $linha['descr']."<br>";
        echo"valor da venda  " .$vlvenda."<br>";
     }   
           }
   }     
     }
?>