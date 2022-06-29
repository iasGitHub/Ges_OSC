<?php

    class Controller
    {

        public function view($view, $data = array())
        {
            extract($data);
            
            if(file_exists("../private/view/" . $view . ".view.php")) 
            {
                return file_get_contents ("../private/view/" . $view . ".view.php");
            } else {
                return file_get_contents ("../private/view/error.view.php");
            }
        }
    }
?>