<div class="data-layer">
<form class="form-horizontal" action="" method="post" accept-charset="utf-8">
    
    <h4>Calificar un Proyecto</h4>
    
    <div class="form-group">
        <label class="col-md-4 control-label">Codigo de Proyecto</label>
        <div class="col-md-6"><input class="form-control" name="cproyecto" maxlength="10" type="text" id="cproyecto"/></div>
        <div class="col-md-2"><input class="btn btn-default" type="button" id="buscar" value="Buscar"/></div>
    </div>
    <div hidden="true" id="notas">
        <div class="form-group">
            <label class="col-md-4 control-label">Proyecto</label>
            <div class="col-md-8" id="nombreproyecto"></div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Estudiante</label>
            <div class="col-md-8" id="nombrestudiante"></div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Presidente</label>
            <div class="col-md-6"><div name="presidente" id="presidente"></div></div>
            <div class="col-md-2"><input class="form-control" name="npresidente" type="number" max="20" min="0" step="1" id="notapres"/></div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Vocal</label>
            <div class="col-md-6"><div name="vocal" id="vocal"></div></div>
            <div class="col-md-2"><input class="form-control" name="nvocal" type="number" max="20" min="0" step="1" id="notavoc"/></div>
        </div>

        <div class="form-group">
            <label class="col-md-4 control-label">Secretario</label>
            <div class="col-md-6"><div name="secretario" id="secretario"></div></div>
            <div class="col-md-2"><input class="form-control" name="nsecretario" type="number" max="20" min="0" step="1" id="notasec"/></div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-4 col-sm-10"><input class="btn btn-primary" type="button" id="calificar" value="calificar"/></div>
        </div>
    </div>
    
</form>
</div>
