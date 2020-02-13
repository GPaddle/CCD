<?php

namespace GEG\view;
class VuePrincipaleTest
{

  private $t;

  public function __construct($tab){
    $this->t = $tab;
    printf($this->t);
  }


	public function render()
	{
		$vGenerale = new VueGenerale();

		$vGenerale->render(
			"<div id='content'>
      <div id='A' class='semaine' style='background-colot:grey;'>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
      </div>
      <div id='B' class='semaine'>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
      </div>
      <div id='C' class='semaine'>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
      </div>
      <div id='D' class='semaine'>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
        <div class='jour'></div>
      </div>

      </div>"
		);
	}
}
