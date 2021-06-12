<?php

namespace App\Controllers;

use App\Models\PictureModel as Picture;

class PictureController
{
    public function __construct()
    {
        $picture = new Picture();
        $arrayPicture = $picture->readUrl(SITE_URL);
        $arrayPictureUrl = $picture->pictureCheck($arrayPicture);

        require_once VIEWS_DIR .  'main.php';
    }
}
