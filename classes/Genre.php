<?php

class Genre

{
    public $name;
    public $minorsAllowed;
    public $id;

    public function __construct(
        mixed $_name,
        bool $_minorsAllowed,
        int $_id
    ) {

        $this->name = $_name;
        $this->minorsAllowed = $_minorsAllowed;
        $this->id = $_id;
    }
}
