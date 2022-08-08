<?php

	/*                            *\
	    ARCHITECTURE & DIRECTORY    
	\*                            */

	require 'architecture/dir.php';

		$DIR = NEW DIR();

		$path = '../' . $DIR -> FOLDER() . '/' . $DIR -> FILE();

		require $path . '-libraries.php';

		require $path . '-inputs.php';


	/*                        *\
	    REQUIRES & LIBRARIES    
	\*                        */

	if( array_intersect( [ 'db/db-insert', 'db/db-select', 'db/db-update', 'db/db-delete' ], arr_libraries ) )

		require 'db/db-connect.php';

	if( count( arr_inputs ) > 0 )

		require 'user/user-inputs.php';

	foreach( arr_libraries AS $library )

		require $library . '.php';


	/*               *\
	    USER INPUTS    
	\*               */

	require 'user/user-inputs.php';


?>