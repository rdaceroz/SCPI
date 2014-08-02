<?php
//include '../Controller/ControlAcceso.php';
include '../Auth/Auth.php';
$Session=new Auth();
$user=isset($_SESSION['user']) ? $_SESSION['user'] : null ;
if($user == ''){
	header('Location: ../index.php?error=2');
}
else {

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>SCIP</title>
        <script type="text/javascript" src="../Media/js/jquery.js"></script>
        <script type="text/javascript" src="../Media/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../Media/js/scpi.js"></script>
        
        <link rel="stylesheet" type="text/css" href="../Media/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../Media/css/bootstrap-theme.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="../Media/css/wolfram.css" media="screen">
    </head>
    <body>
        <header>
                <div class="logo">
			<img src="/cepreuna/img/logo.jpg" alt="control" />
		</div>
		<div class="titular">
			<h1 class="titulo">
                            Sistema de Control de Proyectos de Investigacion
			</h1>
			<div>
				<a class="filtro" href="//www.google.com.pe">
					google
				</a>
				<a class="publicar" href="#">
					Sing In
				</a>
			</div>
		</div>
		<div class="usuario">
                   <!--<php if($this->Session->read('Auth.User.id')){ ?> 
			<figure class="avatar">
				<img src="/cepreuna/img/avatar.jpg" alt="freddier" />
			</figure>
			<a class="flechita" href="#">
				X
			</a>
                   <php }?>-->
		</div>
            </header>	
            
            <nav class="navbar navbar-default" role="navigation">
                <ul class="nav navbar-nav">                    
                    <li><a href="/SCPI/SCPI"><span class="glyphicon glyphicon-home"></span>   Inicio</a></li>
                    <!--<php if($this->Session->read('Auth.User.id')){?>-->
                    <li><a href="" id="mn-registrar">
                            <span class="glyphicon glyphicon-hdd"></span>   Registrar Proyecto</a></li>                    
                    
                            <li><a href="#" id="mn-asignar">
                            <span class="glyphicon glyphicon-paperclip"></span>   Asignar Jurado</a></li>
                            <li><a href="#" id="mn-calificar">
                            <span class="glyphicon glyphicon-check"></span>   Calificacion</a>
                    </li>
                    <li><a href="#" id="mn-reporte">
                            <span class="glyphicon glyphicon-book"></span>   Reportes</a></li>
                            <li><a href="#" id="mn-busqueda">
                            <span class="glyphicon glyphicon-search"></span>   Busqueda</a></li>
                            <li><a href="../Controller/ControlAcceso.php?action=logout">
                            <span class="glyphicon glyphicon-share"></span>   Salir</a></li>
                    <!--<php } else if(1){ ?>-->                            
                            
                    <!--<php } ?>-->
                </ul>                
            </nav>
    
    <section id="content" class="row" style="margin: 0;">
        <div id="messages">
            <!--<div class="alert alert-info">Hola soy un mensaje</div>
            <div class="alert alert-success">Hola soy un mensaje</div>
            <div class="alert alert-danger">Hola soy un mensaje</div>
            <div class="alert alert-warning">Hola soy un mensaje</div>-->
        </div>

        <section id="content-left" class="col-lg-3 visible-lg">
            <div id="static-messages" style="margin-top: 50px;"></div>
        </section>       
        
        <section id="content-mid" class="col-lg-6">          
                     
            
            
        </section>
        <section id="content-right" class="col-lg-3 visible-lg">
            
        </section>	
    </section>
    
            <!--<footer>
                <h3>
                    <strong>Powered by Wolfram</strong>
                    <span class="mejor">
			cepreuna.2014
                    </span>
		</h3>
            </footer>-->
    </body>
</html>
<?php } ?>