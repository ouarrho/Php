<?php

/**
    *
    * This trait checks the type of each input
    *
*/
    declare( strict_types = 1 );

	trait USER_INPUTS_TYPE {

    /**
        *
        * This method checks if the type of the input is valid
        * 
        * This method is bound to USER_INPUTS class
        * 
        * If the input type doesn't meet the conditions, all the process is stopped and return the name of the input
        * 
        * All input types list: 
        *
        ******************************
        *
        *    *----# boolean or bool
        *    * 
        *    *----# domain
        *    * 
        *    *----# email
        *    * 
        *    *----# float
        *    * 
        *    *----# integer or int
        *    * 
        *    *----# ip
        *    * 
        *    *----# mac
        *    * 
        *    *----# regex
        *    * 
        *    *----# url
        *
        ******************************
        *
    */
        public function TYPE( array $_DATA ){

            foreach( $_DATA AS $_METHOD => $_VALUE ):

                if( !empty( $_VALUE ) ):
                
                    foreach( $_VALUE AS $__VALUE ):

                        $EXPLODE__VALUE = $this -> EXPLODE_VAR_VALUE( $__VALUE );

                        if( isset( $EXPLODE__VALUE[ 'ATTR' ][ 'type' ] ) ):

                            if( !filter_var( 

                                $this -> ARRAY_INPUTS_METHODS[ $_METHOD ][ $EXPLODE__VALUE[ 'NAME' ] ], 

                                $this -> ARRAY_INPUTS_FILTERS[ $EXPLODE__VALUE[ 'ATTR' ][ 'type' ] ] 

                            ) ):

                                echo "{$EXPLODE__VALUE[ 'NAME' ]} invalid type";

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