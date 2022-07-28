<?php

	const HOST     = 'localhost';
	
	const USER     = 'root';
	
	const PASSWORD = '';
	
	const DATABASE = 'hello-db';

	TRY {

		$connect = new mysqli( HOST, USER, PASSWORD, DATABASE );

	} CATCH( Exception $e ) {

		echo 'Connection Failed!';

		exit();

	} FINALLY {

		return true;

	}

?>