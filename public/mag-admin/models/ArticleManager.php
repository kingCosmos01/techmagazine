<?php


    class ArticleManager extends Database {

        public function getArticles()
        {
            $sql = "SELECT * FROM posts LIMIT 5 ";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $articles;

        }

    }