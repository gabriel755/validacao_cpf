<?php

        function cpfvalido($cpf){
          $expressao = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';
          return preg_match($expressao, $cpf);
        }

    if(isset($_POST['acao'])){
        $cpf =  $_POST['cpf'];
        if(cpfValido($cpf)){
            echo 'O CPF é válido!';
        }else{
            echo 'O CPF é inválido!';
        }
    }
?>

<form action="" method="post">
    <input type="text" name="cpf">
    <input type="submit" name="acao">
</form>