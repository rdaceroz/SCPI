
/*select e.nombre,e.apellido_paterno,pp.titulo,d.nombre,d.apellido_paterno,j.cargo 
    from estudiante as e 
    inner join proyectista as p on e.cod_estudiante=p.cod_estudiante 
    inner join proyecto as pp on p.cod_proyecto = pp.cod_proyecto 
    inner join jurado as j on pp.cod_proyecto=j.cod_proyecto 
    inner join docente as d on j.cod_docente=d.cod_docente
    where pp.cod_proyecto='JYZWORGMUR'
*/

SELECT * FROM PROYECTO AS P 
    INNER JOIN PROYECTISTA AS PY ON P.COD_PROYECTO=PY.COD_PROYECTO
    INNER JOIN ESTUDIANTE AS E ON PY.COD_ESTUDIANTE=E.COD_ESTUDIANTE
    INNER JOIN JURADO AS J ON P.COD_PROYECTO=J.COD_PROYECTO

