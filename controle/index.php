<?php

// function exer1()
// {
//     $a = '2';
//     $b = '2';

//     $c = $a + $b;

//     if ($c > 21) {
//         ($c = $c + 8);
//         echo ($c);
//     } else if ($c < 20) {
//         ($c = $c - 5);
//         echo ($c);
//     }
// }
// echo exer1();


// function exer2()
// {
//     $a = '30';
//     if ($a / 10) {
//         echo ("divide por 10!");
//     } else if ($a % 5) {
//         echo ("divide por 5!");
//     } else if ($a % 2) {
//         echo ("divide por 2!");
//     } else {
//         echo ("Não é divisor de 10, 5 e 2!!");
//     }
// }
// echo exer2();


// function exer3(){
//     $nome = "Alison";
//     $idade = '25';
//     $sexo = "feminino";

//     if($sexo == "feminino" and $idade < '25'){
//         echo ($nome. "\n". "Aceito!!");
//     }
//     else{
//         echo ($nome. "\n". "Não Aceito!!");
//     }
// }
// echo exer3();


// function exer4()
// {

//     $a = '9';
//     $b = '8';
//     $c = '4';

//     $arr = array($a, $b, $c);

//     echo ($arr[0]);
//     echo '<hr>';
//     echo ($arr[1]);
//     echo '<hr>';
//     echo ($arr[2]);
// }
// echo exer4();


// function exer5()
// {

//     $array = 7;
//     switch ($array) {
//         case 1:
//             $mes_ = "JANEIRO";
//             break;
//         case 2:
//             $mes_ = "FEVEREIRO";
//             break;
//         case 3:
//             $mes_ = "MARÇO";
//             break;
//         case 4:
//             $mes_ = "ABRIL";
//             break;
//         case 5:
//             $mes_ = "MAIO";
//             break;
//         case 6:
//             $mes_ = "JUNHO";
//             break;
//         case 7:
//             $mes_ = "JULHO";
//             break;
//         case 8:
//             $mes_ = "AGOSTO";
//             break;
//         case 9:
//             $mes_ = "SETEMBRO";
//             break;
//         case 10:
//             $mes_ = "OUTUBRO";
//             break;
//         case 11:
//             $mes_ = "NOVEMBRO";
//             break;
//         case 12:
//             $mes_ = "DEZEMBRO";
//             break;
//         default:
//             $mes_ = "NÃO EXISTE";
//             break;
//     }
//     echo $mes_;
// }
// echo exer5();


// function exer6()
// {
//     $multi = '5000';
//     echo str_repeat("SOL \n", $multi);
// }
// echo exer6();

// $arr = ['123', '456','789'];

// var_dump($arr[1]);

// $t = 1;
// for ($i = 10; $i >= $t; $i--) {
//     echo $i;
//     echo'<hr>';
// }


// require_once('../model/conn.php');
// function teste()
// {
//     global $conn;

//     $sql_auth = "SELECT * FROM usuario";

//     $query = $conn->query($sql_auth) or die("Erro no select autentica " . print_r($conn->errorInfo()));
//     $array = $query->fetch(PDO::FETCH_ASSOC);

//     if ($array <> null) {
//         var_dump($array);
//     } else {
//         echo error_log("erro no codigo!!");
//     }


// //var_dump($teste);
// echo '<br>';
// echo '<br>';
// echo teste();


// function exer()
// {
//     $a = '200' ;
//     echo '<hr>';
//     echo ("-9%: ". ($a * 0.91));
//     echo '<hr>';
// }
// echo exer();

