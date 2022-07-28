<?php

    function _VAR($_data){

        global $connect;

        foreach($_data AS $_name):

            $GLOBALS[$_name] = htmlentities(trim(mysqli_escape_string($connect, $_REQUEST[$_name])));

        endforeach;

    }

    function _ISSET($_data){

        global $str_errorIsset;

        foreach($_data AS $_name):

            if(!isset($_REQUEST[$_name])):

                echo $str_errorIsset;

                exit();

            endif;

        endforeach;

    }

    function _EMPTY($_data){

        global $str_errorEmpty;

        foreach($_data AS $_name):
            
            global $$_name;
            
            if(empty($$_name)):

                echo $str_errorEmpty;

                exit();

            endif;

        endforeach;

    }

?>