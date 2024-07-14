<?php
class DB
{
    private $USERNAME = "root";
    private $SERVER = "localhost";
    private $DBNAME = "mglsi_news";
     private $PASSWORD = "";


     function connect()
     {
         $pdo = new PDO("mysql:host=".$this->SERVER.";dbname=".$this->DBNAME, $this->USERNAME, $this
         ->PASSWORD);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         return $pdo;
     }

     /*
      * get all article
      */
    function getAll($sql)
    {
        $pdo = $this->connect();
        $data = $pdo->query($sql)->fetchAll();
        return $data;
    }

    /*
     * get article by categories
     */
    function getArticleByCategories($sql, $arrayValue)
    {
        $pdo = $this->connect();
        $stmt = $pdo->prepare($sql);
        $stmt->execute($arrayValue);
        $data = $stmt->fetchAll();
        return $data;
    }
    /*
     * get single element
     */
    function getSingleElement($sql,$id)
    {
        $pdo = $this->connect();
        $stm = $pdo->prepare($sql);
        $stm->execute($id);
        return  $stm->fetch();
    }
}