<?php
// Iniciando um array em branco na variavel
$lista = array();
//echo $lista;
//echo $lista[0] Não funcionará 
// Não existe dados no indice 0;

$nomes = array("Fernando",  // Indice 0
                "Vitoria", // Indice 1
                "Denise",  // Indice 2
                "Mateus",  // Indice 3
                "Guilherme",// Indice 4
                "Roge",     // Indice 5
                "Virlene"); // Indice 6

// Acessando cada item do array Manualmente
/*
echo $nomes[0]."<br>";
echo $nomes[1]."<br>";
echo $nomes[2]."<br>";
echo $nomes[3]."<br>";
echo $nomes[4]."<br>";
echo $nomes[5]."<br>";
echo $nomes[6]."<br>";
*/
for($i = 0; $i< count($nomes); $i++)
{
    //echo $nomes[$i]."<br>";
}

$dados = array();
$dados["Nome"] = array(     "Fer",  "Maria",    "Joao");
$dados["Idade"] = array(    32,     18,         25);
$dados["solteiro"] = array( true,   false,      false);

for($i = 0; $i<10; $i++){
     array_push($dados,$i);
}


echo    "<pre>";
var_dump($dados);
echo "</pre>";
$dados[1] = "Fernando Está no indice 1";
echo $dados[1];

echo    "<pre>";
var_dump($dados);
echo "</pre>";
/*
$_POST["Senha"];
$_GET["Id"];
$_COOKIE["Carrinho"];
$_SESSION
$_FILES;
*/
$listaBanco = mysqli_query($conn, "select nome, idade from tabela");
$listaBanco["nome"];
?>