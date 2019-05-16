<?php

class indexController {
    
    public function Home(){
        //por el momento queda en duda el aside
        require_once 'views/all/header.php';
        require_once 'views/all/navbar.php';

        require_once 'views/index/index.php';
        require_once 'views/all/footer.php';
    }
   
     public function Contact(){
        //por el momento queda en duda el aside
        require_once 'views/all/header.php';
      //  require_once 'views/all/navbar.php';
        require_once 'views/index/Contactanos.php';
        require_once 'views/all/footer.php';
    }
    
     public function login(){
        //por el momento queda en duda el aside
        require_once 'views/all/header.php';
      //  require_once 'views/all/navbar.php';
        require_once 'views/index/login.php';
        //require_once 'views/all/footer.php';
    }
    
    public function registrate(){
        //por el momento queda en duda el aside
        require_once 'views/all/header.php';
      //  require_once 'views/all/navbar.php';
        require_once 'views/index/registrate.php';
        //require_once 'views/all/footer.php';
    }
    
    public function productos(){
        //por el momento queda en duda el aside
        require_once 'views/all/header.php';
      //  require_once 'views/all/navbar.php';
        require_once 'views/index/productos.php';
        //require_once 'views/all/footer.php';
    }
}