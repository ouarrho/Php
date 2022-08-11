<?php

/**
    *
    * This trait checks the existence of all the inputs required
    *
*/
    declare( strict_types = 1 );

	trait INPUT_ISSET {

	/**
        *
        * This method is bound to ISSET() method
        *
        * It checks if the input exists taking into consideration all the methods of submitting
        * 
        * If the input exists it returns true and vice versa
        * 
        * The return value is either true or false
        *
    */
        public function ISSET_BY_METHOD( string $_METHOD,  string $_NAME ): bool {

                if( $_METHOD == 'SERVER'  ): return isset( $_SERVER  [ $_NAME ] ) ? true : false;

            elseif( $_METHOD == 'ENV'     ): return isset( $_ENV     [ $_NAME ] ) ? true : false;

            elseif( $_METHOD == 'COOKIE'  ): return isset( $_COOKIE  [ $_NAME ] ) ? true : false;

            elseif( $_METHOD == 'SESSION' ): return isset( $_SESSION [ $_NAME ] ) ? true : false;

            elseif( $_METHOD == 'FILES'   ): return isset( $_FILES   [ $_NAME ] ) ? true : false;

            elseif( $_METHOD == 'REQUEST' ): return isset( $_REQUEST [ $_NAME ] ) ? true : false;

            elseif( $_METHOD == 'POST'    ): return isset( $_POST    [ $_NAME ] ) ? true : false;

            elseif( $_METHOD == 'GET'     ): return isset( $_GET     [ $_NAME ] ) ? true : false;

            endif;

        }

	/**
        *
        * This method checks if the input exists
        * 
        * If the input doesn't exist all the process is stopped
        * and return the name of input required
        *
	*/
        public function ISSET( array $_DATA ){

            foreach( $_DATA AS $_METHOD => $_VALUE ):

                if( !empty( $_VALUE ) ):
                
                    foreach( $_VALUE AS $__VALUE ):

                        $EXPLODE__VALUE = explode( ' AS ', $__VALUE );

                        if( ! $this -> ISSET_BY_METHOD( $_METHOD, $EXPLODE__VALUE[ 0 ] ) ):

                            echo "$_METHOD => {$EXPLODE__VALUE[ 0 ]} NOT FOUND! <br>";

                            exit();

                        endif;

                    endforeach;

                endif;

            endforeach;

            return $this;

        }

	}

?>