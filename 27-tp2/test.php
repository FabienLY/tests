<?php
class Mere
{
    public function __construct()
    {
        echo self::class;
    }
}

class Fille extends Mere
{

}

new Fille;