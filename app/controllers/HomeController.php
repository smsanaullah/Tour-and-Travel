<?php
require_once '../core/View.php';

class HomeController {
    public function index() {
        View::render('home/home', ['title' => 'Home']);
    }


    public function login() {
        View::render('auth/login', ['title' => 'Login']);
    }
}
