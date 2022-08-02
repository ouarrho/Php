<?php

    function SQL_INSERT( $TABLE, $VALUES ){

        //... 

    }

    function SQL_UPDATE( $TABLE, $SET, $WHERE=null ){

        //... 

    }

    function SQL_SELECT( $COLUMN, $TABLE, $WHERE=null, $GROUP=null, $ORDER=null, $LIMIT=null ){

        global $PDO;

        $select = $PDO->query( 'SELECT * FROM u' );

        while( $row = $select->fetch( PDO::FETCH_ASSOC ) ):

            echo $row[ 'userMail' ];

        endwhile;

    }

    function SQL_DELETE(){ 

        //... 

    }

?>