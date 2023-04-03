<?php
namespace EmailVerication\config;
use PDO;

class dbconnect
{

    private $host       ='localhost';
    private $user       ='root';
    private $password   ='';
    private $db         ='emailverification';
    private $con        ;


    public function connect():PDO
    {
         $this->con = new PDO('mysql:host='.$this->host.';dbname='.$this->db,$this->user,$this->password);  
         return $this->con;     

    }
}



?>