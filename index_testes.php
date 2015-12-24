<?php

try {
    $conexao = new \PDO('mysql:host=localhost;dbname=pdo', 'root', 'root');
//$query = "insert into clientes(id,name)values(2,'Pedro');insert into clientes(id,name)values(3,'João');";
    $query = 'Select * from clientes;'; //Montagem de query
    $selecao = $conexao->query($query); //Definição de query
    $resultado = $selecao->fetchAll(); //Seleção dos resultados
//Exibição dos dados
    echo $resultado[0][0];
    echo $resultado[0][1];

//Impressão de tabela -INICIO
    echo "<table>";
    for ($index = 0; $index < count($resultado); $index++) {
        echo '<tr><td>' . $resultado[$index][0] . '</td><td>' . $resultado[$index][1] . '</td></tr>';
    }
    echo "</table>";
//Impressão de tabela -FIM

    $selecao = $conexao->query($query); //Definição de query
    $resultado = $selecao->fetch(PDO::FETCH_ASSOC);

    foreach ($resultado as $view) {
        echo $view;
    }

//bUSCANDO DO GET
    $query = 'select * from clientes where id=:id';
    $selecao = $conexao->prepare($query);
    $selecao->bindValue(':id', $_GET['id']);
    $selecao->execute();
   
    print_r($selecao->fetchAll());
    
} catch (\PDOException $e) {
    If ($e->getCode() === 1045) {
        echo "Usuário incorreto";
    }
}