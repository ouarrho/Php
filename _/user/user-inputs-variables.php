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

    /**
        *
        *
        *
    */
        public function NEW_VAR( array $_DATA ){

            foreach( $_DATA AS $_METHOD => $_VALUE ):

                if( !empty( $_VALUE ) ):
                
                    foreach( $_VALUE AS $__VALUE ):

                        $EXPLODE__VALUE = $this -> EXPLODE_VAR_ATTR( $__VALUE );

                        if( isset( $EXPLODE__VALUE[ 'ATTR' ][ 'name' ] ) ): 

                            $_name = $EXPLODE__VALUE[ 'ATTR' ][ 'name' ];

                        else: 

                            $_name = $EXPLODE__VALUE[ 'NAME' ];

                        endif;

                        $_METHOD_NAME = $this -> ARRAY_INPUTS_METHODS[ $_METHOD ];

                        $GLOBALS[ $_name ] = htmlspecialchars( trim( $_METHOD_NAME [ $EXPLODE__VALUE[ 'NAME' ] ] ) );

                        if( isset( $EXPLODE__VALUE[ 'ATTR' ][ 'default' ] ) AND empty($$_name) ): 

                            $GLOBALS[ $_name ] = $EXPLODE__VALUE[ 'ATTR' ][ 'default' ];

                        endif;

                    endforeach;

                endif;

            endforeach;

            return $this;

        }

    }

?>