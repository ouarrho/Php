<?php

    declare( strict_types = 1 );

    class TREE {

        public $included_files  = '';

        public $targeted_path   = '';

        public $explode_path    = '';

        public $targeted_folder = '';

        public $targeted_file   = '';


        public function __constructor() {
            
            //return $this->included_files();
        
        }

        public function included_files(){

            $this -> included_files = get_included_files();

            return $this -> included_files;

        }

        public function targeted_path(){

            $included_files = $this -> included_files();

            $this -> targeted_path = $included_files[0];

            return $this -> targeted_path;

        }

        public function explode_path(){

            $targeted_path = $this -> targeted_path();

            $this -> explode_path = explode( '\\', $targeted_path );

            return $this -> explode_path;

        }

        public function targeted_folder(){

            $explode_path = $this -> explode_path();
            
            $this -> targeted_folder = $explode_path[ count( $explode_path ) - 2 ];

            return $this -> targeted_folder;

        }

        public function targeted_file(){

            $explode_path = $this -> explode_path();

            $this -> targeted_file = rtrim( $explode_path[ count( $explode_path ) - 1 ], '.php' );

            return $this -> targeted_file;

        }

    }
    
?>