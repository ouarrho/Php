<?php

    declare( strict_types = 1 );

    class USER_INPUTS {

            # check if isset the variable
            # explode the variable
            # create the variable

        public function ISSET_SERVER( string $NAME ): bool {

            return isset( $_SERVER[ $NAME ] ) ? true : false;

        }

        public function ISSET_ENV( string $NAME ): bool {

            return isset( $_ENV[ $NAME ] ) ? true : false;

        }

        public function ISSET_COOKIE( string $NAME ): bool {

            return isset( $_COOKIE[ $NAME ] ) ? true : false;

        }

        public function ISSET_SESSION( string $NAME ): bool {

            return isset( $_SESSION[ $NAME ] ) ? true : false;

        }

        public function ISSET_FILES( string $NAME ): bool {

            return isset( $_FILES[ $NAME ] ) ? true : false;

        }

        public function ISSET_REQUEST( string $NAME ): bool {

            return isset( $_REQUEST[ $NAME ] ) ? true : false;

        }

        public function ISSET_POST( string $NAME ): bool {

            return isset( $_POST[ $NAME ] ) ? true : false;

        }

        public function ISSET_GET( string $NAME ): bool {

            return isset( $_GET[ $NAME ] ) ? true : false;

        }

        public function ISSET( array $_data ){

            foreach( $_data AS $_key => $_value ):

                if( !empty( $_value ) ):
                
                    foreach( $_value AS $__value ):

                        $explode__value = explode( ' AS ', $__value );

                        if( $this -> ISSET_POST( $explode__value[ 0 ] ) ):
                            
                            echo "Ok <br>";

                        else:

                            echo "{$explode__value[ 0 ]} NOT FOUND! <br>";

                        endif;

                    endforeach;

                endif;

            endforeach;

        }

        public function NEW_VAR( array $_DATA ){

            foreach( $_DATA AS $_NAME ):

                $GLOBALS[ $_NAME ] = htmlspecialchars( $_REQUEST[ $_NAME ] );

            endforeach;

        }

        public function TYPE( array $_DATA ){


        }

        public function MIN( array $_DATA ){


        }

        public function MAX( array $_DATA ){


        }

        public function LENGTH( array $_DATA ){


        }

    }

?>