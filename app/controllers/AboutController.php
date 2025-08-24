<?php
require_once '../core/View.php';

class AboutController {
    public function index() {
        View::render('about/index', ['title' => 'About']);
    }
}
