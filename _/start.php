<?php

	require 'architecture/dir.php';

		$DIR = NEW DIR();

		$path = '../' . $DIR -> FOLDER() . '/' . $DIR -> FILE();

		require $path . '-libraries.php';

		require $path . '-inputs.php';


	foreach( arr_libraries AS $library )

		require( $library . '.php' );


	# import libraries
	
	# connect to database

	# require( '../' . __LOCATION__ . '/file.php' );
	
	# create variables from the inputs
	
	# check the variables created

?>