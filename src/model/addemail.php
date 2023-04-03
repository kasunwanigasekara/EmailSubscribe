<?php

namespace EmailVerication\model;
use EmailVerication\config\dbconnect;
use PDO;


class addemail{

    private $pdo;

    public function __construct()
    {
        $newCon= new dbconnect();
        $this->pdo=$newCon->connect();
    }

    public function add(string $email)
    {
        try{
            $this->pdo->beginTransaction();

                $stm = $this->pdo->prepare("insert into emailverification.tbl_users(email) VALUES(:email)");
                $stm->bindValue(':email', $email, PDO::PARAM_STR);
                $stm->execute();
                $this->pdo->commit();
                
            }
            catch(\PDOException $e)
            {
                $this->pdo->rollback();
                print "Error: " . $e->getMessage();

            }

    }

}

?>