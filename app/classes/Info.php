<?php


namespace App\classes;


class Info
{
    public function index(){

        header('Location: action.php?pages=home');
    }
}