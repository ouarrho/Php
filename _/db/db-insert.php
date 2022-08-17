<?php

    declare( strict_types = 1 );

    class DB_INSERT {

        private $query   = "";

        public  $id      = "";

        public  $process = false;


        public function TABLE( string $table = "" ): object {

            $this -> query .= " INSERT INTO {$table}";

            return $this;

        }

        public function COLUMNS( string $columns = "" ): object {

            $this -> query .= " ( {$columns} )";

            return $this;

        }

        public function VALUES( string $values = "" ): object {

            $this -> query .= " VALUES( {$values} )";

            return $this;

        }

        public function START( array $parameters = [] ): object {

            global $connect;

            $insert = $connect -> prepare( $this -> query );

            $insert -> execute( $parameters );

            if( $insert == true ):

                $this -> id      = $connect -> lastInsertId();

                $this -> process = true;

            else: 

                $this -> id = false;

            endif;

            return $this;

        }

    }

?>