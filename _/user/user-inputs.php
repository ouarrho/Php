<?php

    class USER_INPUTS {

        public function NEW_VAR( $_data ){

            foreach($_data AS $_name):

                $GLOBALS[ $_name ] = htmlspecialchars( $_REQUEST[ $_name ] );

            endforeach;

        }

        public function IF_ISSET( $_data ){


        }

        public function IF_EMPTY( $_data ){


        }

    }

?>