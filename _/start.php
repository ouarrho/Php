<?php

	DEFINE( 'included_files', get_included_files() );

	DEFINE( 'targeted_path' , included_files[ 0 ] );

	DEFINE( 'explode_path', explode( '\\', targeted_path ) );

	DEFINE( 'targeted_file', explode_path[ count( explode_path ) - 1 ] );

	DEFINE( 'targeted_folder', explode_path[ count( explode_path ) - 2 ] );

	//echo ;

	//if ($topMost == __FILE__) echo 'no parents';

	//else echo "parent is $topMost";

	//echo '<h1>started...</h1>';

	# import libraries
	
	# connect to database

	# require( '../' . __LOCATION__ . '/file.php' );
	
	# create variables from the inputs
	
	# check the variables created

?>