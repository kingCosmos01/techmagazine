<?php

    class Database {

        private $host = HOST;
        private $user = USER;
        private $dbname = NAME;
        private $pass = PASS;

        private $dbh;
        private $stmt;
        private $error;

        protected function connect()
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