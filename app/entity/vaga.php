<?php

namespace App\entity;

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
}

