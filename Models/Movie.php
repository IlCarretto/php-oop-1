<?php
require_once __DIR__ . "/Genre.php";

class Movie
{
    public $title;
    public $poster;
    public $genre;
    public $studio;
    public $takings;

    public function __construct(String $title, String $poster, Genre $genre, String $studio, float $takings)
    {
        $this->title = $title;
        $this->poster = $poster;
        $this->genre = $genre;
        $this->studio = $studio;
        $this->takings = $takings;
    }

    public function getDetails()
    {
        return "Studio: {$this->studio}; Takings: {$this->takings} millions USD";
    }
}
