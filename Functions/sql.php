<?php


    function SQL_INSERT($TABLE, $VALUES){

        global $connect;

        $query = "INSERT INTO {$TABLE} VALUES({$VALUES})";

        $insert = mysqli_query($connect, $query);

        $insertId = mysqli_insert_id($connect);

        if($insert): 

            return $insertId;

        else: 

            return false;

        endif;

    }

    function SQL_UPDATE($TABLE, $SET, $WHERE=nul){

        global $connect;

        $query = "UPDATE {$TABLE} SET {$SET}";

        if($WHERE!=null): $query .= " WHERE {$WHERE}"; endif;

        $update = mysqli_query($connect, $query);

        if($update): return true;

        else: return false;

        endif;        

    }

    function SQL_SELECT($COLUMN, $TABLE, $WHERE=null, $GROUP=null, $ORDER=null, $LIMIT=null){

        global $connect;

        $query = "SELECT {$COLUMN} FROM {$TABLE}";

        if($WHERE!=null): $query .= " WHERE {$WHERE}"; endif;
        
        if($GROUP!=null): $query .= " GROUP by {$GROUP}"; endif;
        
        if($ORDER!=null): $query .= " ORDER by {$ORDER}"; endif;
        
        if($LIMIT!=null): $query .= " LIMIT {$LIMIT}"; endif;


        $select = mysqli_query($connect, $query);

        $numRows = mysqli_num_rows($select);

        if($select==true): 

            return array("count"=>$numRows, "fetch"=>$select);

        else: 

            return false;

        endif;        

    }

    function SQL_DELETE(){ /* ... */ }


?>