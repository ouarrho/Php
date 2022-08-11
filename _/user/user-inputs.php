<?php

/**
    *
    * This class handle all the user inputs 
    *
    * First thing we check if the variables exists    
    *
    * Secondly, we check all the inputs taking into account
    * all the parameters like method, name, etc...
    *
    * Then we sanitize and validate all the variables
    * by doing a quick check of the inputs 
    * like the validating type (email, integer, etc...)
    * and finally we create all inputs as global variables
    *
*/
    declare( strict_types = 1 );

    require 'user-inputs-isset.php';
    require 'user-inputs-type.php';
    require 'user-inputs-variables.php';

    class USER_INPUTS {

    /**
        *
        *
        *
    */
        use USER_INPUTS_ISSET, USER_INPUTS_TYPE, USER_INPUTS_VARIABLES;


        private $ARRAY_INPUTS_METHODS = [];

        private $ARRAY_INPUTS_FILTERS = [ 

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
        *
        *
    */
        public function __construct(){

            $this -> ARRAY_INPUTS_METHODS [ 'SERVER'  ] = $_SERVER;

            $this -> ARRAY_INPUTS_METHODS [ 'ENV'     ] = $_ENV;

            $this -> ARRAY_INPUTS_METHODS [ 'COOKIE'  ] = $_COOKIE;

            $this -> ARRAY_INPUTS_METHODS [ 'SESSION' ] = $_SESSION;

            $this -> ARRAY_INPUTS_METHODS [ 'FILES'   ] = $_FILES;

            $this -> ARRAY_INPUTS_METHODS [ 'REQUEST' ] = $_REQUEST;

            $this -> ARRAY_INPUTS_METHODS [ 'POST'    ] = $_POST;

            $this -> ARRAY_INPUTS_METHODS [ 'GET'     ] = $_GET;

        }

    }

?>