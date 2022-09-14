<?php


    class CreateCategory extends Database{

        protected $category;
        protected $categoryId;

        public $err;

        public function __construct($category)
        {
            $this->category = $category;

            $catID = $this->createUniqueCatId();

            if($this->createCategory($catID, $this->category) == true) {
                header('location: http://localhost/magazine/public/mag-admin/?url=add_category&success=' . urlencode('CategorySuccessfllyAdded!'));
            }
            else {
                $this->err = "Error Creating Categroy!";
                header('location: http://localhost/magazine/public/mag-admin/?url=add_category&err=' . urlencode($this->err));
                unset($this->err);
                exit;
            }
        }

        public function createUniqueCatId()
        {
            // Fix Uniqueness of Category ID - Start from here
            $this->categoryId = uniqid();

            return  $this->categoryId;
            
        }

        public function checkValidCatEntry($cat)
        {
            $result;

            if(!is_string($cat)){

                $result = false;
                $this->err = "Invalid Category Type!";

                unset($this->err);
            }
            else {
                $result = true;
            }

            if(strlen($cat) < 3)
            {
                $result = false;
                $this->err = "Category Can not be less than 3 characters!";

                unset($this->err);
            }
            else {
                $result = true;
            }

            return $result;

        }

        public function createCategory($catId, $cat)
        {
            if($this->checkValidCatEntry($this->category) === true)
            {
                $sql = "INSERT INTO categories (id, cat_name) VALUES (:id, :cat_name)";
                $stmt = $this->connect()->prepare($sql);
                $result = $stmt->execute([
                    ':id' => $catId,
                    ':cat_name' => $cat
                ]);

                if($result) {
                    return true;
                }
                else 
                {
                    return false;
                }
            } else {

                $this->err = "Error Creating Category. Please Try Again!";

                header('location: http://localhost/magazine/public/mag-admin/?url=add_category&err=' . urlencode($this->err));
                
                unset($this->err);
            }
        }


    }