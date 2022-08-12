<?php

/**
    *
    * 
    *
*/
    declare( strict_types = 1 );

    trait USER_INPUTS_LENGTH {

    /**
        *
        *
        *
    */
        public function MIN( array $_DATA ){

            foreach( $_DATA AS $_METHOD => $_VALUE ):

                if( !empty( $_VALUE ) ):
                
                    foreach( $_VALUE AS $__VALUE ):

                        $EXPLODE__VALUE = $this -> EXPLODE_VAR_ATTR( $__VALUE );

                        if( isset( $EXPLODE__VALUE[ 'ATTR' ][ 'min' ] ) ):

                            $_VAR = $this -> ARRAY_INPUTS_METHODS[ $_METHOD ][ $EXPLODE__VALUE[ 'NAME' ] ];

                            ( is_numeric( $_VAR ) ) ? $input_length = $_VAR : $input_length = strlen( $_VAR );

                            if( $input_length < $EXPLODE__VALUE[ 'ATTR' ][ 'min' ] ):

                                echo "{$EXPLODE__VALUE[ 'NAME' ]} min length/value is {$EXPLODE__VALUE[ 'ATTR' ][ 'min' ]}";

                                exit();

                            endif;

                        endif;

                    endforeach;

                endif;

            endforeach;

            return $this;

        }

    /**
        *
        *
        *
    */
        public function MAX( array $_DATA ){

            foreach( $_DATA AS $_METHOD => $_VALUE ):

                if( !empty( $_VALUE ) ):
                
                    foreach( $_VALUE AS $__VALUE ):

                        $EXPLODE__VALUE = $this -> EXPLODE_VAR_ATTR( $__VALUE );

                        if( isset( $EXPLODE__VALUE[ 'ATTR' ][ 'max' ] ) ):

                            $_VAR = $this -> ARRAY_INPUTS_METHODS[ $_METHOD ][ $EXPLODE__VALUE[ 'NAME' ] ];

                            ( is_numeric( $_VAR ) ) ? $input_length = $_VAR : $input_length = strlen( $_VAR );

                            if( $input_length > $EXPLODE__VALUE[ 'ATTR' ][ 'max' ] ):

                                echo "{$EXPLODE__VALUE[ 'NAME' ]} max length/value is {$EXPLODE__VALUE[ 'ATTR' ][ 'max' ]}";

                                exit();

                            endif;

                        endif;

                    endforeach;

                endif;

            endforeach;

            return $this;

        }

    /**
        *
        *
        *
    */
        public function LENGTH( array $_DATA ){

            foreach( $_DATA AS $_METHOD => $_VALUE ):

                if( !empty( $_VALUE ) ):
                
                    foreach( $_VALUE AS $__VALUE ):

                        $EXPLODE__VALUE = $this -> EXPLODE_VAR_ATTR( $__VALUE );

                        if( isset( $EXPLODE__VALUE[ 'ATTR' ][ 'length' ] ) ):

                            $_VAR = $this -> ARRAY_INPUTS_METHODS[ $_METHOD ][ $EXPLODE__VALUE[ 'NAME' ] ];

                            if( strlen( $_VAR ) != $EXPLODE__VALUE[ 'ATTR' ][ 'length' ] ):

                                echo "{$EXPLODE__VALUE[ 'NAME' ]} length/value is {$EXPLODE__VALUE[ 'ATTR' ][ 'length' ]}";

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