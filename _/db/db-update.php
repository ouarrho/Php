<?php

    declare( strict_types = 1 );

    class DB_UPDATE {

        private $query   = "";

        public  $process = false;


        public function TABLE( string $table = "" ): object {

            $this -> query .= " UPDATE {$table}";

            return $this;

        }

        public function SET( string $set = "" ): object {

            $this -> query .= " SET {$set}";

            return $this;

        }

        public function WHERE( string $where = "" ): object {

            $this -> query .= " WHERE {$where}";

            return $this;

        }

        public function START( array $parameters = [] ): object {

            global $connect;

            $update = $connect -> prepare( $this -> query );

            $update -> execute( $parameters );

            if( $update ):

                $this -> process = true;

            endif;

            return $this;

        }

    }

?>