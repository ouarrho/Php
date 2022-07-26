<?php

	const HOST     = 'localhost';
	
	const USER     = 'root';
	
	const PASSWORD = '';
	
	const DATABASE = 'information_schema';

	const DSN      = 'mysql:host='.HOST.';dbname='.DATABASE;

	TRY {

		$connect = new PDO( DSN, USER, PASSWORD );

	} CATCH( Exception $e ) {

		echo $e;

		exit();

	} FINALLY {

		return true;

	}

?>