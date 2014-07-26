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
        <script type="text/javascript" src="//localhost/SCPI/SCPI/Media/js/jquery.js"></script>
        <script type="text/javascript" src="//localhost/SCPI/SCPI/Media/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//localhost/SCPI/SCPI/Media/js/scpi.js"></script>
        
        <link rel="stylesheet" type="text/css" href="//localhost/SCPI/SCPI/Media/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="//localhost/SCPI/SCPI/Media/css/bootstrap-theme.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="//localhost/SCPI/SCPI/Media/css/wolfram.css" media="screen">
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
                    <li><a href="/cepreuna/"><span class="glyphicon glyphicon-home"></span>   Inicio</a></li>
                    <!--<php if($this->Session->read('Auth.User.id')){?>-->
                    <li><a href="" id="mn-registrar">
                            <span class="glyphicon glyphicon-barcode"></span>   Registrar Proyecto</a></li>                    
                    
                            <li><a href="#" id="mn-asignar">
                            <span class="glyphicon glyphicon-cog"></span>   Asignar Jurado</a></li>
                            <li><a href="#" id="mn-calificar">
                            <span class="glyphicon glyphicon-search"></span>   Calificacion</a>
                    </li>
                    <li><a href="#" id="mn-reporte">
                            <span class="glyphicon glyphicon-share"></span>   Reportes</a></li>
                            <li><a href="#" id="mn-busqueda">
                            <span class="glyphicon glyphicon-share"></span>   Busqueda</a></li>
                            <li><a href="#" id="mn-salir">
                            <span class="glyphicon glyphicon-globe"></span>   Salir</a></li>
                    <!--<php } else if(1){ ?>-->                            
                            <li><a href="#" id="mn-ingresar">
                            <span class="glyphicon glyphicon-globe"></span>   Ingresar</a></li>
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
            
            <!--<php echo $this->Session->flash(); ?>
            <php echo $this->fetch('content'); ?>-->
            <!--<php
            
            if(isset($link))
            {
                include($link);
            }
            else{echo 'no hay link';}
                
            ?>-->
            
            <form class="form-horizontal" action="" method="post" accept-charset="utf-8">
    
                <legend>Autenticación de Usuario</legend>                
                <div class="form-group">
                    <label class="col-md-4 control-label">Usuario</label>
                    <div class="col-md-8"><input class="form-control" name="user" maxlength="11" type="text" id="username"/></div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label">Contraseña</label>
                    <div class="col-md-8"><input class="form-control" name="pass" type="password" id="pass"/></div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-4 col-sm-10"><input class="btn btn-primary" id="ingresar" type="button" value="Ingresar"/></div>
                </div>
            </form>
            
            
            
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
