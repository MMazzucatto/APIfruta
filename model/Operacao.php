<?php

class Operacao{

private $con;

function __construct()
{
    require_once dirname(__FILE__).'./Conexao.php';

    $bd = new Conexao();

    this->con = $bd -> connect();
}
    function createFruta($campo_2,$campo_3,$campo_4){
        $stmt->bind_paran("sss",$campo_2,$campo_3,$campo_4);
        if($stmt -> execute())
        return true;
        return var_dump($stmt)
    }

    function getFrutas(){
        $stmt = $this -> con -> prepare("Select * from frutas_tb");
        $stmt->execute();
        $stmt->blind_result($uid,$nomefruta,$imgfruta,$valorfruta);

        $dicas = array();
            while($stmt->fetch()){
                $dica = array();
                $dica['uid']=$uid;
                $dica['nomefruta']=$nomefruta;
                $dica['imgfruta'] = $imgfruta;
                $dica['valorfruta']=$valorfruta;
                array_push($dicas.$dica);
            }
            return $dicas;
    }

    function updateFrutas($campo_1,$campo_2,$campo_3,$campo_4){
        $stmt = $this->con->prepare("update frutas_td set nomefrurta=?, imgfruta=?, imgfruta=?, valorfruta=? where uidfruta=?");
        $stmt->blind_param("sssi", $campo_2,$campo_3,$campo_4,$campo_1,)
        if($stmt->execute())
        return true;
        return false;

    }   

    function deleteFrutas($campo_1){
        $stmt = $this->con->prepare('delete from frutas_tb where uidfruta=?');
        $stmt->blind_param("i",$campo_1);
        if($stmt ->execute())
        return true;
        return false;
    }
}