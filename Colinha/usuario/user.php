<?php

header('Content-Type: application/json');

  $servername = "mysql.hostinger.com.br";
  $username = "u962054708_colin";
  $password = "teste123";
  $bd = "u962054708_colin";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);

/*

$servername = "localhost";
$username = "root";
$password = "teste";
$bd = "colinha";

$conn = mysqli_connect($servername, $username);
 */


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


$request = $_GET["request"];
$query = "";
switch ($request) {

    case 1: // Login
        $login = $_GET["login"];
        $senha = $_GET["senha"];

        $query = "select 1 from $bd.usuario where id_usuario = '$login' and ds_senha = '$senha'";
        //echo $query;
        break;
    case 2: // Traz os dados do usuario
        $login = $_GET["login"];

        $query = "select u.nm_usuario,u.ds_titulo_atual,u.nu_moeda,un.sg_universidade,u.id_universidade, c.id_curso, c.nm_curso "
                . "from $bd.usuario u inner join $bd.universidade un on un.id_universidade = u.id_universidade "
                . "inner join $bd.curso c on c.id_curso = u.id_curso "
                . "where id_usuario = '$login'";
        break;
    case 3: // Traz o nome do curso
        $curso = $_GET["curso"];

        $query = "select * from $bd.curso "
                . "where id_curso = $curso";
        break;
}
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
    exit();
}

switch ($request) {
    case 1: // Login
        if ($row = mysqli_fetch_assoc($result)) {
            $book = array(
                "ok" => "1"
            );
        } else {
            $book = array(
                "ok" => "0"
            );
        }
        break;

    case 2:
        if ($row = mysqli_fetch_assoc($result)) {
            $book = array(
                "nome" => $row["nm_usuario"],
                "foto" => 87,
                "titulo" => $row["ds_titulo_atual"],
                "moedas" => $row["nu_moeda"],
                "pontos" => 989,
                "universidade" => $row["sg_universidade"],
                "id_universidade" => $row["id_universidade"],
                //"curso" => $row["nm_curso"],
                "id_curso" => $row["id_curso"]
            );
        }
        break;
    case 3:
        if ($row = mysqli_fetch_assoc($result)) {
            $book = array(
                "curso" => $row["nm_curso"],
                "id_curso" => $row["id_curso"]
            );
        }
        break;
}

mysqli_close($conn);

echo json_encode($book)
?>
