<?php
include '../System/database.php';
class ModelJurado extends Conexion
{
    public function getDatosDocente($cod_docente)
    {
        
        
        $sql="SELECT nombres,paterno,materno FROM docente WHERE cod_docente='123456'";
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

