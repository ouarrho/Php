<?php

	DEFINE( 'included_files', get_included_files() );

	DEFINE( 'targeted_path', included_files[ 0 ] );

	DEFINE( 'explode_path', explode( '\\', targeted_path ) );

	DEFINE( 'targeted_file', rtrim( explode_path[ count( explode_path ) - 1 ], '.php' ) );

	DEFINE( 'targeted_folder', explode_path[ count( explode_path ) - 2 ] );

	echo targeted_file;
	
	echo '<br>';

	echo targeted_folder;

	# import libraries
	
	# connect to database

	# require( '../' . __LOCATION__ . '/file.php' );
	
	# create variables from the inputs
	
	# check the variables created

?>