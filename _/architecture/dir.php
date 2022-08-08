<?php

    declare( strict_types = 1 );

    class DIR {

        public $FILES        = '';

        public $PATH         = '';

        public $EXPLODE_PATH = '';

        public $FOLDER       = '';

        public $FILE         = '';
        
        public $EXTENSION    = '';


        public function __construct() {

            $this -> FILES = get_included_files();

        }

        public function PATH( int $level = 0 ): string {

            $this -> PATH = $this -> FILES[ $level ];

            return $this -> PATH;

        }

        public function EXPLODE_PATH(): array {

            $PATH = $this -> PATH();

            $this -> EXPLODE_PATH = explode( '\\', $PATH );

            return $this -> EXPLODE_PATH;

        }

        public function FOLDER(): string {

            $EXPLODE_PATH = $this -> EXPLODE_PATH();
            
            $this -> FOLDER = $EXPLODE_PATH[ count( $EXPLODE_PATH ) - 2 ];

            return $this -> FOLDER;

        }

        public function FILE(): string {

            $EXPLODE_PATH = $this -> EXPLODE_PATH();
            
            $FILE = $EXPLODE_PATH[ count( $EXPLODE_PATH ) - 1 ];

            $this -> FILE = rtrim( $FILE, '.' . $this -> EXTENSION() );

            return $this -> FILE;

        }

        public function EXTENSION(): string {

            $EXPLODE_PATH = $this -> EXPLODE_PATH();

            $FILE = $EXPLODE_PATH[ count( $EXPLODE_PATH ) - 1 ];
            
            $EXTENSION = pathinfo( $FILE, PATHINFO_EXTENSION );

            $this -> EXTENSION = $EXTENSION;

            return $this -> EXTENSION;

        }

    }
    
?>