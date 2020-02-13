<?php
	namespace GEG\model;

class InscriptionBesoin extends \Illuminate\Database\Eloquent\Model
{
		protected $table = "inscriptionbesoin";
		public $timestamps = false;

		public function __toString()
    {
        $str = "";
        return $str;
    }
	}
?>
