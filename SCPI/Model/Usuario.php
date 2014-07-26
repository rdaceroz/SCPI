<?php
include '../System/database.php';
class ModelUsuario extends Conexion
{
    public function getUser()
    {
        try 
	{
            $data=array();
            $query=mysql_query("SELECT r.nombre FROM paises AS p INNER JOIN regiones AS r ON p.id=r.pais_id 
            WHERE p.nombre='".$this->nombre."' ", $this->getconexion());
	
            while ($row = mysql_fetch_array($query)) 
            {
    		$data[]= $row;
            }
            return $data;
	}
	catch(Exception $exc)
	{
            echo $exc->getTraceAsString();
	}
    }
}

