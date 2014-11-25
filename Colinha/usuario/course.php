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

    case 1: // Dado um curso, quais as disciplinas
        $curso = $_GET["curso"];

        $query = "select c.id_disciplina AA, c.nm_disciplina BB, 'D' CC, null EE from $bd.formacao_curso cu inner join $bd.disciplina c on c.id_disciplina = cu.id_disciplina where id_curso = $curso "
                . " union "
                . "select c.id_topico AA, c.ds_topico BB, 'T' CC, cu.id_disciplina EE from $bd.formacao_disciplina cu inner join $bd.topico c on c.id_topico = cu.id_topico inner join $bd.formacao_curso f on f.id_disciplina = cu.id_disciplina where id_curso = $curso";
        //echo $query;
        break;
    case 2: // Traz os dados do usuario
        $texto = $_GET["ids"];

        $tx1 = ""; $tx2 = "";
        $lista = explode(",", $texto);
        foreach($lista as &$aux){
            if($aux[0] == 'T'){ // Tópico
                $tx1 .= substr($aux, 1) . ',';
            }
            else { // Disciplina
                $tx2 .= substr($aux, 1) . ',';
            }
        }
        $tx1 = substr($tx1, 0, - 1);
        $tx2 = substr($tx2, 0, - 1);
        if($tx1 != "" && $tx2 != ""){
            $query = "select a.id_questao from $bd.relacao_questao a where a.id_topico in ($tx1) "
                . " union "
                . "select c.id_questao from $bd.questao c inner join $bd.relacao_questao b on b.id_questao = c.id_questao inner join $bd.formacao_disciplina d on d.id_topico = b.id_topico where d.id_disciplina in ($tx2)";
        }
        else if($tx1 == ""){
            $query = "select c.id_questao from $bd.questao c inner join $bd.relacao_questao b on b.id_questao = c.id_questao inner join $bd.formacao_disciplina d on d.id_topico = b.id_topico where d.id_disciplina in ($tx2)";
        }
        else if($tx2 == ""){
            $query = "select a.id_questao from $bd.relacao_questao a where a.id_topico in ($tx1) ";
        }
        //echo $query;
        break;
    case 3:
        $id = $_GET["questao"];

        $query = "select * from $bd.questao where id_questao = $id";
        //echo $query;
        break;
}
$result = mysqli_query($conn, $query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
    exit();
}

switch ($request) {
    case 1: // Login
        $book = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $boo = array(
                "disciplina" => $row["BB"],
                "tipo" => $row["CC"],
                "id_pai" => $row["EE"],
                "id_disciplina" => $row["AA"]
            );
            array_push($book, $boo);
        }
        break;

                
    case 2:
        $book = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $boo = array(
                "id_questao" => $row["id_questao"]
            );
            array_push($book, $boo);
        }
        break;
        
    case 3:
        if ($row = mysqli_fetch_assoc($result)) {
            $book = array(
                "questao" => $row["ds_pergunta"],
                "resposta" => $row["ds_resposta"],
                "esperado" => $row["fl_resposta_correta"]
            );
        }
}

mysqli_close($conn);

echo json_encode($book)
?>
