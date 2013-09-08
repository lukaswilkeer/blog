<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include "Model.php";

class Teste1 extends Model
{
    var $conex;

    function __construct()
    {
        $conex = Model::getInstance();
    }
    function insereDado()
    {
        $num = rand();
        $sql = "INSERT INTO tb_teste_singleton (randon_num) VALUES ('$num')";
        $q = mysql_query($sql);
        echo $num.'</br>';
    }
}

class Teste2 extends Model
{
    var $conex2;
    function __construct()
    {
        $conex2 = Model::getInstance();
    }
    function insereDado()
    {
        $num2 = rand();
        $sql2 = "INSERT INTO tb_teste_singleton (randon_num) VALUES ('$num2')";
        $q2 = mysql_query($sql2);
        echo $num2.'</br>';
    }
}

$teste1 = new Teste1();
$teste1->insereDado();

$teste2 = new Teste2();
$teste2->insereDado();

?>
