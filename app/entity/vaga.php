<?php

namespace App\entity;

use \App\db\Database;

class Vaga{

    /**
     * identificador unico
     * da vaga
     * @var integer
     */

    public $id;

    /**
     * titulo da vaga
     * @var string
     */
    public $titulo;

    /**
     * descricao da vaga
     * @var string
     */
    public $descricao;

    /**
     * define se a vaga esta
     * ativa
     * @var string(s/n)
     */
    public $ativo;

    /**
     * Data de publicação da vaga
     * @var string
     */
    public $data;

    /**
     * metodo responsavel por cadastrar a vaga
     * @return boolean
     */

    public function Cadastrar(){
        
        //Define a data
        $this->data = date("Y-m-d H:i:s");

        //Insere a vaga no banco
        $obDatabase = new Database("vagas");

        //query builder
        $obDatabase->insert([
            
            "titulo" => $this->titulo,
            "descricao" => $this->descricao,
            "ativo" => $this->ativo,
            "data" => $this->data

        ]);


    } 
}

?>

