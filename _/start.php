<?php


    $arr_inputs_filters = [ 

                                'boolean' => FILTER_VALIDATE_BOOLEAN, 
                            
                                'bool'    => FILTER_VALIDATE_BOOLEAN, 
                            
                                'domain'  => FILTER_VALIDATE_DOMAIN, 
                            
                                'email'   => FILTER_VALIDATE_EMAIL, 
                            
                                'float'   => FILTER_VALIDATE_FLOAT, 
                            
                                'integer' => FILTER_VALIDATE_INT, 
                            
                                'int'     => FILTER_VALIDATE_INT, 
                            
                                'ip'      => FILTER_VALIDATE_IP, 
                            
                                'mac'     => FILTER_VALIDATE_MAC, 
                            
                                'regex'   => FILTER_VALIDATE_REGEXP, 
                            
                                'url'     => FILTER_VALIDATE_URL

							];

/**
	*
	* ARCHITECTURE & DIRECTORY
	*
*/
	require 'architecture/dir.php';

		$DIR = NEW DIR();

		$path = '../' . $DIR -> FOLDER() . '/' . $DIR -> FILE();

		require $path . '-libraries.php';

		require $path . '-inputs.php';


/**
	*
	* REQUIRES & LIBRARIES
	*
*/
	if( array_intersect( [ 'db/db-insert', 'db/db-select', 'db/db-update', 'db/db-delete' ], arr_libraries ) )

		require 'db/db-connect.php';

	if( count( arr_inputs ) > 0 )

		require 'user/user-inputs.php';

	foreach( arr_libraries AS $library )

		require $library . '.php';


/**
	*
	* USER INPUTS
	*
*/
	$USER_INPUTS = NEW USER_INPUTS();

	$USER_INPUTS

		-> ISSET   ( arr_inputs ) 

		-> TYPE    ( arr_inputs );
		
		//-> NEW_VAR ( arr_inputs );

?>