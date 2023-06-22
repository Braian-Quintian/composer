<?php
    namespace App;
    class cliente {
        use system;
        function __construct(){
            $_DATA = $this->data();
            print_r($_DATA);
        }
    }