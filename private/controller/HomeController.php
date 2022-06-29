<?php

class HomeController extends Controller
{
    function index()
    {
        echo $this->view('home');
    }
}
?>