<?php 

namespace Microblog;
use Exception,  PDO;

class Categoria {

    private int $id;
    private string $nome;
    private PDO $conexao;

    public function __construct(){
        $this->conexao = Banco::conecta(); 
     }


    // Inserir Categoria
    public function inserir():void {
        $sql = "INSERT categorias(nome)
                VALUES(:nome)";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->execute();
           
        } catch (Exception $erro) {
           die("Erro ao inserir Categoria: ".$erro->getMessage());
        }
    }

    // Ler todas Categorias
    public function ler():array {
        $sql = "SELECT * FROM categorias ORDER BY nome";
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro ao ler categoria: ".$erro->getMessage());
        }    

        return $resultado;
    }

    // Ler uma Categoria
    public function lerUm():array {
        $sql = "SELECT * FROM categorias WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $this->id, PDO::PARAM_INT);
            $consulta->execute();
            $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro ao carregar os dados: ".$erro->getMessage());
        }

        return $resultado;
    }

    // Atualizar uma Categoria
    public function atualizar():void {
        $sql = "UPDATE categorias SET nome = :nome WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare(($sql));
            $consulta->bindValue(":id", $this->id, PDO::PARAM_INT);
            $consulta->bindValue(":nome", $this->nome, PDO::PARAM_STR);
            $consulta->execute();
        
        } catch (Exception $erro) {
            die("Erro ao atualizar categoria: ".$erro->getMessage());
        }
    }

    // Excluir uma categoria
    public function excluir():void {
        $sql = "DELETE FROM categorias WHERE id = :id";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $this->id, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro ao excluir usuário ".$erro->getMessage());
        }
    }

























    public function getId(): int{
        return $this->id;
    }

    public function setId(int $id): self{
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        return $this;
    }

    
    public function getNome(): string{
        return $this->nome;
    }


    public function setNome(string $nome): self{
        $this->nome = filter_var($nome, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }
}







?>