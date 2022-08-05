<?php

	require 'included.php';

	$included = new included();

	$path = '../' . $included -> folder() . '/' . $included -> file();

	require $path . '-libraries.php';
	require $path . '-inputs.php';
	require $path . '-requirements.php';


	# import libraries
	
	# connect to database

	# require( '../' . __LOCATION__ . '/file.php' );
	
	# create variables from the inputs
	
	# check the variables created

?>