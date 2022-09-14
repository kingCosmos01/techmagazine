<?php

    class ReadMore extends Database {

        protected $selectedArticle;

        public function checkIfIdExists()
        {
            if(isset($_GET['id']))
            {
                $id = $_GET['id'];
                $id = rtrim($id);

                return $id;
            }
        }


        public function getArticleById($id)
        {
            $sql = "SELECT * FROM posts WHERE id = :id";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([
                ':id' => $id
            ]);

            $articles = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $articles;
        }

    }