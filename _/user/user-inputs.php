<?php

    declare( strict_types = 1 );

    class USER_INPUTS {

        public function ISSET_BY_METHOD( string $METHOD,  string $NAME ): bool {

                if( $METHOD == 'SERVER'  ): return isset( $_SERVER  [ $NAME ] ) ? true : false;

            elseif( $METHOD == 'ENV'     ): return isset( $_ENV     [ $NAME ] ) ? true : false;

            elseif( $METHOD == 'COOKIE'  ): return isset( $_COOKIE  [ $NAME ] ) ? true : false;

            elseif( $METHOD == 'SESSION' ): return isset( $_SESSION [ $NAME ] ) ? true : false;

            elseif( $METHOD == 'FILES'   ): return isset( $_FILES   [ $NAME ] ) ? true : false;

            elseif( $METHOD == 'REQUEST' ): return isset( $_REQUEST [ $NAME ] ) ? true : false;

            elseif( $METHOD == 'GET'     ): return isset( $_GET     [ $NAME ] ) ? true : false;

            elseif( $METHOD == 'POST'    ): return isset( $_POST    [ $NAME ] ) ? true : false;

            endif;

        }

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

        public function NEW_VAR_BY_METHOD( string $METHOD,  string $NAME ): bool {

            //...

        }

        public function NEW_VAR( array $_DATA ){

            foreach( $_DATA AS $_METHOD => $_VALUE ):

                if( !empty( $_VALUE ) ):
                
                    foreach( $_VALUE AS $__VALUE ):

                        $EXPLODE__VALUE = explode( ' AS ', $__VALUE );

                        $ARRAY__VALUE = [];

                        if( isset( $EXPLODE__VALUE[ 1 ] ) ):

                            $EXPLODE___VALUE = explode( ' ', $EXPLODE__VALUE[ 1 ] );

                            foreach( $EXPLODE___VALUE AS $___VALUE ):

                                if( !empty( $___VALUE ) ):

                                    $EXPLODE____VALUE = explode( ':', $___VALUE );

                                    $ARRAY__VALUE[ $EXPLODE____VALUE[ 0 ] ] = $EXPLODE____VALUE[ 1 ];

                                    //echo "{$EXPLODE____VALUE[ 0 ]} => {$EXPLODE____VALUE[ 1 ]} <br>";

                                endif;

                            endforeach;

                        endif;

                        print_r( $ARRAY__VALUE );

                        //$this -> NEW_VAR_BY_METHOD( $_METHOD, $EXPLODE__VALUE[ 0 ],  );

                    endforeach;

                endif;

            endforeach;

            return $this;

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