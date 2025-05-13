<?php
//importação de arquivo produto.php
require_once "src/classes/produto.php";
//importação de arquivo Cliente.php
require_once "src/classes/Cliente.php";


//intancia de produto
$prod1 = new produto;
$prod1 -> titulo = "skol";
$prod1 -> descricao = "cerveja alemã";
$prod1 -> preco = 2.50;

$prod2 = new produto;
$prod2 -> titulo = "itaipava";
// $prod2 -> descricao = "cerveja brasileira";
$prod2 -> preco = 1.90;

var_dump($prod1);
echo "<br>";
var_dump($prod2);

$cli = new Cliente;
$cli -> nome = "joão";
$cli -> idade = 40;
$cli -> endereco = "Rua A";
$cli -> telefone = "41-xxxx-xxxx";

$cli ->comprar();
echo "<br>";
var_dump($cli);
