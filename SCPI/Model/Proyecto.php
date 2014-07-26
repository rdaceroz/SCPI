<?php
include '../System/database.php';
class ModelProyecto extends Conexion
{
    public function RegistrarProyecto($codigo,$titulo,$fecha,$descripcion,$tema)
    {
        $sql="INSERT INTO proyecto(cod_proyecto,titulo,presentacion,descripcion,tema)"
                . "VALUES('$codigo','$titulo','$fecha','$descripcion','$tema')";
        try 
	{
			
	mysql_query($sql, $this->getConexion());			
	}
            catch(Exception $exc)
	{
            echo $exc->getTraceAsString();
	}
    }
}

