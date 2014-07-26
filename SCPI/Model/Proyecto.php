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
    
    public function GetDatosProyecto($cod_proyecto)
    {
        $sql="SELECT titulo,presentacion FROM proyecto WHERE cod_proyecto='$cod_proyecto'";
        try {
		$content=array();	
		$allrecord=mysql_query($sql, $this->getconexion());
		while($row=mysql_fetch_array($allrecord)){
                    array_push($content,$row);
		}
            return $content;
	}
	catch(Exception $exc){
            echo $exc->getTraceAsString();
	}
    }
}

