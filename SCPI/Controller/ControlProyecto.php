<?php
include '../Model/Proyecto.php';
class ControlProyecto
{
    private $codigo;
    private $titulo;
    private $fecha;
    private $descripcion;
    private $tema;
    private $model;


    public function __construct() {
        
        $this->model=new ModelProyecto();
    }
    
    public function setDatos()
    {
        $this->codigo=$_REQUEST['codigo'];
        $this->titulo=$_REQUEST['titulo'];
        $this->fecha=$_REQUEST['fecha'];
        $this->descripcion=$_REQUEST['descripcion'];
        $this->tema=$_REQUEST['tema'];
    }

    public function RegistrarProyecto()
    {
        
        $this->model->RegistrarProyecto($this->codigo, $this->titulo, $this->fecha, $this->descripcion, $this->tema);
        $data=array('msg','Proyecto Registrado Exitosamente');
        echo json_encode($data);
    }
    
    public function GetDatosProyecto()
    {
        $codigo=$_REQUEST['codigo'];
        $data=$this->model->GetDatosProyecto($codigo);
        echo json_encode($data);
    }
}

$exec=new ControlProyecto();
switch ($_REQUEST['action'])
{
    case 'registrar':
        $exec->setDatos();
        $exec->RegistrarProyecto();
        break;
    case 'buscar':
        $exec->GetDatosProyecto();
        break;
}


/*$user=$_REQUEST['user'];
$data=array('id',$user);
echo json_encode($data);*/
