<form class="form-horizontal" action="//localhost/SCPI/SCPI/Controller/ControlAcceso.php" method="post" accept-charset="utf-8">
    
    <legend>Autenticación de Usuario</legend>
    <div hidden="true"><input name="f" type="text" value="login"/></div>
    <div class="form-group">
        <label class="col-md-4 control-label">Usuario</label>
        <div class="col-md-8"><input class="form-control" name="user" maxlength="11" type="text" id="UserUsername"/></div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Contraseña</label>
        <div class="col-md-8"><input class="form-control" name="pass" type="password" id="UserPassword"/></div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-4 col-sm-10"><input class="btn btn-primary" type="submit" value="Ingresar"/></div>
    </div>
</form>

