<?php

    class Database {

        private $host = DB_HOST;
        private $user = DB_USER;
        private $dbname = DB_NAME;
        private $pass = DB_PASS;

        private $dbh;
        private $stmt;
        private $error;

        public function connect()
        {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

            // Create PDO Instance
            try
            {
                $this->dbh = new PDO($dsn, $this->user, $this->pass);
                return $this->dbh;
            }
            catch(PDOExceptio $e)
            {
                $this->error = 'Error!' . $e->getMessage();
                die($this->error);
            }
            
        }

        

        
    } 