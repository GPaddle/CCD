<?php

namespace GEG\model;

class Creneau extends \Illuminate\Database\Eloquent\Model
{
    protected $table = 'creneau';
    protected $primaryKey = 'id';
    public $timestamps = false;


    public function __toString()
    {
        $str = "";
        return $str;
    }
}
