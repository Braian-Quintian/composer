<?php

    namespace App;

    trait system
    {
        private static $instance;

        public static function getInstance()
        {
            if (!self::$instance) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        public function data()
        {
            return ($_BODY = file_get_contents('php://input')) ? json_decode($_BODY, true) : "No se recibieron datos";
        }
    }
