SELECT cop,apellido_paterno,
		apellido_materno,nombre,
		datos_completos,colegio_regional,
		estado,post_grado,imagen,fecha 
FROM dbobstetras.registro where cop='' 
or apellido_paterno ='CHAVEZ' 
or apellido_materno ='TERRONES'
or datos_completos='CHAVEZ TERRORES%' 
or nombre='';


WHERE cop LIKE '11%'
  OR apellido_paterno LIKE 'FARFAN%' 
  OR apellido_materno LIKE 'FERREYRA%'
  OR nombre LIKE 'GRACIELA%';
  
SELECT * FROM dbobstetras.registro where cop=35616;

UPDATE dbobstetras.registro  set fecha='2020-09-01 00:00:00';
UPDATE dbobstetras.registro set estado='1' where estado='Habilitado';
UPDATE dbobstetras.registro set estado='0' where estado='No Habilitado';

UPDATE dbobstetras.registro set estado='No Habilitado' where estado='0';
UPDATE dbobstetras.registro set estado='Habilitado' where estado='1';

SET SQL_SAFE_UPDATES = 0;
SET SQL_SAFE_UPDATES = 1;

delete from dbobstetras.registro where cop=35616;

SELECT cop, COUNT(*) cop
FROM dbobstetras.registro
GROUP BY cop
HAVING COUNT(*) > 1


