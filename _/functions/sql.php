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

        string $join   = "", 

        string $where  = "", 

        string $group  = "", 

        string $having = "", 

        string $order  = "", 

        string $limit  = "" 

    ): array {

        global $connect;

        $query = "SELECT {$columns} FROM {$table}";

            ( ! $join )   ?: $query .= " {$join}";

            ( ! $where )  ?: $query .= " WHERE {$where}";
        
            ( ! $group )  ?: $query .= " GROUP BY {$group}";
        
            ( ! $having ) ?: $query .= " HAVING {$having}";

            ( ! $order )  ?: $query .= " ORDER BY {$order}";
        
            ( ! $limit )  ?: $query .= " LIMIT {$limit}";

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