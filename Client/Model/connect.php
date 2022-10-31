<?php
    class connect {
        // properties
        var $database = null;

        // contructor
        public function __construct()
        {
            $dsn = "mysql:dbname=clothes;host=localhost";
            $user = "root";
            $pass = "";

            $this->database = new PDO($dsn, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8")); // mã hóa ký tự có dấu
        }

        // methods
        function getItem($select) {
            $result = $this->database->query($select);
            
            return $result->fetch();
        }

        function getListItems($select) {
            $result = $this->database->query($select);

            return $result;
        }

        function getExec($query) {
            $result = $this->database->exec($query);

            return $result;
        }

        function getPrepare($query) {
            $result = $this->database->prepare($query);

            return $result;
        }
    }
?>