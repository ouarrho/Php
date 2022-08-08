<?php

    declare( strict_types = 1 );

    class USER_INPUTS {

        public function NEW_VAR( array $_DATA ){

            # check if isset the variable
            # explode the variable
            # create the variable

            foreach( $_DATA AS $_NAME ):

                $GLOBALS[ $_NAME ] = htmlspecialchars( $_REQUEST[ $_NAME ] );

            endforeach;

        }

        public function ISSET( array $_DATA ){


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