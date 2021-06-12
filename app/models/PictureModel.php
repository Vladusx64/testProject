<?php

namespace App\Models;

use DiDom\Document;

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
        $arrayPicture2 = array();
        $resultArr = array();
        foreach ($arrayPicture as $linc) {

            $document = new Document($linc, true);

            $element = (string)$document->first('._2UpQX');

            preg_match_all('/(alt|title|src)=("[^"]*")/i', $element, $arrayPicture2[$element]);
        }
       
        foreach ($arrayPicture2 as $element) {
            $url = $element[2][0];
            array_push($resultArr, $url);
        }

        return $resultArr;
    }
}
