<?php

namespace GEG\view;

class VueGenerale
{
	function header()
	{
		return ("<head></head>");
	}

	function footer()
	{
		return ("<footer></footer>");
	}

	function navBarre()
	{
		return ("<nav></nav>");
	}


	public function render($html)
	{

		$header = $this->header();
		$footer = $this->footer();
		$navBarre = $this->navBarre();

		$general = <<<END

		$header
		<body>
			$navBarre
			$html
			$footer
		</body>
END;

		echo $general;
	}
}
