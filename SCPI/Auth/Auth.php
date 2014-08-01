<?php
include 'Session.php';
include '../Model/Usuario.php';
class Auth extends Session
{
    public $username;
    public $password;
    private $model;
    public function __construct() {
        parent::__construct();
        $this->model=new ModelUsuario();
        $this->Start();
    }

    public function login()
    {
        $user=$this->model->getUser($this->username, $this->password);
        if(count($user))
        {
            $this->setVar('user', $user['username']);
            $this->setVar('iduser', $user['id']);
            $this->setVar('role', $user['role']);
            return true;
        }
        return false;
    }
    
    public function logout()
    {
        $this->Destroy();
    }
}

