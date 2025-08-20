<?php
class View {
    public static function render($view, $data = []) {
        extract($data);
        include "../app/views/{$view}.php";
    }
}
