<?php


    class Core {

        public function __construct()
        {
            $url = $this->getUrl();

            if(isset($url[0]))
            {
                if(file_exists('./views/'. $url[0] . '.php'))
                {
                    require './views/'. $url[0] . '.php';
                    unset($url[0]);
                }
                else 
                {
                    die('<h2>' . '404 Error' . '</h2>' . 'Requested File not Found!');
                }
            }
        }

        public function getUrl()
        {
            if(isset($_GET['url']))
            {
                $this->url = $_GET['url'];
                $this->url = rtrim($this->url, '/'); 
                $this->url = explode('/', $this->url);

                return $this->url;
            }
        }

    }