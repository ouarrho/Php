<?php

    declare( strict_types = 1 );

    class DB_DELETE {

        private $query   = "";

        public  $process = false;

        public function TABLE( string $table = "" ): object {

            $this -> query .= "DELETE FROM {$table}";

            return $this;

        }

        public function WHERE( string $where = "" ): object {

            $this -> query .= " WHERE {$where}";

            return $this;

        }

        public function START( array $parameters = [] ): object {

            global $connect;

            $delete = $connect -> prepare( $this -> query );

            $delete -> execute( $parameters );

            if( $delete ):

                $this -> process = true;

            endif;

            return $this;

        }

    }

?>