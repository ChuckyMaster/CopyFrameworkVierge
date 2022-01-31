<?php




namespace Controllers;

class Home extends AbstractController
{

    protected $defaultModelName = \Models\Home::class;






    public function index(){



        return $this->render("home/index", ["pageTitle" => "Home Page"]);
    }
}





?>