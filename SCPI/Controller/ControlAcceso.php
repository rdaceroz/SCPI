<?php
include '../Auth/Auth.php';
//include '../View/view.php';
/*include '../View/Acceso/login.php';
include '../View/Acceso/logout.php';
include '../View/Acceso/router.php';*/
class ControlAcceso
{
        
    //private $view;
    private $Auth;


    public function __construct()
    {
        $this->Auth=new Auth();
      
    }
    
    public function login()
    {   
            
        $this->Auth->username=$_POST['user'];
        $this->Auth->password=$_POST['pass'];
        if($this->Auth->login())
        {
            
            $link='Location: //localhost/SCPI/SCPI/View/welcome.php';            
            header($link);
        }
        else
        {
            $link='Location: //localhost/SCPI/SCPI/index.php?error=1';
            header($link);       
        }
    }
    public function logout()
    {
        $this->Auth->logout();
        $link='Location: //localhost/SCPI/SCPI/index.php';
        header($link);
    }   
    public function index()
    {
        
    }
}
$Acceso=new ControlAcceso();
if(isset($_POST['action']))
{
    switch ($_POST['action'])
    {
        case 'login': $Acceso->login();
            break;
        case 'logout':$Acceso->logout();
            break;
    }
}
else if(isset($_GET['action']))
{
    switch ($_GET['action'])
    {
        case 'login': $Acceso->login();
            break;
        case 'logout':$Acceso->logout();
            break;
    }
}



