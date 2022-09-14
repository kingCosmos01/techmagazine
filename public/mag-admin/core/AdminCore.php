<?php
    

    class AdminCore {

        protected $currentView;
        protected $currentAction;

        public function __construct()
        {
            $this->getUrl();
        }

        public function getDefaultView()
        {
            $this->currentView = 'overview';
            require_once './views/' . $this->currentView . '.php';
        }

        public function getUrl()
        {
            if(isset($_GET['url']))
            {
                $url = rtrim($_GET['url']);
                if(file_exists('./views/' . $url . '.php'))
                {
                    $this->currentView = './views/' . $url . '.php';
                    require_once $this->currentView;
                    unset($url);
                }
            }
            else
            {
                $this->getDefaultView();
            }
        }

    }