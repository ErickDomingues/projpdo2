<?php

require_once './Cliente.php';
try {
    $conexao = new \PDO('mysql:host=localhost;dbname=pdo', 'root', 'root');
} catch (\PDOException $e) {
    If ($e->getCode() === 1045) {
        echo "Usuário incorreto";
    }
}

//Intanciando o Cliente
$clienteErick = new Cliente($conexao);

//Setando o Cliente para efetuar a inclusão
$clienteErick->setName('Mssias')->setId('8');

//Inserindo o cliente
echo  $clienteErick->inserir();

//Listando todos os clientes
foreach ($clienteErick->listar() as $value) {
    echo $value[0]."-".$value[1]."<br>";
}

//Alterando o nome de um cliente
echo $clienteErick->alterar('7', 'Bull Peendranande');

//Listando um cliente selecionado
$value2 = $clienteErick->find('7');
echo $value2[0]."-".$value2[1]."<br>";

//Excluindo um Cliente
echo $clienteErick->deletar('1');

//Listando todos os clientes para ver as alterações
foreach ($clienteErick->listar() as $value) {
    echo $value[0]."-".$value[1]."<br>";
}


