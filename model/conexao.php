<?php
class Conexao{
    Private $con;
    function__construct()
    {

    }
    function connect(){
        include_once dirname (__FILE__).'./Constants.php';

        $this->con = new mysql(DB_HOST,DB_USER,DB_PASS,DB_NAME);

        if(mysqlui_connect_errno()){
            echo("Conexão falhou.......".mysqli_connect_error());
        }
           return $this->con;
        }
    }
}