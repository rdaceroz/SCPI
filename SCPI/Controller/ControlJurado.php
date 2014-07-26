<?php
include '../Model/Jurado.php';
class ControlJurado
{
    private $codigo;
    private $model;
    public function __construct() {
        $this->codigo=$_REQUEST['codigo'];
        $this->model=new ModelJurado();
    }

    public function getDatosDocente()
    {
        $data=$this->model->getDatosDocente($this->codigo);
        //$data=array('msg','docentes daots');
        echo json_encode($data);
    }
}

$exec=new ControlJurado();
$exec->getDatosDocente();
