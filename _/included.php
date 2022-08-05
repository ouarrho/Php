<?php

    declare( strict_types = 1 );

    class included {

        public $files          = '';

        public $path           = '';

        public $explode_path   = '';

        public $folder         = '';

        public $file           = '';
        
        public $extension      = '';


        public function __construct() {

            $this -> files = get_included_files();

        }

        public function path( int $level = 0 ): string {

            $this -> path = $this -> files[ $level ];

            return $this -> path;

        }

        public function explode_path(): array {

            $path = $this -> path();

            $this -> explode_path = explode( '\\', $path );

            return $this -> explode_path;

        }

        public function folder(): string {

            $explode_path = $this -> explode_path();
            
            $this -> folder = $explode_path[ count( $explode_path ) - 2 ];

            return $this -> folder;

        }

        public function file(): string {

            $explode_path = $this -> explode_path();
            
            $file = $explode_path[ count( $explode_path ) - 1 ];

            $this -> file = rtrim( $file, '.' . $this -> extension() );

            return $this -> file;

        }

        public function extension(): string {

            $explode_path = $this -> explode_path();

            $file = $explode_path[ count( $explode_path ) - 1 ];
            
            $extension = pathinfo( $file, PATHINFO_EXTENSION );

            $this -> extension = $extension;

            return $this -> extension;

        }

    }
    
?>