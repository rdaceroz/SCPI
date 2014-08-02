$(document).ready(function()
{
    $('#ingresar').click(function()
    {
        login();
    });
    
    
   
    
    $('#mn-registrar').click(function(event){
        //$('#content-mid').empty();
        event.preventDefault(); 
        $('#content-mid').load('../View/Proyecto/registrar.php',{},function()
        {
            $('#guardar').click(function()
            {
                var info={'action':'registrar','codigo':$('#codigo').val(),'titulo':$('#titulo').val(),
                'fecha':$('#fecha').val(),'descripcion':$('#descripcion').val(),'tema':$('#tema').val()};
                RegistrarProyecto(info);
            });
        });
    });
    
    $('#mn-asignar').click(function(){
        $('#content-mid').load('../View/Jurado/asignar.php',{},function()
        {
            $('#cproyecto').blur(function()
            {
                GetDatosProyecto($('#cproyecto').val());
            });
            $('#presidente').blur(function()
            {
                //alert('presidente in');
                GetDatosDocente($('#presidente').val(),'presidente');
            });
            
            $('#vocal').blur(function()
            {
                //alert('presidente in');
                GetDatosDocente($('#vocal').val(),'vocal');
            });
            
            $('#secretario').blur(function()
            {
                //alert('presidente in');
                GetDatosDocente($('#secretario').val(),'secretario');
            });
            $('#asignar').click(function()
            {
                AsignarJurados($('#cproyecto').val(),$('#presidente').val(),$('#vocal').val(),$('#secretario').val());
            });
        });
    });
    
    $('#mn-calificar').click(function(){
        $('#content-mid').load('../View/Calificacion/calificar.php',{},function()
        {
            $('#buscar').click(function()
            {
                $('#notas').removeAttr('hidden');
                GetDatosProyecto($('#cproyecto').val());
                GetDatosEstudiante($('#cproyecto').val());
                GetJurados($('#cproyecto').val());
            });
            
            $('#calificar').click(function()
            {
                SetNotas($('#cproyecto').val(),$('#notapres').val(),$('#notavoc').val(),$('#notasec').val());
            });
        });
        
        
    });
    $('#mn-reportes').click(function(){
        $('#content-mid').load('../View/Reporte/reporte.php');
    });
    $('#mn-buscar').click(function(){
        $('#content-mid').load();
    });   
    
    //------------------
    
    function login()
    {
        var info={'user':$('#username').val(),'pass':34};
        $.getJSON("../Controller/ControlAcceso.php",info,function(data)
        {
            console.log(data);
        });
    }
    
    function RegistrarProyecto(info)
    {console.log(info);
        
        
        $.getJSON("../Controller/ControlProyecto.php",info,function(data)
        {
            alert('success proyecto');
            console.log(data);
        });
    }
    
    function GetDatosDocente(codigo,cargo)
    {
        $.getJSON("../Controller/ControlJurado.php",{'action':'getdatosdocente','codigo':codigo},function(data)
        {
            //alert('success Busqueda');
            console.log(data);
            $('#nombre'+cargo).html(data[0]['nombres']+' '+data[0]['paterno']+' '+data[0]['materno']);
        });
    }
    
    function GetDatosEstudiante(codigo)
    {
        $.getJSON("../Controller/ControlProyecto.php",{'action':'getestudiante','codigo':codigo},function(data)
        {
            //alert('success Busqueda');
            console.log(data);
            $('#nombrestudiante').html(data[0]['nombres']+' '+data[0]['paterno']+' '+data[0]['materno']);
        });
    }
    
    function GetDatosProyecto(codigo)
    {
        $.getJSON("../Controller/ControlProyecto.php",{'action':'buscar','codigo':codigo},function(data)
        {
            //alert('success Busqueda');
            console.log(data);
            $('#nombreproyecto').html(data[0]['titulo']+' - '+data[0]['presentacion']);
        });
    }
    
    function GetJurados(codigo)
    {
        alert('in get jurados');
        $.getJSON('../Controller/ControlJurado.php',{'action':'getjurados','codigo':codigo},function(data)
        {
            console.log(data);
            //$('#proyecto').html();
            //$('#estudiante').html();
            $('#presidente').html(data[0]['nombres']+' '+data[0]['paterno']+' '+data[0]['materno']);
            $('#vocal').html(data[1]['nombres']+' '+data[1]['paterno']+' '+data[1]['materno']);
            $('#secretario').html(data[2]['nombres']+' '+data[2]['paterno']+' '+data[2]['materno']);
        });
    }
    
    function AsignarJurados(cod_proyecto,presidente,vocal,secretario)
    {
        var info={'action':'asignar','codigo':cod_proyecto,'presidente':presidente,'vocal':vocal,'secretario':secretario};
        $.getJSON("../Controller/ControlProyecto.php",info,function(data)
        {
            alert('success Asignacion');
            console.log(data);            
        });
    }
    
    function SetNotas(codigo,notapres,notavoc,notasec)
    {
        $.getJSON("../Controller/ControlJurado.php",{'action':'setnotas','codigo':codigo,'notapres':notapres,'notavoc':notavoc,'notasec':notasec},function(data)
        {
            console.log(data);
        });
    }
});