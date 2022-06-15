<?php
    $nome = '';
    function pegaDados(){
        $nome .= $_POST['nome'];
        echo $nome;
    }
    pegaDados();
    ?>