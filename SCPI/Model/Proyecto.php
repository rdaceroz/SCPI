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
    
    public function GetDatosEstudiante($cod_proyecto)
    {
        $sql="SELECT e.nombres,e.paterno,e.materno FROM estudiante AS e
        INNER JOIN proyectista AS py ON py.cod_estudiante=e.cod_estudiante
        WHERE py.cod_proyecto='$cod_proyecto'";
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
    
    public function AsignarJurados($cod_proyecto,$presidente,$vocal,$secretario)
    {
        $sql="INSERT INTO jurado (cod_docente, cod_proyecto, cargo, nota) "
                . "VALUES ('$presidente', '$cod_proyecto', 'Presidente', '0'), "
                . "('$vocal', '$cod_proyecto', 'Vocal', '0'), "
                . "('$secretario', '$cod_proyecto', 'Secretario', '0')";
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

