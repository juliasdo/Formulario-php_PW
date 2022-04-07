<?php

//variaveis globais


$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$senha = $_POST['senha'];
$senha2 = $_POST['senha2'];
$email = $_POST ['email'];
echo "<p><strong> Nome: ".$nome."</strong></p>";
echo "<p><strong> Sexo: ".$sexo." </strong></p>";
echo "<p><strong> Senha:".$senha." </strong></p>";
echo "<p><strong> email ".$email. "</strong</p>>";
if (strlen ($nome)==0)
{
 echo"Campo obrigatório";
 header("Location:formulario.php?erro=nome");
}

if (strlen ($senha)<6)
{
 echo"Digite no minimo 6 digitos";
 header("Location:formulario.php?erro=senha");   
}
if (!($senha2==$senha))
{
    header("Location:formulario.php?erro=senhaDif");
}

var _dump ($_FILES ['arq']);

?>