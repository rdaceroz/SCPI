<?php
include 'Model/Usuario.php';
include 'View/Acceso/login.php';
include 'View/Acceso/logout.php';
include 'View/Acceso/router.php';
class ControlAcceso
{
    private $user;
    private $pass;
    private $router;
    private $user_data;
    private $content;


    public function __construct()
    {
        $this->router=new AccesoRouter();
        $this->user_data=new ModelUsuario();
    }
    
    public function setContent($url)
    {
        $this->content=file_get_contents($url.'.php');        
    }

    public function printContent()
    {        
        echo $this->content;
    }

    public function login()
    {        
        session_start();
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        
        if($pass!='' || $user!='')
        {
            
            $link='login';
            $this->router->redirect($link);
        }
        else if($user='123' || $pass=='admin')
        {
            $_SESSION['session_id']=$user;
            $link='home';
            $this->router->redirect($link);            
        }
    }
    public function logout()
    {
        session_start();
        session_destroy();
        $link='home';
        $this->router->redirect($link);
    }
    
    public function index()
    {
        
    }
}
