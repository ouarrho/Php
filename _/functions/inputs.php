<?php

    # if isset variable is true

    # creation of variables

    # variable's validation

        ## empty
        ## type
        ## length
        ## min/max


    function NEW_VAR($_data){

        foreach($_data AS $_name):

            $GLOBALS[$_name] = htmlentities(trim(mysqli_escape_string($connect, $_REQUEST[$_name])));

        endforeach;

    }

    function IF_ISSET($_data){


    }

    function IF_EMPTY($_data){


    }

?>