<?php
class Conexion{
	protected $enlace;
	private $Host, $User, $Clave, $DBase;
	private $sql, $idQuery;
	
	public function __construct()
        {	
            $this->Host  = "localhost";	
            $this->DBase = "scpi";
            $this->User  = "root";
            $this->Clave = "";

            $this->enlace = mysql_pconnect($this->Host, $this->User, $this->Clave) or die("Error: host,user,passw .........");
            if (!$this->enlace)
            {
                die ("No conectado -- ".mysql_error());
            }
            $db = mysql_select_db($this->DBase, $this->enlace);
            if (!$db)
            {
                    die ("No conectado ** ".mysql_error());
            }
	}
        
	public function getConexion()
        {
		return $this->enlace;
	}
        
        public function consulta($consulta)
        {
            $resultado = mysql_query($consulta, $this->enlace);
            
            if(!$resultado)
            {
                echo 'MySQL Error: '.mysql_error();
                exit;
            }
            return $resultado;
        }
        
        public function fecth_array($consulta)
        {
            return mysql_fetch_array($consulta);
        }
        
        public function num_rows($consulta)
        {
            return mysql_num_rows($consulta);
        }
        
}
?>
