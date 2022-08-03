<?php

    function SQL_INSERT( $TABLE, $VALUES ){

        //... 

    }

    function SQL_UPDATE( $TABLE, $SET, $WHERE = null ){

        //... 

    }

    function SQL_SELECT( $columns, $table, $where = false, $group = false, $order = false, $limit = false ){

        global $connect;

        $query = "SELECT {$columns} FROM {$table}";

            ( ! $where ) ?: $query .= " where {$where}";
        
            ( ! $group ) ?: $query .= " group by {$group}";
        
            ( ! $order ) ?: $query .= " order by {$order}";
        
            ( ! $limit ) ?: $query .= " limit {$limit}";


        $select = $connect -> prepare( $query );

        $select -> execute();

        $count = $select -> rowCount();

        if( $select == true ): 

            return [

                'count' => $count, 

                'fetch' => $select

            ];

        else: 

            return false;

        endif;

    }

    function SQL_DELETE(){ 

        //... 

    }

?>