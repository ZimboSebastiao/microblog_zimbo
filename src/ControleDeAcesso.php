<?php

namespace Microblog;

final final class ControleDeAcesso {

    public function __construct(){
        // Se não existir uma sessão em andamento
        if(!isset($_SESSION)){
            // então inicializa uma sessão
            session_start();
        }


 
    }

    public function verificaAcesso():void{
        if(!isset($_SESSION['id'])){
            session_destroy();
            header("location:../login.php");
            die();
        }
    }











}
    






?>