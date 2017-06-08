<?php
	require_once('./clases/QueryDB.php');
	
	if(ISSET($_POST['chat'])){
		$query = 'SELECT 
					`TABLA1`.`MENSAJE`, `TABLA1`.`TIPO`, `TABLA1`.`TIMESTAMP` AS HORA
				FROM 
					`MENSAJES` AS `TABLA1`
				INNER JOIN(
					SELECT MAX(`TIMESTAMP`) `ULTIMO`, `TIPO`
					FROM `MENSAJES`
					GROUP BY `TIPO`
				) AS `TABLA2`
				ON `TABLA1`.`TIPO` = `TABLA2`.`TIPO`
				AND `TABLA1`.`TIMESTAMP` = `TABLA2`.`ULTIMO`
				ORDER BY `TABLA1`.`TIMESTAMP` DESC';
		$consulta = New QueryDB($query, 0, 0);
		echo json_encode($consulta->ejecutar());
	}else if(ISSET($_POST['id'])){
		$consulta = New QueryDB("SELECT `MENSAJE`, `TIMESTAMP` AS HORA FROM `MENSAJES` WHERE `TIPO` = ?", 'i', array($_POST['id']));
		echo json_encode($consulta->ejecutar());
	}