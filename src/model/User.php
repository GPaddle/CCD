<?php

namespace GEG\model;

class User extends \Illuminate\Database\Eloquent\Model
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
