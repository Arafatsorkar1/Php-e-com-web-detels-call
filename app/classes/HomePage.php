<?php


namespace App\classes;


class HomePage
{
public  function index()
{
    header('Location: action.php?page=home');
}
}