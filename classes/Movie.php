<?php

require_once __DIR__ . "/Genre.php";

class Movie
{

    //* Variabili

    // Titolo
    public $title;
    // Lingua
    public $language;
    // Anno
    public $year;
    // ID
    protected $id;
    //poster
    public $poster;
    //already seen
    public $watched;
    //genre
    public $genre;

    function __construct(
        string $_title,
        string $_language,
        int $_year,
        int $_id,
        string $_poster,
        bool $_watched,
        Genre $_genre,
    ) {
        $this->title = $_title;
        $this->language = $_language;
        $this->year = $_year;
        $this->id = $_id;
        $this->poster = $_poster;
        $this->watched = $_watched;
        $this->genre = $_genre;
    }


    //# Metodi

    public function isBeenWatched($_watched): string
    {
        return ($_watched === true) ? "Watched." : "To watch.";
    }
}
