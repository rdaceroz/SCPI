<?php
// Evitar los warnings the variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;

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
        <script type="text/javascript" src="Media/js/jquery.js"></script>
        <script type="text/javascript" src="Media/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="Media/js/scpi.js"></script>
        
        <link rel="stylesheet" type="text/css" href="Media/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="Media/css/bootstrap-theme.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="Media/css/wolfram.css" media="screen">
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
                    <li><a href="/SCPI/SCPI/"><span class="glyphicon glyphicon-home"></span>   Inicio</a></li>
                    <!--<php if($this->Session->read('Auth.User.id')){?>-->
                    
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
            
            <div class="input-layer">
                <form class="form-horizontal" action="Controller/ControlAcceso.php" method="post" accept-charset="utf-8">

                    <h4>Autenticación de Usuario</h4>
                    <input type="text" name="action" value="login" hidden="true"/>
                    <div class="form-group">
                        <label class="col-md-4 control-label">Usuario</label>
                        <div class="col-md-8"><input class="form-control" name="user" maxlength="11" type="text" id="username"/></div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Contraseña</label>
                        <div class="col-md-8"><input class="form-control" name="pass" type="password" id="pass"/></div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-offset-4 col-sm-10"><input class="btn btn-primary" id="ingresar" type="submit" value="Ingresar"/></div>
                    </div>
                </form>
                <?php if($err==1)
                {
                    echo '<div class="alert alert-danger">Usuario o Contraseña Erróneos</div>';
		}
		if($err==2){
                    echo '<div class="alert alert-warning">Debe iniciar sesion para poder acceder al sitio.</div>';
		}
                ?>
            </div>
            
            
            
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
