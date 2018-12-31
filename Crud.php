<?php
/**
 * Created by PhpStorm.
 * User: Carl Cr
 * Date: 08/08/2018
 * Time: 10:46
 */
require_once "conexao.php";
class Crud extends conexao
{
    private $crud;
    private $contador;

    private function preparedStratements($query,$parametro)
    {
        $this->countParametros($parametro);
        $this->crud=$this->conexaoDB()->prepare($query);
        if ($this->contador>0)
        {
            for ($i=1;$i<=$this->contador;$i++)
            {
                $this->crud->bindValue($i,$parametro[$i-1]);
            }
        }
        $this->crud->execute();
    }

    private function countParametros($parametros)
    {
        $this->contador=count($parametros);
    }

    public function insertDB($tabela,$condicao,$parametros)
    {
        $this->preparedStratements("insert into {$tabela} values ({$condicao})",$parametros);
        return $this->crud;
    }

    public function selectDB($campos,$tabela,$condicao,$parametros)
    {
        $this->preparedStratements("select {$campos} from {$tabela} {$condicao} ",$parametros);
        return $this->crud;
    }

    public function deleteDB($tabela,$condicao,$parametros)
    {
        $this->preparedStratements("delete from {$tabela} where {$condicao} ",$parametros);
        return $this->crud;
    }

    public function updateDB($tabela,$set,$condicao,$parametros)
    {
        $this->preparedStratements("update {$tabela} set {$set} where {$condicao}",$parametros);
        return $this->crud;
    }
}
