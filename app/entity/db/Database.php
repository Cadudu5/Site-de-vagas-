<?php

namespace App\db;

use PDO;
use PDOException;

class Database{

    /**
     *  Host de conexão com o banco de dados
     *  @var string
     */
    const HOST = "localhost";

    const NAME = "projeto 1";

    /**
     * usuario do banco de dados
     * @var string
     */

     const USER = "root";

     /**
     * senha do banco de dados
     * @var string
     */

     const PASS = "";

    /**
     * Nome da tabela a ser manipulada
     * aqui definiremos qual tabela manipularemos
     * @var string
     */
     private $table;

    /**
     * Instancia de conexão com o banco de dados
     * PDO é um grupo de classes que nos ajuda
     * a conectar com o bd mySQL, e se precisar
     * trocar o banco de dados, basta instalar
     * um novo drive
     * @var PDO
     */
     private $connection;


     /**
      * Define a tabela e instancia 
      * @param string
      */
     public function __construct($table = null){ // o = null indica que o parametro pode NÃO ser passado ou ser nullo
        $this->table = $table;
        $this->setConnection();

     }
      /**
       * metodo responsavel por criar uma 
       * conexão com o banco de dados
       */
     private function setConnection(){

        try {
            $this->connection = new PDO("mySQL: host=".self::HOST.";dbname=".self::NAME,self::PASS,self::USER);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch (PDOException $e) {
            /**
             * Apenas para fins de teste, em uma 
             * aplicação real o erro seria de uso interno.
             */
            die("ERROR: ".$e->getMessage());
        }
        
     }
     
        
}

     


