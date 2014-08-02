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
    public function getJurados()
    {
        $codigo=$_REQUEST['codigo'];
        $data=  $this->model->getJurados($codigo);
    }
}

$exec=new ControlJurado();
switch ($_REQUEST['action'])
{
    case 'getdatosdocente':$exec->getDatosDocente();
        break;
    case 'getjurados':$exec->getJurados();
        break;
}
$exec->getDatosDocente();
