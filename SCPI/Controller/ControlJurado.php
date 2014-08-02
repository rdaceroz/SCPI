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
        echo json_encode($data);
    }
    public function SetNotas()
    {
        $codigo=$_REQUEST['codigo'];
        $notapres=$_REQUEST['notapres'];
        $notavoc=$_REQUEST['notavoc'];
        $notasec=$_REQUEST['notasec'];
        
        $this->model->SetNotas($codigo,$notapres, $notavoc, $notasec);
        $data=array('msg','Notas Registradas Correctamente');
        echo json_encode($data);
    }
}

$exec=new ControlJurado();
switch ($_REQUEST['action'])
{
    case 'getdatosdocente':$exec->getDatosDocente();
        break;
    case 'getjurados':$exec->getJurados();
        break;
    case 'setnotas':$exec->SetNotas();
        break;
        
}

