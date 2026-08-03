<?php
//informe os dados de conexão com o seu banco
$servername = "";
$username = "";
$password = "";
$dbname = "sweetmorning";
$port = "3306";

try {
    $conn = new PDO(
        "mysql:host=$servername;port=$port;dbname=$dbname;charset=utf8mb4",
        $username,
        $password
    );  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Conexão realizada com Sucesso!";


  

} catch(PDOException $e) {
  echo "Conexão Falhou: " . $e->getMessage();
}
?>