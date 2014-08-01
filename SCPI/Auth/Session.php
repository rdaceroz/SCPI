<?php

class Session
{
    public function __construct() {
        
    }
    public function Start()
    {
        session_start();
    }
    public function setVar($varname,$value)
    {
        $_SESSION[$varname]=$value;
    }
    public function Destroy()
    {
        session_unset();
        session_destroy();
    }
}

