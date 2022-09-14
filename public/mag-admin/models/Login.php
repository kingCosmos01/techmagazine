<?php

    class Login extends Database{

        protected $username;
        protected $password;

        public $error;

        protected $currentAdmin;

        public function __construct($username, $password)
        {
            $this->username = $username;
            $this->password = $password;

        }

        public function get_username($username)
        {
            $sql = "SELECT username FROM mag_admin WHERE username = :username OR email = :email";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([':username' => $username, ':email' => $username]);

            return $stmt->rowCount();
        }

        public function get_password($password)
        {
            $sql = "SELECT password FROM mag_admin WHERE password = :password";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([':password' => $password]);

            return $stmt->rowCount();
        }



        public function validate_entries()
        {
            if($this->get_username($this->username) <= 0 || $this->get_password($this->password) <= 0) {
                $this->error = 'User not Found!';
                header('location: http://localhost/magazine/public/mag-admin/user/index.php?err=' . urlencode($this->error));
                return false;
                exit;
            }   
            else {
                return true;
            }

            
        }
        

        public function login_admin()
        {
            if($this->validate_entries() == true)
            {
                $_SESSION['admin-user'] = $this->username;
                header('location: http://localhost/magazine/public/mag-admin/');
            }
            else 
            {
                $this->error = 'Unable to Login, Check Details and Try again';
                header('location: http://localhost/magazine/public/mag-admin/user/?err=' . urlencode($this->error));
                exit;
            }
        }


    }
















    