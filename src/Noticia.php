<?php

namespace Microblog;
use PDO, Exception;

final class Noticia {
    private int $id;
    private string $data;
    private string $titulo;
    private string $texto;
    private string $resumo;
    private string $imagem;
    private string $destaque;
    private string $termo;
    private PDO $conexao;
    

    // Propriedades, cujo tipos são associados à classes já existentes. 
    // Isso permitirá usar recursos destas classes à partir de Noticia
    public Usuario $usuario;
    public Categoria $categoria;



    public function __construct()
    {
        // Ao criar um objeto Noticia, aproveitamos para instanciar objetos de Usuario e Categoria
        $this->usuario = new Usuario;
        $this->categoria = new Categoria;

        $this->conexao = Banco::conecta();
    }



       // Inserir Noticia
       public function inserir():void {
        $sql = "INSERT noticias(titulo, texto, resumo, imagem, destaque, usuario_id, categoria_id)
                VALUES(:titulo, :texto, :resumo, :imagem, :destaque, :usuario_id, :categoria_id)";

        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":titulo", $this->titulo, PDO::PARAM_STR);
            $consulta->bindValue(":texto", $this->texto, PDO::PARAM_STR);
            $consulta->bindValue(":resumo", $this->resumo, PDO::PARAM_STR);
            $consulta->bindValue(":imagem", $this->imagem, PDO::PARAM_STR);
            $consulta->bindValue(":destaque", $this->destaque, PDO::PARAM_STR);

            // Aqui, primeiro chamamos os getters de ID do Usuario e de Categoria para só depois associar os valores aos parâmetros de consulta SQL.
            // Isso é possível devido a associação entre as classes.
            $consulta->bindValue(":usuario_id", $this->usuario->getId(), PDO::PARAM_INT);
            $consulta->bindValue(":categoria_id", $this->categoria->getId(), PDO::PARAM_INT);
            $consulta->execute();
           
        } catch (Exception $erro) {
           die("Erro ao inserir Noticia: ".$erro->getMessage());
        }
    }




    // Ler todas Noticia
    public function listar():array {

        // Se o tipo do usuario logado for o admin
        if ($this->usuario->getTipo() === "admin") {
           // Considere o sql abaixo (Pega tudo de todos)
            $sql = "SELECT noticias.titulo, noticias.data, usuarios.nome AS autor, usuarios.id, noticias.destaque
                    FROM noticias INNER JOIN usuarios ON noticias.usuario_id = usuarios.id ORDER BY data DESC";
        } else {
            // Senão, considere o sql abaixo (Pega somente referente ao editor)
            $sql = "SELECT titulo, data, destaque
                    FROM noticias WHERE usuario_id = :usuario_id ORDER BY data DESC";
        }
        
        
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro ao ler noticias: ".$erro->getMessage());
        }    

        return $resultado;
    }

    // Ler uma Noticia
    public function lerUm():array {
        $sql = "SELECT * FROM noticias WHERE id = :id";

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

    // Atualizar uma Noticia 
    public function atualizar():void {
        $sql = "UPDATE noticias SET titulo = :titulo WHERE id = :id";

        try {
            $consulta = $this->conexao->prepare(($sql));
            $consulta->bindValue(":id", $this->id, PDO::PARAM_INT);
            $consulta->bindValue(":titulo", $this->titulo, PDO::PARAM_STR);
            $consulta->execute();
        
        } catch (Exception $erro) {
            die("Erro ao atualizar noticia: ".$erro->getMessage());
        }
    }

    // Excluir uma categoria
    public function excluir():void {
        $sql = "DELETE FROM noticias WHERE id = :id";
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->bindValue(":id", $this->id, PDO::PARAM_INT);
            $consulta->execute();
        } catch (Exception $erro) {
            die("Erro ao excluir noticia ".$erro->getMessage());
        }
    }





    // Método para upload de foto
    public function upload(array $arquivo):void {
        // Definindo os tipos válidos
        $tiposValidos = [
            "image/png" , 
            "image/jpeg" , 
            "image/gif" , 
            "image/svg+xml"
        ];

        // Verificando se o arquivo não é um dos tipos válidos
        if (!in_array($arquivo["type"], $tiposValidos)) {
            // Alertamos o usuário e o fazemos voltar para o form.
            die("<script> 
                alert('Formato Inválido!');
                history.back();
                </script>"
            );
        }

        // Acessar APENAS  o nome/extensão do arquivo
        $nome = $arquivo["name"];

        // Acessando os dados de acesso/armazenamento temporários
        $temporario = $arquivo["tmp_name"];

        // Definindo a pasta de destino das imagens no site
        $pastaFinal = "../imagens/".$nome;

        // Movemos/enviamos da área temporária para a final/destino
        move_uploaded_file($temporario, $pastaFinal);

    }







   
    public function getId(): int
    {
        return $this->id;
    }

  
    public function setId(int $id): self
    {
        $this->id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        return $this;
    }


    public function getData(): string
    {
        return $this->data;
    }


    public function setData(string $data): self
    {
        $this->data = filter_var($data,  FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }


    public function getTitulo(): string
    {
        return $this->titulo;
    }


    public function setTitulo(string $titulo): self
    {
        $this->titulo = filter_var($titulo, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }


    public function getTexto(): string
    {
        return $this->texto;
    }


    public function setTexto(string $texto): self
    {
        $this->texto = filter_var($texto, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }


    public function getResumo(): string
    {
        return $this->resumo;
    }


    public function setResumo(string $resumo): self
    {
        $this->resumo = filter_var($resumo, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }


    public function getImagem(): string
    {
        return $this->imagem;
    }


    public function setImagem(string $imagem): self
    {
        $this->imagem = filter_var($imagem, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }


    public function getDestaque(): string
    {
        return $this->destaque;
    }


    public function setDestaque(string $destaque): self
    {
        $this->destaque = filter_var($destaque, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }


    public function getTermo(): string
    {
        return $this->termo;
    }


    public function setTermo(string $termo): self
    {
        $this->termo = filter_var($termo, FILTER_SANITIZE_SPECIAL_CHARS);

        return $this;
    }



}



?>