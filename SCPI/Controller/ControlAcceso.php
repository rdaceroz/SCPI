<?php
include '../Model/Usuario.php';
include '../View/view.php';
/*include '../View/Acceso/login.php';
include '../View/Acceso/logout.php';
include '../View/Acceso/router.php';*/
class ControlAcceso
{
    private $user;
    private $pass;
    private $router;
    private $user_data;
    private $content;
    private $view;


    public function __construct()
    {
        //$this->router=new AccesoRouter();
        $this->user_data=new ModelUsuario();
        $this->view=new View();
    }
    
    public function login()
    {   
        //echo 'loggedin...';
        session_start();
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        
        if($pass=='' || $user=='')
        {
            //echo 'no ...exist user';
            $link='Location: //localhost/SCPI/SCPI/index.php';
            //$this->router->redirect($link);
            header($link);
        }
        else if($user=='admin' || $pass=='123')
        {
            //echo 'exist user';
            $_SESSION['session_id']=$user;
            $link='Location: //localhost/SCPI/SCPI/View/home.php';
            header($link);       
        }
    }
    public function logout()
    {
        session_start();
        session_destroy();
        $link='home';
        $this->router->redirect($link);
    }
    
    public function imp()
    {
        //echo $this->view->render('../index.php', array('link' => 'View/Acceso/login.php'));
    }
    public function index()
    {
        
    }
}

/*$control=new ControlAcceso();
if(isset($_GET['f']))
{
    $control->$_GET['f']();
    //echo 'Valor: '.$_GET['f'];
}else if($_POST['f'])
{
    $control->$_POST['f']();
}*/
$user=$_REQUEST['user'];
$data=array('id',$user);
echo json_encode($data);

