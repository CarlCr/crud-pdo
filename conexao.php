
<?php

abstract class conexao
{
    protected function conexaoDB() 
    {
        $dbname="dbname=crud";
        $dns="mysql:host=localhost;".$dbname.";charset=utf8";
        $username="root";
        $password="";
        try 
        {
           $conexo=new PDO($dns,$username, $password);
           return $conexo;
        } catch (PDOException $ex) 
        {  
            return $ex;
        }
    }
}