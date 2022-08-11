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

    class USER_INPUTS {


        use INPUT_ISSET;

    /**
        *
        *
        *
    */
        public function EXPLODE_VAR_VALUE( string $__VALUE ){

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
        public function NEW_VAR_BY_METHOD( string $_METHOD,  string $_NAME, array $_ATTR ){

                ( isset( $_ATTR[ 'name' ] ) ) ? $_name = $_ATTR[ 'name' ] : $_name = $_NAME;
            
                if( $_METHOD == 'SERVER'  ): $GLOBALS[ $_name ] = htmlspecialchars( $_SERVER  [ $_NAME ] );

            elseif( $_METHOD == 'ENV'     ): $GLOBALS[ $_name ] = htmlspecialchars( $_ENV     [ $_NAME ] );

            elseif( $_METHOD == 'COOKIE'  ): $GLOBALS[ $_name ] = htmlspecialchars( $_COOKIE  [ $_NAME ] );

            elseif( $_METHOD == 'SESSION' ): $GLOBALS[ $_name ] = htmlspecialchars( $_SESSION [ $_NAME ] );

            elseif( $_METHOD == 'FILES'   ): $GLOBALS[ $_name ] = htmlspecialchars( $_FILES   [ $_NAME ] );

            elseif( $_METHOD == 'REQUEST' ): $GLOBALS[ $_name ] = htmlspecialchars( $_REQUEST [ $_NAME ] );

            elseif( $_METHOD == 'POST'    ): $GLOBALS[ $_name ] = htmlspecialchars( $_POST    [ $_NAME ] );

            elseif( $_METHOD == 'GET'     ): $GLOBALS[ $_name ] = htmlspecialchars( $_GET     [ $_NAME ] );

            endif;

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

                        $EXPLODE__VALUE = $this -> EXPLODE_VAR_VALUE( $__VALUE );

                        $this -> NEW_VAR_BY_METHOD( $_METHOD, $EXPLODE__VALUE[ 'NAME' ], $EXPLODE__VALUE[ 'ATTR' ] );

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
        public function TYPE_BY_METHOD( string $_METHOD,  string $_NAME, array $_ATTR ){

            global $arr_inputs_filters;

            if( $_METHOD == 'SERVER' ):

                if( !filter_var( $_SERVER[ $_NAME ], $arr_inputs_filters[ $_ATTR[ 'type' ] ] ) ):

                    echo "$_NAME invalid type";

                    exit();

                endif;

            elseif( $_METHOD == 'ENV' ):

                if( !filter_var( $_ENV[ $_NAME ], $arr_inputs_filters[ $_ATTR[ 'type' ] ] ) ):

                    echo "$_NAME invalid type";

                    exit();

                endif;

            elseif( $_METHOD == 'COOKIE' ):

                if( !filter_var( $_COOKIE[ $_NAME ], $arr_inputs_filters[ $_ATTR[ 'type' ] ] ) ):

                    echo "$_NAME invalid type";

                    exit();

                endif;

            elseif( $_METHOD == 'SESSION' ):

                if( !filter_var( $_SESSION[ $_NAME ], $arr_inputs_filters[ $_ATTR[ 'type' ] ] ) ):

                    echo "$_NAME invalid type";

                    exit();

                endif;

            elseif( $_METHOD == 'FILES' ):

                if( !filter_var( $_FILES[ $_NAME ], $arr_inputs_filters[ $_ATTR[ 'type' ] ] ) ):

                    echo "$_NAME invalid type";

                    exit();

                endif;

            elseif( $_METHOD == 'REQUEST' ):

                if( !filter_var( $_REQUEST[ $_NAME ], $arr_inputs_filters[ $_ATTR[ 'type' ] ] ) ):

                    echo "$_NAME invalid type";

                    exit();

                endif;

            elseif( $_METHOD == 'POST' ):

                if( !filter_var( $_POST[ $_NAME ], $arr_inputs_filters[ $_ATTR[ 'type' ] ] ) ):

                    echo "$_NAME invalid type";

                    exit();

                endif;

            elseif( $_METHOD == 'GET' ):

                if( !filter_var( $_GET[ $_NAME ], $arr_inputs_filters[ $_ATTR[ 'type' ] ] ) ):

                    echo "$_NAME invalid type";

                    exit();

                endif;

            endif;

        }


    /**
        *
        *
        *
    */
        public function TYPE( array $_DATA ){

            foreach( $_DATA AS $_METHOD => $_VALUE ):

                if( !empty( $_VALUE ) ):
                
                    foreach( $_VALUE AS $__VALUE ):

                        $EXPLODE__VALUE = $this -> EXPLODE_VAR_VALUE( $__VALUE );

                        if( isset( $EXPLODE__VALUE[ 'ATTR' ][ 'type' ] ) ):

                            $this -> TYPE_BY_METHOD( $_METHOD, $EXPLODE__VALUE[ 'NAME' ], $EXPLODE__VALUE[ 'ATTR' ] );

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
        public function MIN( array $_DATA ){


        }


    /**
        *
        *
        *
    */
        public function MAX( array $_DATA ){


        }


    /**
        *
        *
        *
    */
        public function LENGTH( array $_DATA ){


        }

    }

?>