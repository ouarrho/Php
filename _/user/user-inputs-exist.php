<?php

/**
    *
    * This trait checks the existence of all the inputs required
    *
*/
    declare( strict_types = 1 );

    trait USER_INPUTS_EXIST {

    /**
        *
        * This method checks if the input exists
        * 
        * This method is bound to USER_INPUTS class
        * 
        * It checks if the input exists taking into consideration all the methods of submitting
        * 
        * If the input doesn't exist, all the process is stopped and return the name of the required input
        *
    */
        public function EXIST( array $_DATA ){

            foreach( $_DATA AS $_METHOD => $_VALUE ):

                if( !empty( $_VALUE ) ):

                    foreach( $_VALUE AS $__VALUE ):

                        $EXPLODE__VALUE = explode( ' AS ', $__VALUE );

                        $_METHOD_NAME = $this -> ARRAY_INPUTS_METHODS[ $_METHOD ];

                        if( ! array_key_exists( $EXPLODE__VALUE[ 0 ], $_METHOD_NAME ) ):

                            echo "{$EXPLODE__VALUE[ 0 ]} NOT FOUND! <br>";

                            exit();

                        else:

                            if( 

                                empty( trim( $_METHOD_NAME [ $EXPLODE__VALUE[ 0 ] ] ) ) 

                                    AND 

                                $_METHOD_NAME [ $EXPLODE__VALUE[ 0 ] ] != '0'

                            ):

                                echo "{$EXPLODE__VALUE[ 0 ]} EMPTY! <br>";

                                exit();

                            endif;

                        endif;

                    endforeach;

                endif;

            endforeach;

            return $this;

        }

    }

?>