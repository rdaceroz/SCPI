<?php
include '../System/database.php';
class ModelUsuario extends Conexion
{
    public function getUser($username,$password)
    {
        $sql="SELECT * FROM usuario WHERE username='$username' AND password='$password'";
        try 
	{            
            $query=mysql_query($sql, $this->getconexion());	
            $row = mysql_fetch_array($query);
            $len=  mysql_num_rows($query);
            if($len>0)
            {
                return $row;
            }
            else
            {
                return array();
            }
            
	}
	catch(Exception $exc)
	{
            echo $exc->getTraceAsString();
	}
    }
}

