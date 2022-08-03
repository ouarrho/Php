<?php

    declare( strict_types = 1 );

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


    function SQL_SELECT( 
    
        string $columns, 

        string $table, 

        string $where = '', 

        string $group = '', 

        string $order = '', 

        string $limit = '' 

    ): string {

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