<?php

/**
    *
    * This trait checks the existence of all the inputs required
    *
*/
    declare( strict_types = 1 );

    trait USER_INPUTS_ISSET {

    /**
        *
        * This method checks if the input exists
        * 
        * This method is bound to USER_INPUTS class
        * 
        * It checks if the input exists taking into consideration all the methods of submitting
        * 
        * If the input doesn't exist all the process is stopped and return the name of input required
        *
    */
        public function ISSET( array $_DATA ){

            foreach( $_DATA AS $_METHOD => $_VALUE ):

                if( !empty( $_VALUE ) ):

                    foreach( $_VALUE AS $__VALUE ):

                        $EXPLODE__VALUE = explode( ' AS ', $__VALUE );

                        if( ! array_key_exists( $EXPLODE__VALUE[ 0 ], $this -> ARRAY_INPUTS_METHODS[ $_METHOD ] ) ):

                            echo "{$EXPLODE__VALUE[ 0 ]} NOT FOUND! <br>";

                            exit();

                        endif;

                    endforeach;

                endif;

            endforeach;

            return $this;

        }

    }

?>