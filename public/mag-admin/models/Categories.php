<?php

    class Categories extends Database{


        public function getCategories() 
        {
            $sql = "SELECT * FROM categories";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $categories = $stmt->fetchAll();

            return $categories;
        }

        public function getTotalArticles()
        {
            $sql = "SELECT * FROM posts";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $totalArticles = $stmt->rowCount();

            return $totalArticles;
        }

        
    }