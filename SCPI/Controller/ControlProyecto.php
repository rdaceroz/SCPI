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
        $this->codigo=$_REQUEST['codigo'];
        $this->titulo=$_REQUEST['titulo'];
        $this->fecha=$_REQUEST['fecha'];
        $this->descripcion=$_REQUEST['descripcion'];
        $this->tema=$_REQUEST['tema'];
        $this->model=new ModelProyecto();
    }
    
    public function RegistrarProyecto()
    {
        $this->model->RegistrarProyecto($this->codigo, $this->titulo, $this->fecha, $this->descripcion, $this->tema);
        $data=array('msg','Proyecto Registrado Exitosamente');
        echo json_encode($data);
    }
}

$exec=new ControlProyecto();
$exec->RegistrarProyecto();
/*$user=$_REQUEST['user'];
$data=array('id',$user);
echo json_encode($data);*/
