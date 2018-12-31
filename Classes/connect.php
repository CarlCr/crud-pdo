<?php
require_once 'config.php';
abstract class connect extends config
{
    protected function conexaoDB()
    {
        try
        {
            $conexo=new PDO($db_dns,$db_username, $db_password);
            return $conexo;
        } catch (PDOException $ex)
        {
            return $ex;
        }
    }
}