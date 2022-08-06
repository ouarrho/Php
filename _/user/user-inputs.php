<?php

    declare( strict_types = 1 );

    class USER_INPUTS {

        public function NEW_VAR( array $_data ){

            foreach($_data AS $_name):

                $GLOBALS[ $_name ] = htmlspecialchars( $_REQUEST[ $_name ] );

            endforeach;

        }

        public function ISSET( array $_data ){


        }

        public function TYPE( array $_data ){


        }

        public function MIN( array $_data ){


        }

        public function MAX( array $_data ){


        }

        public function LENGTH( array $_data ){


        }

    }

?>