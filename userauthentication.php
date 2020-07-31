<?php   
$host = "localhost";
$user = "root"
$pass ="";
$banco ="sigaa"
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());

?>
<html>
<head>Autenticando usuário</head>
</html>

<?php 
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$sql = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario' and senha = '$senha'") or die (mysql_error());

$row = mysql_num_rows($sql);

if($row > 0){

    session_start();
    $_SESSION['usuario']=$_POST['usuario'];
    $_SESSION['senha']=$_POST['senha'];
    echo "Você Conseguiu";
    echo "<script>loginsuccessfully</script>";

}
?>