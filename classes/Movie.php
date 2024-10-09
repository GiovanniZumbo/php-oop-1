<?php

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
    public $id;

    function __construct(
        string $_title,
        string $_language,
        int $_year,
        int $_id
    ) {
        $this->title = $_title;
        $this->language = $_language;
        $this->year = $_year;
        $this->id = $_id;
    }


    //# Metodi


}
