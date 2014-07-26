<form class="form-horizontal" action="" method="post" accept-charset="utf-8">
    
    <legend>Registro de Proyecto</legend>
    
    <div class="form-group">
        <label class="col-md-4 control-label">Codigo</label>
        <div class="col-md-8"><input class="form-control" name="codigo" maxlength="10" type="text" id="codigo"/></div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Titulo</label>
        <div class="col-md-8"><input class="form-control" name="titulo" type="text" id="titulo"/></div>
    </div>
    
    <div class="form-group">
        <label class="col-md-4 control-label">Fecha</label>
        <div class="col-md-8"><input class="form-control" name="fecha" type="text" id="fecha"/></div>
    </div>
    
    <div class="form-group">
        <label class="col-md-4 control-label">Descripcion</label>
        <div class="col-md-8"><input class="form-control" name="descripcion" type="text" id="descripcion"/></div>
    </div>
    
    <div class="form-group">
        <label class="col-md-4 control-label">Tema</label>
        <div class="col-md-8"><input class="form-control" name="tema" type="text" id="tema"/></div>
    </div>

    <div class="form-group">
        <div class="col-md-offset-4 col-sm-10"><input class="btn btn-primary" type="button" id="registrar" onclick="return RegistrarProyecto();" value="Registrar"/></div>
    </div>
</form>



