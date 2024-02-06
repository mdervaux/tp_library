<?php
require_once 'Services/Render/Render.php';
require_once("Models/BookManager/BookManager.model.php");
require_once("Services/Toolbox/Toolbox.php");

class BookController extends Render
{
    private $bookManager;

    public function __construct(){
        parent::__construct(Render::class);
        $this->bookManager = new BookManager();
    }
    public function index(): void
    {
        $datas = $this->bookManager->getLivres();
        Toolbox::addAlert('test', Toolbox::COULEUR_VERTE);
        $data_page = [
            "page_description" => "Description de la page d'accueil",
            "page_title" => "Titre de la page d'accueil",
            "page_css" => ["page1.css"],
            "datas" => $datas,
            "view" => "Views/Book/index.php",
            "template" => "Views/Layouts/base.php"
        ];
        $this->render($data_page);
    }
}