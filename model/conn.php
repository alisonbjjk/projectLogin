<?php

include("db.php");
//include ("f.php");
//include ("config.php");

try {
    $conn = new PDO(
        "mysql:host=$s;dbname=$db",
        "$u",
        "$p",
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
    );
} catch (PDOException $e) {
    echo $e->getMessage();
}

function buscarLogin($user, $senha)
{
    global $conn;

    //$senha = cpt($senha);

    $sql_auth = "SELECT * FROM usuario 
                            WHERE login = '" . $user . "' AND senha = '" . $senha . "'
                            AND ativo = '1';";

    $query = $conn->query($sql_auth) or die("Erro no select autentica " . print_r($conn->errorInfo()));
    $array = $query->fetch(PDO::FETCH_ASSOC);

    if ($array <> null) {
        $_SESSION['logado'] = 1;
    } else {
        $_SESSION['logado'] = 0;
    }
}
