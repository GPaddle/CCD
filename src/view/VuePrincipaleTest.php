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
			"
      <style>
      .semaine{
        border : solid 2px black;
        height : 500px;
        display : flex;
        flex-direction ; row;
        margin-bottom : 10px;
      }

      .jour{
        border : solid 1px black;
        background-color : grey;
        width : 1000px;
        text-align : center;
      }

      .jour p{
        border-bottom : solid 2px black;
        margin-top : 0px;
      }

      </style>

      <div id='content'>
      <div id='A' class='semaine'>
        <div class='jour'><p>L</p></div>
        <div class='jour'><p>M</p></div>
        <div class='jour'><p>M</p></div>
        <div class='jour'><p>J</p></div>
        <div class='jour'><p>V</p></div>
        <div class='jour'><p>S</p></div>
        <div class='jour'><p>D</p></div>
      </div>
      <div id='B' class='semaine'>
        <div class='jour'><p>L</p></div>
        <div class='jour'><p>M</p></div>
        <div class='jour'><p>M</p></div>
        <div class='jour'><p>J</p></div>
        <div class='jour'><p>V</p></div>
        <div class='jour'><p>S</p></div>
        <div class='jour'><p>D</p></div>
      </div>
      <div id='C' class='semaine'>
        <div class='jour'><p>L</p></div>
        <div class='jour'><p>M</p></div>
        <div class='jour'><p>M</p></div>
        <div class='jour'><p>J</p></div>
        <div class='jour'><p>V</p></div>
        <div class='jour'><p>S</p></div>
        <div class='jour'><p>D</p></div>
      </div>
      <div id='D' class='semaine'>
        <div class='jour'><p>L</p></div>
        <div class='jour'><p>M</p></div>
        <div class='jour'><p>M</p></div>
        <div class='jour'><p>J</p></div>
        <div class='jour'><p>V</p></div>
        <div class='jour'><p>S</p></div>
        <div class='jour'><p>D</p></div>
      </div>


      </div>"
		);
	}
}
