<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Carros Seguros</title>
</head>
<body>
    
    <div style = "text-align: center;">

    <h1> COMPRA DE CARROS </h1>
    </div>
    <form method="post">
        <fieldset> 
            <legend>Modelo do carro:</legend>
            <label for="">nome:</label>
            <input type="text" name = "nome" placeholder = "Insira nome do carro">
            <br>
            <label for="cor">Cor:</label>
            <input type="text" name = "cor" >
            <br>
            <label for="fabricante">Fabricante:</label>
            <input type="text" name = "fabricante" >
            <br>
            <label for="ano">Ano:</label>
            <input type="text" name = "ano" >
            <br>
            <input type="reset" value="Limpar">
            <input type="submit" value="Enviar">
            <br>


        </fieldset>

    </form>
    <?php
    $nome= isset($nome)?$nome:'';
    function teste(){
    
        $GLOBALS['nome'] = $GLOBALS['nome'].$_POST['nome'];
        echo $GLOBALS['nome'];
    }    
    teste();
    
 
    ?>

</body>
</html>