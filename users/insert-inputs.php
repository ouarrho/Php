<?php

	const arr_inputs = [

		'SERVER'  => null,
	
		'ENV'     => null,
	
		'COOKIE'  => null,
	
		'SESSION' => null,
	
		'FILES'   => null,
	
		'REQUEST' => null,
	
		'GET'     => null,

		'POST'    => [

			'_FINGERPRINT AS fingerPrint type:email max:500 min:100 length:16', 

			'_APPID', 

			'_ID', 

			'_KEY', 

			'_TYPE'

		]

	];

?>