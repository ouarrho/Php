<?php

    # if isset variable is true

    # creation of variables

    # variable's validation

        ## empty
        ## type
        ## length
        ## min/max


    function NEW_VAR($_data){

        # define method
        # define variable name ( explode the name by AS keyword )
        # htmlspecialchars & trim

        foreach($_data AS $_name):

            $GLOBALS[ $_name ] = htmlspecialchars( $_REQUEST[ $_name ] );

        endforeach;

    }

    function IF_ISSET($_data){


    }

    function IF_EMPTY($_data){


    }

?>