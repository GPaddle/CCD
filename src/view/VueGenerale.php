<?php

namespace GEG\view;

class VueGenerale
{
	function header()
	{

		
        $app = \Slim\Slim::getInstance();
        $urlHome = $app->urlFor('route_home');

		$html = <<<END
		
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
	  
		<title>Gestion personnel</title>
	  
		<!-- Custom fonts for this template-->
        <link rel="stylesheet" type="text/css" href="$urlHome/style/style.css">
		<link href="$urlHome" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
END;
		return ($html);
	}

	function navBarre()
	{
		$html = <<<END
		<nav></nav>
END;
		return ($html);
	}

	public function js()
	{
		$html = <<<END
  <script src="test.js"></script>
END;

		return $html;
	}

	function footer()
	{
		$html = <<<END
		<footer>
		2019-2020 @IUT NC
		</footer>
END;
		return ($html);
	}


	public function render($html)
	{

		$header = $this->header();
		$footer = $this->footer();
		$navBarre = $this->navBarre();
		$js = $this->js();

		$general = <<<END

		$header
		<body>
			$navBarre
			<section class="content">
				$html
			</section>
			$footer


			$js
		</body>
END;

		echo $general;
	}
}
