$(document).ready(function()
{
    $('#ingresar').click(function()
    {
        login();
    });
    
    $('#mn-registrar').click(function(){
        $('#content-mid').load('View/Proyecto/registrar.php');
    });
    $('#mn-asignar').click(function(){
        $('#content-mid').load('View/Jurado/asignar.php');
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
});