<?php
require_once '../core/View.php';

class PackageController {

    public function list() {
        $packages = require __DIR__ . '/../models/package_data.php';
        View::render('package/list', [
            'title' => 'Packages',
            'packages' => $packages
        ]);
    }

    public function view($id) {
        $packages = require __DIR__ . '/../models/package_data.php';

        if (!isset($packages[$id])) {
            echo "Package not found!";
            return;
        }

        $package = $packages[$id];

        $discountOptions = [10, 20, 25, 30];
        $randomDiscount = $discountOptions[array_rand($discountOptions)];

        $original_price = (int) filter_var($package["price"], FILTER_SANITIZE_NUMBER_INT);
        $discount_price = $original_price - ($original_price * ($randomDiscount / 100));

        require __DIR__ . '/../views/packages/view.php';
    }
}
