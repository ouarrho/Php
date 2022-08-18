<?php

	$query_columns = "

					userFirstName,

					userLastName

				";

	$query_values = "

					:userFirstName,

					:userLastName

				";

	$query_parameters = [ 

					':userFirstName' => $firstName,

					':userLastName'  => $lastName

				];

?>