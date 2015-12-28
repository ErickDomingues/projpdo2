<?php

class Cliente {

    private $db;
    private $name;
    private $id;

    public function __construct(\PDO $db = null) {
        $this->checaLogin();
        if ($db === null) {
            try {
                $db = new \PDO('mysql:host=localhost;dbname=pdo', 'root', 'root');
            } catch (\PDOException $e) {
                If ($e->getCode() === 1045) {
                    echo "Usuário incorreto";
                }
            }
        }
        $this->db = $db;
    }

    public function checaLogin() {
        if (!isset($_SESSION['login'])) {
            header('location:menu.php?msg=Somente usuários logados podem gerenciar o cadastro de alunos');
        }
    }

    public function find($id) {
        $query = 'select * from clientes where id = :id';
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function buscar($texto) {
        $query = 'select * from clientes where name like :nome';
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':nome', '%' . $texto . '%');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function listar() {
        $query = 'select * from clientes';
        $stmt = $this->db->query($query);
        return $stmt->fetchAll();
    }

    public function inserir() {
        $query = "insert into clientes(id,name) values(:id,:nome);";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $this->getId());
        $stmt->bindValue(':nome', $this->getName());
        if ($stmt->execute()) {
            return "Cliente " . $this->getName() . " incluso com sucesso<br>";
        } else {
            return "Não foi possível incluir o Cliente<br>";
        }
    }

    public function alterar($id, $name) {
        $query = "update clientes set name=:nome where id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":nome", $name);
        if ($stmt->execute()) {
            return "Atualização efetuada com sucesso<br>";
        } else {
            return "Não foi possível atualizar o cadastro<br>";
        }
    }

    public function deletar($id) {
        $query = " delete from clientes where id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        if ($stmt->execute()) {
            return "Cliente id=" . $id . " Excluído com sucesso<br>";
        } else {
            return "Não foi possível excluir o Cliente<br>";
        }
    }

    //Geters and Seters
    function getName() {
        return $this->name;
    }

    function getId() {
        return $this->id;
    }

    function setName($name) {
        $this->name = $name;
        return $this;
    }

    function setId($id) {
        $this->id = $id;
        return $this;
    }

}
