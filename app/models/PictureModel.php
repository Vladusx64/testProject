<?php

namespace App\Models;

use DiDom\Document;

class PictureModel
{
    public function readUrl(string $site_url, int $length)
    {
        if ($this->chekUrlToExists($site_url)) {
            $file = file_get_contents($site_url);
            $file = json_decode($file, true);

            $array_count = count($file);
            $array = array();

            while (count($array) < $length) {
                $index = rand(0, $array_count);
                if ($this->chekUrlToExists($file[$index]['post_url'])) {
                    array_push($array, $file[$index]['post_url']);
                }
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
        $arrayRawPic = array();
        $resultArr = array();
        for ($i = 0; $i < count($arrayPicture); $i++) {

            $document = new Document($arrayPicture[$i], true);

            $element = (string)$document->first('._2UpQX');

            preg_match_all('/(alt|title|src)=("[^"]*")/i', $element, $arrayRawPic[$i]);

            $url = $arrayRawPic[$i][2][0];
            array_push($resultArr, $url);
        }

        return $resultArr;
    }
}
