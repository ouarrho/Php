<?php

    declare( strict_types = 1 );

    class DB_SELECT {

        private $query = "";
        
        public $count = "";
        
        public $fetch = "";


        public function COLUMNS( string $columns = "" ): object {

            $this -> query .= "SELECT {$columns}";

            return $this;

        }

        public function TABLE( string $table = "" ): object {

            $this -> query .= " FROM {$table}";

            return $this;

        }

        public function JOIN( string $join = "" ): object {

            $this -> query .= " {$join}";

            return $this;

        }

        public function WHERE( string $where = "" ): object {

            $this -> query .= " WHERE {$where}";

            return $this;

        }

        public function GROUP( string $group = "" ): object {

            $this -> query .= " GROUP BY {$group}";

            return $this;

        }

        public function HAVING( string $having = "" ): object {

            $this -> query .= " {$having}";

            return $this;

        }

        public function ORDER( string $order = "" ): object {

            $this -> query .= " ORDER BY {$order}";

            return $this;

        }

        public function LIMIT( string $limit = "" ): object {

            $this -> query .= " LIMIT {$limit}";

            return $this;

        }

        public function START(): object {

            global $connect;

            $select = $connect -> prepare( $this -> query );

            $select -> execute();

            $count = $select -> rowCount();

            $fetch = $select -> fetchAll( PDO::FETCH_ASSOC );

            if( $select == true ): 

                $this -> count = $count;
                
                $this -> fetch = $fetch;

            else: 

                $this -> count = false;

                $this -> fetch = false;

            endif;

            return $this;

        }

    }

?>