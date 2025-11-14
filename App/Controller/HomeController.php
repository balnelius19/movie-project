<?php 

namespace App\Controller;

class HomeController
{
    /**
     * Méthode pour rendre une vue avec un template
     * @param string $template Le nom du template à inclure
     * @param string|null $title Le titre de la page
     * @param array $data Les données à passer au template
     * @return void
     */
    public function render(string $template, ?string $title, array $data = []): void
    {
        include __DIR__ . "/../../template/template_" . $template . ".php";
    }

    public function index()
    {
        return $this->render("home","accueil");
    }
}