<?php

namespace GEG\view;
class VuePrincipaleTest
{
	public function render()
	{
		$vGenerale = new VueGenerale();

		$vGenerale->render(
			"<div id='content'>
      <div id='A' class='semaine'>
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
