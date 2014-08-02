<?php
include '../System/database.php';
class ModelJurado extends Conexion
{
    public function getDatosDocente($cod_docente)
    {
        
        
        $sql="SELECT nombres,paterno,materno FROM docente WHERE cod_docente='$cod_docente'";
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
    
    public function getJurados($codigo)
    {
        $sql="SELECT d.nombres,d.paterno,d.materno,j.cargo FROM jurado AS j
        INNER JOIN docente AS d ON d.cod_docente=j.cod_docente
        WHERE j.cod_proyecto='$codigo'";
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
    
    public function SetNotas($cod_proyecto,$notapres,$notavoc,$notasec)
    {
        $sql1="UPDATE  jurado SET  nota =  '$notapres' WHERE  cod_proyecto =  '$cod_proyecto' AND  cargo =  'Presidente'";
        $sql2="UPDATE  jurado SET  nota =  '$notavoc' WHERE  cod_proyecto =  '$cod_proyecto' AND  cargo =  'Vocal'";
        $sql3="UPDATE  jurado SET  nota =  '$notasec' WHERE  cod_proyecto =  '$cod_proyecto' AND  cargo =  'Secretario'";
        try 
	{
			
            mysql_query($sql1, $this->getConexion());
            mysql_query($sql2, $this->getConexion());
            mysql_query($sql3, $this->getConexion());
	}
            catch(Exception $exc)
	{
            echo $exc->getTraceAsString();
	}
    }
}

