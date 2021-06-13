<?php

namespace App\Controllers;

use App\Models\PictureModel as Picture;

class PictureController
{
    public function __construct()
    {
        $errors = false;
        $picture = new Picture();
        $arrayPicture = $picture->readUrl(SITE_URL);

        if ($arrayPicture != null) {
            $arrayPictureUrl = $picture->pictureCheck($arrayPicture);
        } else {
        $errors = true;
        }
        require_once VIEWS_DIR .  'main.php';
    }
}
