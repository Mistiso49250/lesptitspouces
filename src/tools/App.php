<?php
declare(strict_types=1);

namespace Oc\Tools;

class App
{
    private $id_article;
    private $titre;
    private $contenu;
    private $extrait;
    private $image;
    private $prix;

    public function __construct()
    {
        // $this->id_article = ;
    }

    public function getId()
    {
        return $this->id_article;
    }

    public function getTitle()
    {
        return $this->titre;
    }

    public function setTitle(string $titre)
    {
        $this->titre = $titre;

        return $this->titre;
    }

    public function getContent()
    {
        return $this->contenu;
    }

    public function setContent(string $contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getExtrait()
    {
        return $this->extrait;
    }

    public function setExtrait(string $extrait)
    {
        $this->extrait = $extrait;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPrix()
    {
        return $this->prix;
    }
}
