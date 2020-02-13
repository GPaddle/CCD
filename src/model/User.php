<?php

namespace GEG\model;

class Item extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function __toString()
    {
        $str = "";
        return $str;
    }
}
