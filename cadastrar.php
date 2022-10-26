<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="estilo.css">
<script src="arquivo.js"></script>
<title>Cadastrando Usuarios</title>
</head>
<body>

<?php
   include "conectar.php"; /* chama o arquivo conectar.php */
?>

<?php
/*Recuperamos as informações do formulario */
$Nome = $_POST["Nome"];  //variavel $nome recebe o campo nome enviado através do metodo Post
$email = $_POST["email"];
$login = $_POST["login"];
$senha = MD5($_POST["senha"]);

/*Inserindo as informações na tabela usuario */

mysqli_query($conexao, "INSERT INTO cadastro_usuarios(nome, email, login, senha) VALUES ('$Nome','$email','$login','$senha')") or die("Usuário não cadastrado!"); 

//fecha conexão
mysqli_close($conexao);
/*exibindo mensagem de usuário cadastrado com sucesso */
echo"<script language='javascript' type='text/javascript'>
         alert('USUÁRIO CADASTRADO COM SUCESSO!!!');
            window.location.href='login.html';</script>";
?>

</body>
</html>