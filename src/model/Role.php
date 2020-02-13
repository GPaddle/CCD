<?php

namespace GEG\model;

class Role extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'role';
    protected $primaryKey = 'id';
    public $timestamps = false;


    public function __toString()
    {
        $str = "";
        return $str;
    }
}
