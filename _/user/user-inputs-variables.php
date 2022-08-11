<?php

/**
    *
    * 
    *
*/
    declare( strict_types = 1 );

    trait USER_INPUTS_VARIABLES {

    /**
        *
        *
        *
    */
        public function EXPLODE_VAR_ATTR( string $__VALUE ) : array {

            $EXPLODE__VALUE = explode( ' AS ', $__VALUE );

            $ARRAY___VALUE = [];

            if( isset( $EXPLODE__VALUE[ 1 ] ) ):

                $EXPLODE___VALUE = explode( ' ', $EXPLODE__VALUE[ 1 ] );

                foreach( $EXPLODE___VALUE AS $___VALUE ):

                    if( !empty( $___VALUE ) ):

                        $EXPLODE____VALUE = explode( ':', $___VALUE );

                        $ARRAY___VALUE[ $EXPLODE____VALUE[ 0 ] ] = $EXPLODE____VALUE[ 1 ];

                    endif;

                endforeach;

            endif;

            return [ 'NAME' => $EXPLODE__VALUE[ 0 ], 'ATTR' => $ARRAY___VALUE ];

        }

    }

?>