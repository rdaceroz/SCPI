$(document).ready(function()
{
    $('#ingresar').click(function()
    {
        login();
    });
    
    
   
    
    $('#mn-registrar').click(function(event){
        //$('#content-mid').empty();
        event.preventDefault(); 
        $('#content-mid').load('View/Proyecto/registrar.php',{},function()
        {
            $('#guardar').click(function()
            {
                var info={'codigo':$('#codigo').val(),'titulo':$('#titulo').val(),
                'fecha':$('#fecha').val(),'descripcion':$('#descripcion').val(),'tema':$('#tema').val()};
                RegistrarProyecto(info);
            });
        });
    });
    
    $('#mn-asignar').click(function(){
        $('#content-mid').load('View/Jurado/asignar.php',{},function()
        {
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
        });
    });
    
    $('#mn-calificar').click(function(){
        $('#content-mid').load('View/Calificacion/calificar.php');
    });
    $('#mn-reportes').click(function(){
        $('#content-mid').load('View/Reporte/reporte.php');
    });
    $('#mn-buscar').click(function(){
        $('#content-mid').load();
    });   
    
    //------------------
    
    function login()
    {
        var info={'user':$('#username').val(),'pass':34};
        $.getJSON("Controller/ControlAcceso.php",info,function(data)
        {
            console.log(data);
        });
    }
    
    function RegistrarProyecto(info)
    {console.log(info);
        
        
        $.getJSON("Controller/ControlProyecto.php",info,function(data)
        {
            alert('success proyecto');
            console.log(data);
        });
    }
    
    function GetDatosDocente(codigo,cargo)
    {
        $.getJSON("Controller/ControlJurado.php",{'codigo':codigo},function(data)
        {
            alert('success Busqueda');
            console.log(data);
            $('#nombre'+cargo).html(data[0]['nombres']+' '+data[0]['paterno']+' '+data[0]['materno']);
        });
    }
});