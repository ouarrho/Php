<?php

    function SQL_SELECT_something($id){
        
        $select = SQL_SELECT("userName", "users", "userId='$id'");

        $fetch = mysqli_fetch_assoc( $select[ 'fetch' ] );

        return array( 

                'userName' => $fetch[ 'userName' ] 

            );

    }

?>