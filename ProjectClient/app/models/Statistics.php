<?php
    namespace App\models;

    class Statistics extends \App\core\Model {

        public function __construct() { 
            parent::__construct();
        }

        public function insert() {
            $stmt = self::$connection->prepare("INSERT INTO addresses(date, address) VALUES (:date, :address)");
            $stmt->execute(['date'=>$this->date, 'address'=>$this->address]);
        }
       
    }
?>