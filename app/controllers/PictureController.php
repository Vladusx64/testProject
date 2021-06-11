<?php

namespace App\Controllers;

use App\Models\Picture;

class PictureController
{
    public function __construct()
    {
        $picture = new Picture();
        require_once VIEWS_DIR .  'main.php';
    }
}
