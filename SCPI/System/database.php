<?php
class Conexion{
	protected $enlace;
	private $v_Host, $v_User, $v_Clave, $v_DBase;
	private $sql, $idQuery;
	
	function __construct(){	
			$this->v_Host  = "localhost";	
			$this->v_DBase = "atlas";
			$this->v_User  = "Wolfram";
			$this->v_Clave = "ju87stuka";
		$this->enlace = mysql_pconnect($this->v_Host, $this->v_User, $this->v_Clave) or die("Error: host,user,passw .........");		
		if (!$this->enlace){
			die ("No conectado -- ".mysql_error());
		}
		$db = mysql_select_db($this->v_DBase, $this->enlace);
		if (!$db){
			die ("No conectado ** ".mysql_error());
		}
	}
	public function getConexion(){
		return $this->enlace;
	}
	
	
}
?>
