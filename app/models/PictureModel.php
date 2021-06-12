<?php

namespace App\Models;

class PictureModel
{
    public function readUrl($site_url)
    {
        if ($this->chekUrlToExists($site_url)) {
            $file = file_get_contents($site_url);
            $file = json_decode($file, true);
            
            $array_count = count($file);
            $array = array();

            while (count($array) < ARRAY_LENGTH) {
                $index = rand(0, $array_count);
                array_push($array, $file[$index]['post_url']);
            }

            return $array;
        } else {
            return null;
        }
    }

    public function chekUrlToExists(string $url)
    {
        $headers = @get_headers($url);

        if ($headers && strpos($headers[0], '200')) {
            return true;
        } else {
            return false;
        }
    }

    public function pictureCheck(array $arrayPicture)
    {
        foreach ($arrayPicture as $linc) {

            $html = file_get_html('http://habrahabr.ru/');}
            var_dump($html);
        }
    }
}
