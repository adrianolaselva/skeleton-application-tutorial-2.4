<?php

namespace Album\Model;

/**
 * Created by PhpStorm.
 * User: a.moreira
 * Date: 27/04/2017
 * Time: 10:56
 */
class Album
{
    public $id;
    public $artist;
    public $title;

    public function exchangeArray($data)
    {
        $this->id     = (!empty($data['id'])) ? $data['id'] : null;
        $this->artist = (!empty($data['artist'])) ? $data['artist'] : null;
        $this->title  = (!empty($data['title'])) ? $data['title'] : null;
    }
}