<?php 
$host = "localhost";                                      
$user = "id17600090_cadastrar";                           
$pass = "l}#i|}nh0}]p!6}R";                                     
$banco = "id17600090_login";                           
$conexao = mysqli_connect($host, $user, $pass, $banco);  
if (!$conexao) {                                          
 echo "Connection Error". PHP_EOL;
 echo "Error Code: ". mysqli_connect_errno().PHP_EOL;
 echo "Error: Description".mysqli_connect_error().PHP_EOL;
 exit;
}
?>
