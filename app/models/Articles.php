<?php


    class Articles extends Database {

        public function getArticles()
        {
            $sql = "SELECT * FROM posts LIMIT 10";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $articles = $stmt->fetchAll();

            return $articles;

        }

    }