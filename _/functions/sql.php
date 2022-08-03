<?php

    #String
    #Integer
    #Float
    #Boolean
    #Array
    #Object
    #NULL
    #Resource

    function SQL_INSERT( $TABLE, $VALUES ){ /* ... */ }

    function SQL_UPDATE( $TABLE, $SET, $WHERE = false ){ /* ... */ }

    function SQL_SELECT( $columns, $table, $where = false, $group = false, $order = false, $limit = false ){

        global $connect;

        $query = "SELECT {$columns} FROM {$table}";

            ( ! $where ) ?: $query .= " WHERE {$where}";
        
            ( ! $group ) ?: $query .= " GROUP BY {$group}";
        
            ( ! $order ) ?: $query .= " ORDER BY {$order}";
        
            ( ! $limit ) ?: $query .= " LIMIT {$limit}";

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

    function SQL_DELETE(){ /* ... */ }

?>