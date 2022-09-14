<?php

    class Database {

        private $host = DBHOST;
        private $user = DBUSER;
        private $dbname = DBNAME;
        private $pass = DBPASS;

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