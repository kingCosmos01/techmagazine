<?php


    class AddArticle extends Database {

        protected $title;
        protected $description;
        protected $image;
        protected $category;
        protected $data;

        public $error;


        public function __construct($title, $description, $image, $category) {

            $this->data = $data;

            $this->title = $title;
            $this->description = $description;
            $this->image = $image;
            $this->category = $category;

            $this->addArticle($this->title, $this->description, $this->image, $this->category);
            
        }

        public function validate_inputs()
        {
            if($this->check_valid_title() == true)
            {
                $this->error = '';
            }
            else 
            {
                $this->error = 'Your Title Should be five letters and above!';
                header('location: http://localhost/magazine/public/mag-admin/?url=add_article&err=' . urlencode($this->error));
                exit;
            }

            if($this->check_valid_desc() == true)
            {   
                $this->error = '';
            }
            else 
            {
                $this->error = 'Your description is too short!';
                header('location: http://localhost/magazine/public/mag-admin/?url=add_article&err=' . urlencode($this->error));
                exit;
            }

            if($this->check_valid_img($this->image) == true)
            {
                $this->error = '';
                move_uploaded_file('$this->image', "uploads/" . rand() . $this->data['name']);
            }
            else 
            {
                $this->error = 'Enter a valid Image!';
                header('location: http://localhost/magazine/public/mag-admin/?url=add_article&err=' . urlencode($this->error));
                exit;
            }

            return true;
        }


        public function addArticle($title, $description, $image, $category)
        {
            $article_id = uniqid();

            if($this->validate_inputs() == true)
            {
                $sql = "INSERT INTO posts (id, title, description, image, cat_id, author) VALUES (:id, :title, :description, :image, :cat_id, :author)";
                $stmt = $this->connect()->prepare($sql);
                $stmt->execute([
                    ':id' => $article_id,
                    ':title' => $title,
                    ':description' => $description,
                    ':image' => $image,
                    ':cat_id' => $category,
                    ':author' => $_SESSION['admin-user']
                ]);
            }
            else 
            {
                $this->error = 'Error Adding Article';
                header('location: http://localhost/magazine/public/mag-admin/?url=add_article?err=' . urlencode($this->error));
                exit;
            }
            header('location: http://localhost/magazine/public/mag-admin/?url=add_article&article=ArticleAddedSuccessfully');
        }

        public function check_valid_title() {
            $result; 
            if(empty($this->title))
            {
                $result = false;
            }
            else 
            {
                $result = true;
            }

            if(strlen($this->title) < 5) 
            {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

        public function check_valid_desc()
        {
            $result; 

            if(empty($this->description))
            {
                $result = false;
            }
            else 
            {
                $result = true;
            }

            if(strlen($this->description) < 20) 
            {
                $result = false;
            } else {
                $result = true;
            }
            return $result;
        }

        public function check_valid_img($img)
        {
            $result;

            $allowed_img_exts = ['jpg','png', 'jpeg', 'gif'];

            $img_ext = explode('.', '$img');  

            if(!in_array($img_ext[1], $allowed_img_exts))
            {
                $result = false;
            }
            else {
                $result = true;
            }
            if($this->data['size'] > 5242880) {
                $result = false;
            }
            else {
                $result = true;
            }

            return $result;
        }

      

    }